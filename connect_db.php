<?php

class  Manage_database{
	private $dbname;
	private $servername;
	private $username ;
	private $password;
	private $conn;

	function __constracor($dbname,$servername,$username,$password){
		$this->dbname=$dbname;
		$this->servername=$servername;
		$this->username=$username;
		$this->password = $password;
		$this->conn=$conn;
	}

	function set_connection($servername,$username,$password,$dbname){
		$this->conn= mysqli_connect($servername,$username,$password,$dbname);
		
	}

	function get_conn(){
		return $this->conn;
	}
	function check_conn(){
		if ($this->conn){
			echo "Connected successfully";
		}else{
			die("Connection failed: " .mysqli_connect_error());
		}
	}
	function add_shipingcompany(){
		if(isset($_POST["details"])){
			$logistic_id= uniqid();
			$compname=$_POST["compname"];
			$name_logis=$_POST["namelogistic"];
			$weight=$_POST["weight"];
			$location=$_POST['locationproduct'];
		
			$sql = "INSERT INTO shipping_companies (logistics_id,Comp_name,name_logistic,Weight,location) VALUES ('$logistic_id','$compname','$name_logis','$weight','$location')";
			if ($this->conn->query($sql)===TRUE) {
			  
			  echo "New record created succesfully";
			}else {
			  echo " Error: " .$sql . "<br>" . $ship_db->get_conn()->error;
			}
			
		  }
	}
}
$ship_db=new Manage_database();
$ship_db->set_connection('localhost','root','','pkaa39122022');
$ship_db->get_conn();
$ship_db->add_shipingcompany();

  
  
 
  //$ship_db->getconn();
  

?>