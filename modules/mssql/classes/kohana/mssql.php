<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * MSSQL Database Driver
 *
 * @package    Core
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Kohana_Mssql
{
	/**
	 * Database connection link
	 */
	protected $link;
	private   $_result;
	private   $sql;

	/**
	 * Database configuration
	 */
	protected $db_config;

	
	public static function instance($config = NULL)
	{   
		return new Kohana_Mssql($config);
	}
	
	/**
	 * Sets the config for the class.
	 *
	 * @param  array  database configuration
	 */
	
	public function __construct($config)
	{
		if ($config === NULL)
	    {
				// Load the configuration for this database
		    $config = Kohana::config('mssql')->default;
	    }
	
	    $this->db_config = $config;	    
       
	    $this->connect();
		
	}

	/**
	 * Closes the database connection.
	 */
	public function __destruct()
	{
		is_resource($this->link) and mssql_close($this->link);
	}

	/**
	 * Make the connection
	 *
	 * @return return connection
	 */
	public function connect()
	{
		// Check if link already exists
		if (is_resource($this->link))
			return $this->link;

		// Import the connect variables
		//extract($this->db_config['connection'],EXTR_OVERWRITE);
        $username     =  $this->db_config['connection']['username'];
        $password     =  $this->db_config['connection']['password']; 
        $ports        =  $this->db_config['connection']['ports']; 
        $hostname     =  $this->db_config['connection']['hostname']; 
        $databasename =  $this->db_config['connection']['databasename'];
        
		// Persistent connections enabled?
		$connect = ($this->db_config['persistent'] == TRUE) ? 'mssql_pconnect' : 'mssql_connect';

		// Build the connection info
		$host = isset($hostname) ? $hostname : '';
        
		// Windows uses a comma instead of a colon
		$ports = (isset($ports) AND is_string($ports)) ? (KOHANA_IS_WIN ? ',' : ':').$ports : '';
		
		// Make the connection and select the database
		if (($this->link = @$connect($host.$ports, $username, $password,TRUE)) AND mssql_select_db($databasename, $this->link))
		{
			/* This is being removed so I can use it, will need to come up with a more elegant workaround in the future...
			 *
			if ($charset = $this->db_config['character_set'])
			{
				$this->set_charset($charset);
			}
			*/
			// Clear password after successful connect
			$this->db_config['connection']['password'] = NULL;

			return $this->link;
		}

		return FALSE;
	}

	public function query($sql)
	{
		$this->sql = $sql;
		
		$this->_result = mssql_query($sql, $this->link);
		
		return $this;
	}
	
	public function totalcount(){
		
		return mssql_num_rows($this->_result);
	}
	
	public function as_array()
	{
		$rows = array();
		
	    if ($this->totalcount())
		{
			// Reset the pointer location to make sure things work properly
			mssql_data_seek($this->_result, 0);
          
			while ($row = mssql_fetch_array($this->_result, MSSQL_ASSOC))
			{
				$rows[] = $row;
			}
		}

		return isset($rows) ? $rows : array();
	}
	
	public function escape_table($table)
	{
		if (stripos($table, ' AS ') !== FALSE)
		{
			// Force 'AS' to uppercase
			$table = str_ireplace(' AS ', ' AS ', $table);

			// Runs escape_table on both sides of an AS statement
			$table = array_map(array($this, __FUNCTION__), explode(' AS ', $table));

			// Re-create the AS statement
			return implode(' AS ', $table);
		}
		return '['.str_replace('.', '[.]', $table).']';
	}

	public function escape_column($column)
	{
		if (!$this->db_config['escape'])
			return $column;

		if ($column == '*')
			return $column;

		// This matches any functions we support to SELECT.
		if ( preg_match('/(avg|count|sum|max|min)\(\s*(.*)\s*\)(\s*as\s*(.+)?)?/i', $column, $matches))
		{
			if ( count($matches) == 3)
			{
				return $matches[1].'('.$this->escape_column($matches[2]).')';
			}
			else if ( count($matches) == 5)
			{
				return $matches[1].'('.$this->escape_column($matches[2]).') AS '.$this->escape_column($matches[2]);
			}
		}

		// This matches any modifiers we support to SELECT.
		if ( ! preg_match('/\b(?:rand|all|distinct(?:row)?|high_priority|sql_(?:small_result|b(?:ig_result|uffer_result)|no_cache|ca(?:che|lc_found_rows)))\s/i', $column))
		{
			if (stripos($column, ' AS ') !== FALSE)
			{
				// Force 'AS' to uppercase
				$column = str_ireplace(' AS ', ' AS ', $column);

				// Runs escape_column on both sides of an AS statement
				$column = array_map(array($this, __FUNCTION__), explode(' AS ', $column));

				// Re-create the AS statement
				return implode(' AS ', $column);
			}

			return preg_replace('/[^.*]+/', '[$0]', $column);
		}

		$parts = explode(' ', $column);
		$column = '';

		for ($i = 0, $c = count($parts); $i < $c; $i++)
		{
			// The column is always last
			if ($i == ($c - 1))
			{
				$column .= preg_replace('/[^.*]+/', '[$0]', $parts[$i]);
			}
			else // otherwise, it's a modifier
			{
				$column .= $parts[$i].' ';
			}
		}
		return $column;
	}

	/**
	 * Limit in SQL Server 2000 only uses the keyword
	 * 'TOP'; 2007 may have an offset keyword, but
	 * I am unsure - for pagination style limit,offset
	 * functionality, a fancy query needs to be built.
	 *
	 * @param unknown_type $limit
	 * @return unknown
	 */
	public function limit($limit, $offset=null)
	{
		return 'TOP '.$limit;
	}

	public function compile_select($database)
	{
		$sql = ($database['distinct'] == TRUE) ? 'SELECT DISTINCT ' : 'SELECT ';
		$sql .= (count($database['select']) > 0) ? implode(', ', $database['select']) : '*';

		if (count($database['from']) > 0)
		{
			// Escape the tables
			$froms = array();
			foreach ($database['from'] as $from)
				$froms[] = $this->escape_column($from);
			$sql .= "\nFROM ";
			$sql .= implode(', ', $froms);
		}

		if (count($database['join']) > 0)
		{
			foreach($database['join'] AS $join)
			{
				$sql .= "\n".$join['type'].'JOIN '.implode(', ', $join['tables']).' ON '.$join['conditions'];
			}
		}

		if (count($database['where']) > 0)
		{
			$sql .= "\nWHERE ";
		}

		$sql .= implode("\n", $database['where']);

		if (count($database['groupby']) > 0)
		{
			$sql .= "\nGROUP BY ";
			$sql .= implode(', ', $database['groupby']);
		}

		if (count($database['having']) > 0)
		{
			$sql .= "\nHAVING ";
			$sql .= implode("\n", $database['having']);
		}

		if (count($database['orderby']) > 0)
		{
			$sql .= "\nORDER BY ";
			$sql .= implode(', ', $database['orderby']);
		}

		if (is_numeric($database['limit']))
		{
			$sql .= "\n";
			$sql .= $this->limit($database['limit']);
		}

		return $sql;
	}

	public function escape_str($str)
	{
		if (!$this->db_config['escape'])
			return $str;

		is_resource($this->link) or $this->connect();
		//mssql_real_escape_string($str, $this->link); <-- this function doesn't exist

		$characters = array('/\x00/', '/\x1a/', '/\n/', '/\r/', '/\\\/', '/\'/');
		$replace    = array('\\\x00', '\\x1a', '\\n', '\\r', '\\\\', "''");
		return preg_replace($characters, $replace, $str);
	}

	public function list_tables()
	{
		$sql    = 'SHOW TABLES FROM ['.$this->db_config['connection']['database'].']';
		$result = $this->query($sql)->result(FALSE, MSSQL_ASSOC);

		$retval = array();
		foreach ($result as $row)
		{
			$retval[] = current($row);
		}

		return $retval;
	}

	public function show_error()
	{
		return mssql_get_last_message($this->link);
	}

	public function list_fields($table)
	{
		$result = array();

		foreach ($this->field_data($table) as $row)
		{
			// Make an associative array
			$result[$row->Field] = $this->sql_type($row->Type);
		}

		return $result;
	}

	public function field_data($table)
	{
		$query = $this->query('SHOW COLUMNS FROM '.$this->escape_table($table), $this->link);

		return $query->result_array(TRUE);
	}
}