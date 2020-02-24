
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
		$this -> result = mysqli_query($this -> connection, $query);

		if (!$this -> result) {

			$this -> lastError = $this -> connection -> error;
			if ($this -> result instanceof MySQLi_Result){
				return array();
			}
			else {
				return $this -> result;
			}

		} else {
			if ($this -> result instanceof MySQLi_Result){
				$data = mysqli_fetch_all($this -> result, MYSQLI_ASSOC);
	   			mysqli_free_result($this -> result);
	   			return $data;
	   		}
	   		else {
	   			return $this -> result;
	   		}
		}
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

	public function createCategory($category) {
			$this -> executeSentence("INSERT INTO category (name, parent) VALUES ('".$category -> name."',"
				.$category -> parent. ");"
			);
	}

	public function createPublication($publication) {
			$this -> executeSentence("INSERT INTO publication (title, publi_img_url, description, price, fk_rut, fk_category) VALUES ('".$publication -> title."','"
				.$publication -> publi_img_url."','"
				.$publication -> description."','"
				.$publication -> price."','"
				.$publication -> fk_rut."',"
				.$publication -> fk_category.");"
			);
	}

	public function deleteUser($rut) {
			$this -> executeSentence("DELETE FROM publication WHERE fk_rut='".$rut."';");
			$this -> executeSentence("DELETE FROM user WHERE rut='".$rut."';");
	}

	public function deletePublicationByUser($rut) {
			$this -> executeSentence("DELETE FROM publication WHERE fk_rut='".$rut."';");
	}

	public function deletePublicationById($id) {
			$this -> executeSentence("DELETE FROM publication WHERE id_publication=".$id.";");
	}

	public function selectPublicationById($id) {
			$this -> executeSentence("SELECT * FROM publication WHERE id_publication=".$id.";");
	}

	public function getPublications() {
			$this -> executeSentence("SELECT * FROM publication;");
	}

	public function selectPublicationByUser($rut) {
			$this -> executeSentence("SELECT * FROM publication WHERE fk_rut='".$rut."';");
	}

	public function selectPublicationByCategory($category) {
			$this -> executeSentence("SELECT * FROM publication WHERE fk_category=".$category.";");
	}

	public function selectCategoryById($id) {
			$this -> executeSentence("SELECT * FROM category WHERE id_category=".$id.";");
	}

	public function selectCategoryByParent($parent) {
			$this -> executeSentence("SELECT * FROM category WHERE parent=".$parent.";");
	}

	public function filterPublicationByPriceASC() {
			$this -> executeSentence("SELECT * FROM publication ORDER BY price ASC;");
	}

	public function filterPublicationByPriceDESC() {
			$this -> executeSentence("SELECT * FROM publication ORDER BY price DESC;");
	}

	// Closes the connections
	public function closeConnection() {
		if ($this -> connection) {
			mysqli_close($this -> connection);
		}
	}

}

?>
