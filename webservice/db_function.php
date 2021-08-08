<?php

class DB_Functions 

{

	private $db;

	public $conn;

	private $db_a;

	public $conn_a;

	public $token;

	private $result = array(); // Any results from a query will be stored here

    private $myQuery = "";// used for debugging process with SQL return

    private $numResults = "";// used for returning the number of rows

    private $last_insert_id = "";// used for returning the number of rows


    private $db_name;

    function __construct() 

    {

      include_once 'db_connect.php';

      require_once 'config.php';

      $this->db = new DB_Connect();

      $this->conn = $this->db->connect();

      $this->token = 'aed1e75b-9e55-4a0b-99ee-75b69453ac19';

      $this->db_name = DB_DATABASE;
		//$this->db_a = new DB_Connect();

		//$this->conn_a = $this->db_a->connect_agent();

  }

  public function clear()
  {
    $this->result = array();
    $this->myQuery = "";
    $this->numResults = "";
}

private function tableExists($table)
{

  $tablesInDb = @mysqli_query($this->conn,'SHOW TABLES FROM '.$this->db_name.' LIKE "'.$table.'"');

  if($tablesInDb)
  {

   if(mysqli_num_rows($tablesInDb)==1)
   {

                return true; // The table exists

            }

            else

            {

            	array_push($this->result,$table." does not exist in this database");

                return false; // The table does not exist

            }

        }

    }

    public function sql($sql)

    {

      $query = @mysqli_query($this->conn,$sql);

        $this->myQuery = $sql; // Pass back the SQL

        if($query){

			// If the query returns >= 1 assign the number of rows to numResults

         $this->numResults = mysqli_num_rows($query);

			// Loop through the query results by the number of rows returned

         for($i = 0; $i < $this->numResults; $i++)

         {

            $r = mysqli_fetch_array($query);

            $key = array_keys($r);

            for($x = 0; $x < count($key); $x++){

               		// Sanitizes keys so only alphavalues are allowed

                if(!is_int($key[$x])){

                   if(mysqli_num_rows($query) >= 1){

                      $this->result[$i][$key[$x]] = $r[$key[$x]];

                  }else{

                     $this->result = null;

                 }

             }

         }

     }

			return true; // Query was successful

		}else

		{

			array_push($this->result,mysqli_error($this->conn));

			return false; // No rows where returned

		}

	}

	// Function to SELECT from the database

	public function select($table, $rows = '*', $join = null, $where = null, $order = null, $limit = null){

		// Create query from the variables passed to the function

		$q = 'SELECT '.$rows.' FROM '.$table;

		if($join != null)

		{

			$q .= ' JOIN '.$join;

		}

        if($where != null)

        {

        	$q .= ' WHERE '.$where;

        }

        if($order != null)

        {

            $q .= ' ORDER BY '.$order;

        }


        if($limit != null)

        {

            $q .= ' LIMIT '.$limit;

        }

        $this->myQuery = $q; // Pass back the SQL

		// Check to see if the table exists

        if($this->tableExists($table))
        {

        	// The table exists, run the query


        	$query = @mysqli_query($this->conn,$q);



         if($query){

				// If the query returns >= 1 assign the number of rows to numResults

            $this->numResults = mysqli_num_rows($query);

				// Loop through the query results by the number of rows returned

            for($i = 0; $i < $this->numResults; $i++){

               $r = mysqli_fetch_array($query);

               $key = array_keys($r);



               for($x = 0; $x < count($key); $x++)
               {

                		// Sanitizes keys so only alphavalues are allowed

                   if(!is_int($key[$x]))
                   {    



                      if(mysqli_num_rows($query) >= 1)

                      {


                        $this->result[$i][$key[$x]] = $r[$key[$x]];

                    }else{

                        $this->result = null;

                    }

                }

            }

        }

				return true; // Query was successful

			}

			else

			{

				array_push($this->result,mysqli_error($this->conn));

				return false; // No rows where returned

			}

     }

     else

     {

      		return false; // Table does not exist

       }

   }


   public function getResult()
   {

    $val = $this->result;

    $this->result = array();

    return $val;

}

public function insert($table,$params=array())
{

    	// Check to see if the table exists

  if($this->tableExists($table)){

     $sql='INSERT INTO `'.$table.'` (`'.implode('`, `',array_keys($params)).'`) VALUES ("' . implode('", "', $params) . '")';

     return $sql;

            $this->myQuery = $sql; // Pass back the SQL

            // Make the query to insert to the database

            if($ins = @mysqli_query($this->conn,$sql))

            {

                $this->last_insert_id = mysqli_insert_id($this->conn);
                array_push($this->result,mysqli_insert_id($this->conn));

                return true; // The data has been inserted

            }else

            {

            	array_push($this->result,mysqli_error($this->conn));

                return false; // The data has not been inserted

            }

        }else{

        	return false; // Table does not exist

        }

    }

    public function numRows()

    {

        $val = $this->numResults;

        $this->numResults = array();

        return $val;

    }

	//Function to delete table or row(s) from database

    public function delete($table,$where = null)

    {

    	// Check to see if table exists

      if($this->tableExists($table)){

    	 	// The table exists check to see if we are deleting rows or table

         if($where == null){

                $delete = 'DROP TABLE '.$table; // Create query to delete table

            }else{

                $delete = 'DELETE FROM '.$table.' WHERE '.$where; // Create query to delete rows

            }

            // Submit query to database

            if($del = @mysqli_query($this->conn,$delete))

            {

            	array_push($this->result,mysqli_affected_rows($this->conn));

                $this->myQuery = $delete; // Pass back the SQL

                return true; // The query exectued correctly

            }

            else

            {

            	array_push($this->result,mysqli_error($this->conn));

               	return false; // The query did not execute correctly

               }

           }else{

            return false; // The table does not exist

        }

    }

    public function update($table,$params=array(),$where)

    {

    	// Check to see if table exists

    	if($this->tableExists($table))

    	{

    		// Create Array to hold all the columns to update

            $args=array();

            foreach($params as $field=>$value)

            {

				// Seperate each column out with it's corresponding value

                $args[]=$field.'="'.$value.'"';

            }

			// Create the query

            $sql='UPDATE '.$table.' SET '.implode(',',$args).' WHERE '.$where;


			// Make query to database

            $this->myQuery = $sql; // Pass back the SQL

            if($query = @mysqli_query($this->conn,$sql))

            {

                $this->numResults = mysqli_affected_rows($this->conn);
                array_push($this->result,mysqli_affected_rows($this->conn));

            	return true; // Update has been successful

            }

            else

            {
            	$this->numResults = '-1';

            	array_push($this->result,mysqli_error($this->conn));

                return false; // Update has not been successful

            }

        }

        else

        {

            return false; // The table does not exist

        }

    }

// ===================================================================================================
// 						user defined functions will come after this
// ===================================================================================================

function getallstudents()
{
	$this->clear();
	 $qr_u = $this->select('manage_student','*','',"",'','');
    $result_u = $this->getResult();
    return $result_u;
}

function insertstudent($query)
{
	$this->clear();

	$res=$this->sql($query);
	// return $this->last_insert_id;
	return $res;
}



// ===================================================================================================
    					// user defined function will ends here
// ===================================================================================================
}

?>