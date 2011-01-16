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
	public    $last_query; 
	private   $_instance='azhai';
	

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
	
    public function quote($value)
	{
		if ($value === NULL)
		{
			return 'NULL';
		}
		elseif ($value === TRUE)
		{
			return "'1'";
		}
		elseif ($value === FALSE)
		{
			return "'0'";
		}
		elseif (is_object($value))
		{
			if ($value instanceof Database_Query)
			{
				// Create a sub-query
				return '('.$value->compile($this).')';
			}
			elseif ($value instanceof Database_Expression)
			{
				// Use a raw expression
				return $value->value();
			}
			else
			{
				// Convert the object to a string
				return $this->quote((string) $value);
			}
		}
		elseif (is_array($value))
		{
			return '('.implode(', ', array_map(array($this, __FUNCTION__), $value)).')';
		}
		elseif (is_int($value))
		{
			return (int) $value;
		}
		elseif (is_float($value))
		{
			// Convert to non-locale aware float to prevent possible commas
			return sprintf('%F', $value);
		}

		//return $this->escape($value);
		return $value;
	}
	
	/*
    public function escape($value)
	{
		// Make sure the database is connected
		$this->link or $this->connect();

		if (($value = mssql_real_escape_string((string) $value, $this->link)) === FALSE)
		{
			throw new Database_Exception(':error',
				array(':error' => mssql_errno($this->link)),
				mssql_error($this->link));
		}

		// SQL standard is to use single-quotes for all values
		return "'$value'";
	}
	*/
	

	public function query($type, $sql, $as_object) {
        // Make sure the database is connected
        //$this->_connection or $this->connect();

        if ( ! empty($this->db_config['profiling'])) {
            // Benchmark this query for the current instance
            $benchmark = Profiler::start("Database ({$this->_instance})", $sql);
        }

        if($type === Database::INSERT) {
            $sql .= "; SELECT @@IDENTITY as insertId;";
        }

  
        // Execute the query
     
        if (($result = mssql_query($sql, $this->link)) === FALSE) {
    
            if (isset($benchmark)) {
                // This benchmark is worthless
                Profiler::delete($benchmark);
            }

            throw new Database_Exception(':error',
            array(':error' => mssql_get_last_message().' SQL: '.$sql));
        }

        if (isset($benchmark)) {
            Profiler::stop($benchmark);
        }

        $this->_result = $result;
        // Set the last query
        $this->last_query = $sql;
        
        $select_result=array();
        
        if ($type === Database::SELECT) {
            // Return an iterator of results
           
            if ($as_object) {
            	
                while ($row = mssql_fetch_object($result)) {
                    array_push($select_result,$row);
                }
            }
            else {

                while ($row = mssql_fetch_assoc($result)) {
                    array_push($select_result,$row);
                }
            }
            return  $select_result;
        }
        elseif ($type === Database::INSERT) {

        	list($insert_id) = mssql_fetch_row($result);
            // Return a list of insert id and rows created
            return array(
                    (int)$insert_id,
                    mssql_rows_affected($this->link),
            );
        }
        else {
            // Return the number of rows affected
            return mssql_rows_affected($this->link);
        }
    }
	
	
	
}