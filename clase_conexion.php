
<?php

include_once('model.php');

class SQLConnection {

	// MySQL Hostname
	var $hostname;
	// MySQL Username
	var $username;
	// MySQL Password
	var $password;
	// MySQL Database
	var $database;
	// Conexion a la bd
	var $connection;
	// Ultimo error generado por la bd
	var $lastError;
	// Guarda el ultimo query ejecutado
	var $lastQuery;
	// Holds the MySQL query result
	var $result;

	function __construct() {
		$this -> database = 'yoarriendo';
		$this -> username = 'root';
		$this -> password = '';
		$this -> hostname = 'localhost';

		$this -> Connect();
	}

	private function Connect() {
		$this -> CloseConnection();
		$this -> connection = mysqli_connect($this -> hostname, $this -> username, $this -> password, $this -> database);

		if (!$this -> connection) {
			$this -> lastError = 'No se pudo conectar a la base de datos';
			return false;
		} else if ($this -> connection -> connect_errno) {
			$this -> lastError = 'No se pudo conectar a la base de datos'. $this -> connection -> connect_errno;
			return false;
		}

		return true;
	}

		public function executeSentence($query) {
		$this -> lastQuery = $query;
		if (!$this -> result = mysqli_query($this -> connection, $query)) {
			$this -> lastError = $this -> connection -> error;

			if ($this -> result instanceof MySQLi_Result)
				return array();
			else 
				return $this -> result;
		}

		if ($this -> result instanceof MySQLi_Result) { 
			$data = mysqli_fetch_all($this -> result, MYSQLI_ASSOC);
   			mysqli_free_result($this -> result);
   			return $data;
   		}
   		else 
   			return $this -> result;
		
	}

		public function createUser($user) {
			$this -> executeSentence("INSERT INTO user VALUES ('".$user -> rut."','"
				.$user -> name."','"
				.$user -> last_name."','"
				.$user -> user_img_url."','"
				.$user -> birthday."','"
				.$user -> mail."','"
				.$user -> nickname."','"
				.$user -> phone."','"
				.$user -> password."');"
			);
	}

	// Closes the connections
	public function closeConnection() {
		if ($this -> connection) {
			mysqli_close($this -> connection);
		}
	}

}

$mySQL = new SQLConnection();

// $query = $mySQL -> executeSentence("SELECT * FROM publication");

// printf ("%s", $query[0]['description']);


$result = $mySQL -> createUser(new User("26002370-5", "Karelia", "Rasquin", "karelia.png", "1957-04-09", "raska09@gmail.com", "raska09", "930246472", "1234567890"));
echo $mySQL -> lastError;
echo $result;
?>