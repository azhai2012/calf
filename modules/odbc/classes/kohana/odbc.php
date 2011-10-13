<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * MSSQL Database Driver
 *
 * @package    Core
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Kohana_Odbc
{
	/**
	 * Database connection link
	 */
	const SELECT =  1;
	const INSERT =  2;
	const UPDATE =  3;
	const DELETE =  4; 
	 
	protected $link;
	private   $_result;
	private   $sql;
	public    $last_query; 
	private   $_instance='azhai';
	public static $default = 'default';
    public static $instances = array();
	/**
	 * Database configuration
	 */
	protected $db_config;

	
	public static function instance($config = NULL)
	{ 
			
		return new Kohana_Odbc($config);
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
            $name= Odbc::$default;  
		    $config = Kohana::$config->load('odbc')->$name;
	
	    }
	
	    $this->db_config = $config;	    
       
	    $this->connect();
		
	}
	
	

	/**
	 * Closes the database connection.
	 */
	public function __destruct()
	{
		is_resource($this->link) and odbc_close($this->link);
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
	

		// Build the connection info
		$host ='Driver={SQL Server};server='.$hostname;
		// Windows uses a comma instead of a colon
		$ports = (isset($ports) AND is_string($ports)) ? ','.$ports : '';
	
		// Make the connection and select the database
		if (($this->link = odbc_connect($host.$ports, $username, $password,TRUE)))
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
	
	

	public function query($type, $sql, $as_object) {
      

        $result = odbc_exec($this->link,$sql);
   
        if ($result) {
       
        $this->_result = $result;
        // Set the last query
        $this->last_query = $sql;
        
        $select_result=array();
        
        if ($type === Odbc::SELECT) {
            // Return an iterator of results
       
            if ($as_object) {
            	
                while ($row =odbc_fetch_object($result)) {
                    array_push($select_result,$row);
                }
            }
            else {

                while ($row = odbc_fetch_array($result)) {
                    array_push($select_result,$row);
                }
            }
            return  $select_result;
        }
        elseif ($type === Odbc::INSERT) {
        	return 1;
        }
        else {
            // Return the number of rows affected
            return odbc_result($this->link);
        }
    }
	
  }
	
}