<?php

define("MYSQL_SERVER","localhost");
define("MYSQL_USER","root");
define("MYSQL_PASSWORD","");
define("MYSQL_DB","project");


class DB {
		private $con = false;
		private $data = array();

		public function __construct() {
			$this->con = new mysqli(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB);
			
			$this->con->connect_error;
		}

		public function qrySelect($sql) {
			$sql = "SELECT * FROM users ORDER BY `id` DESC";
			$qry = $this->con->query($sql);
			if($qry->num_rows > 0) {
				while($row = $qry->fetch_object()) {
					$this->data[] = $row;
				}
			} else {
				$this->data[] = null;
			}
            return $this->data;
			$this->con->close();
		}

		public function qryFire($sql=null) {
			if($sql !== null) {
				$this->con->query($sql);
				
			}
			
			
		}

}



/*function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if (!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    



    return $link;*/
        

?>