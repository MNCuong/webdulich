<?php
	class Database {
		private $hostname='localhost';
		private $username='root';
		private $pass='';
		private $db='';//ten database
		
		
		private $conn=null;
		private $result=null;
		
		public function connect(){
			$conn= new mysqli($hostname, $username, $pass, $db)  or die ('Looi');
			return $conn;
		}
		
		
		public function execute($sql){
			$result = $conn->query($sql);
			return $result;
		}
		

	}



?>