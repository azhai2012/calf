<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Database query wrapper.
 *
 * @package    Kohana/Database
 * @category   Query
 * @author     Kohana Team
 * @copyright  (c) 2008-2009 Kohana Team
 * @license    http://kohanaphp.com/license
 */
class Kohana_Query {

	// Query type
	protected $_type;

	// Cache lifetime
	protected $_lifetime;

	// SQL statement
	protected $_sql;

	// Quoted query parameters
	protected $_parameters = array();

	// Return results as associative arrays or objects
	protected $_as_object = FALSE;
	
	public static function query($type, $sql){
		
		return new Kohana_Query($type, $sql);
	}
	 

	/**
	 * Creates a new SQL query of the specified type.
	 *
	 * @param   integer  query type: Database::SELECT, Database::INSERT, etc
	 * @param   string   query string
	 * @return  void
	 */
	public function __construct($type, $sql)
	{
		$this->_type = $type;
		$this->_sql = $sql;
	}

	/**
	 * Return the SQL query string.
	 *
	 * @return  string
	 */
	final public function __toString()
	{
		try
		{
			// Return the SQL string
			return $this->compile(Kohana_Odbc::instance());
		}
		catch (Exception $e)
		{
			return Kohana::exception_text($e);
		}
	}

	/**
	 * Get the type of the query.
	 *
	 * @return  integer
	 */
	public function type()
	{
		return $this->_type;
	}

	/**
	 * Enables the query to be cached for a specified amount of time.
	 *
	 * @param   integer  number of seconds to cache or null for default
	 * @return  $this
	 */
	public function cached($lifetime = NULL)
	{
		$this->_lifetime = $lifetime;

		return $this;
	}

	/**
	 * Returns results as associative arrays
	 *
	 * @return  $this
	 */
	public function as_assoc()
	{
		$this->_as_object = FALSE;

		return $this;
	}

	/**
	 * Returns results as objects
	 *
	 * @param   string  classname or TRUE for stdClass
	 * @return  $this
	 */
	public function as_object($class = TRUE)
	{
		$this->_as_object = $class;

		return $this;
	}

	/**
	 * Set the value of a parameter in the query.
	 *
	 * @param   string   parameter key to replace
	 * @param   mixed    value to use
	 * @return  $this
	 */
	public function param($param, $value)
	{
		// Add or overload a new parameter
		$this->_parameters[$param] = $value;

		return $this;
	}

	/**
	 * Bind a variable to a parameter in the query.
	 *
	 * @param   string  parameter key to replace
	 * @param   mixed   variable to use
	 * @return  $this
	 */
	public function bind($param, & $var)
	{
		// Bind a value to a variable
		$this->_parameters[$param] =& $var;

		return $this;
	}

	/**
	 * Add multiple parameters to the query.
	 *
	 * @param   array  list of parameters
	 * @return  $this
	 */
	public function parameters(array $params)
	{
		// Merge the new parameters in
		$this->_parameters = $params + $this->_parameters;

		return $this;
	}

	/**
	 * Compile the SQL query and return it. Replaces any parameters with their
	 * given values.
	 *
	 * @param   object  Database instance
	 * @return  string
	 */
	public function compile(Kohana_Odbc $db)
	{
		// Import the SQL locally
		$sql = $this->_sql;
       
		if ( ! empty($this->_parameters))
		{
           
			// Quote all of the values
			$values = array_map(array($db, 'quote'), $this->_parameters);
           // print_r($values);
			// Replace the values in the SQL
			$sql = strtr($sql, $values);
		}

		return $sql;
	}  
		

	/**
	 * Execute the current query on the given database.
	 *
	 * @param   mixed    Database instance or name of instance
	 * @return  object   Database_Result for SELECT queries
	 * @return  mixed    the insert id for INSERT queries
	 * @return  integer  number of affected rows for all other queries
	 */
	public function execute($db = NULL)
	{
		if ( ! is_object($db))
		{
		
			// Get the database instance
			$db = Kohana_Odbc::instance($db);
		}

		// Compile the SQL query
		$sql = $this->compile($db);
		// Execute the query
		$result = $db->query($this->_type, $sql, $this->_as_object);
  
		return $result;
	}

} // End Database_Query
