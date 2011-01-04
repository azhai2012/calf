<?php defined('SYSPATH') OR die('No direct access allowed.');


class Kohana_Result1 {
  
	// Fetch function and return type
	protected $fetch_type  = 'mssql_fetch_object';
	protected $return_type = MSSQL_ASSOC;
    private   $current_row = 0;
	private   $total_rows = 0;
    private   $_result;
    private   $sql;
	
	/**
	 * Sets up the result variables.
	 *
	 * @param  resource  query result
	 * @param  resource  database link
	 * @param  boolean   return objects or arrays
	 * @param  string    SQL query that was run
	 */
	
	
	public function __construct($result, $link, $sql, $object = TRUE)
	{
		//$this->_result= $result;
		// If the query is a resource, it was a SELECT, SHOW, DESCRIBE, EXPLAIN query
		if (is_resource($result))
		{
			$this->current_row = 0;
			$this->total_rows  = mssql_num_rows($result);
			$this->fetch_type = ($object === TRUE) ? 'mssql_fetch_object' : 'mssql_fetch_array';
		}
		elseif (is_bool($result))
		{
			if ($result == FALSE)
			{
				// SQL error
				throw new Kohana_Database_Exception('database.error', mssql_get_last_message($link).' - '.$sql);
			}
			else
			{
				// Its an DELETE, INSERT, REPLACE, or UPDATE querys
				$last_id          = mssql_query('SELECT @@IDENTITY AS last_id', $link);
				$result           = mssql_fetch_assoc($last_id);
				$this->insert_id  = $result['last_id'];
				$this->total_rows = mssql_rows_affected($link);
			}
		}
	

		// Set result type
		$this->result($link,$sql,$object);

        //$this->_result=$link;
        $this->_result = $result;// mssql_query($sql, $link);
		// Store the SQL
		$this->sql = $sql;
	
	}

	/**
	 * Destruct, the cleanup crew!
	 */
	public function __destruct()
	{
		
		if (is_resource($this->_result))
		{
			mssql_free_result($this->_result);
		}
	}

	public function result($result,$sql,$object = TRUE, $type = MSSQL_ASSOC)
	{
		$this->fetch_type = ((bool) $object) ? 'mssql_fetch_object' : 'mssql_fetch_array';
     	if ($this->fetch_type == 'mssql_fetch_object')
		{
			//$this->return_type = (is_string($type) AND Kohana::auto_load($type)) ? $type : 'stdClass';
		}
		else
		{
			$this->return_type = $type;
		}
     
		
		//return $this;
	}

	public function as_array($object = NULL, $type = MSSQL_ASSOC)
	{
	    return $this->result_array($object, $type);
	}

	public function result_array($object = NULL, $type = MSSQL_ASSOC)
	{
	    echo $this->sql;
		
		print_r($this->_result);
		$rows = array();

		if (is_string($object))
		{
			$fetch = $object;
		}
		elseif (is_bool($object))
		{
			if ($object === TRUE)
			{
				$fetch = 'mssql_fetch_object';

				// NOTE - The class set by $type must be defined before fetching the result,
				// autoloading is disabled to save a lot of stupid overhead.
				$type = (is_string($type) AND Kohana::auto_load($type)) ? $type : 'stdClass';
			}
			else
			{
				$fetch = 'mssql_fetch_array';
			}
		}
		else
		{
			// Use the default config values
			$fetch = $this->fetch_type;

			if ($fetch == 'mssql_fetch_object')
			{
				$type = (is_string($type) AND Kohana::auto_load($type)) ? $type : 'stdClass';
			}
		}
      
		
		if (mssql_num_rows($this->_result))
		{
			// Reset the pointer location to make sure things work properly
			mssql_data_seek($this->_result, 0);

			while ($row = $fetch($this->result, $type))
			{
				$rows[] = $row;
			}
		}

		return isset($rows) ? $rows : array();
	}

	public function list_fields()
	{
		$field_names = array();
		while ($field = mssql_fetch_field($this->_result))
		{
			$field_names[] = $field->name;
		}

		return $field_names;
	}

	public function seek($offset)
	{
		if ( ! $this->offsetExists($offset))
			return FALSE;

		return mssql_data_seek($this->_result, $offset);
	}

} // End mssql_Result Class