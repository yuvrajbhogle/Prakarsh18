<?php
ini_set("include_path", '/home/prakarsh/php:' . ini_get("include_path") );
include_once 'connection1.php';
header('Content-Type : application/json;charset=utf-8');
	class prakarsh_represantative {
		
		private $db;
		private $connection;
		
		function __construct()
		{
			$this->db = new DB_Connection();
			$this->connection = $this->db->getConnection();
		}
		
		public function does_user_exist($name,$collage,$city,$phone_number)
		{
		
			//$query1 = "Insert into user (id) values ('$id')";
				
				$query = "Insert into prakarsh_represantative (name, collage,city,phone_number) values ('$name','$collage','$city','$phone_number')";
				$inserted = mysqli_query($this->connection, $query);
				if($inserted == 1 )
				{
					$json['success'] = $phone_number;
					$json['name'] = $name;
					
				}
				else
					{
						$json['error'] = 'Wrong password';
					}
					echo json_encode($json);
					mysqli_close($this->connection);
				
		}
			
			
		
		
	}
	
	
	$prakarsh_represantative = new prakarsh_represantative();
	
	if(isset($_POST['name'],$_POST['collage'],$_POST['city'],$_POST['phone_number'])) {
		$name = $_POST['name'];
		$collage = $_POST['collage'];
		$city = $_POST['city'];
		$phone_number = $_POST['phone_number'];
						
		if(!empty($name) && !empty($collage) && !empty($city) && !empty($phone_number)){
			
			$prakarsh_represantative-> does_user_exist($name,$collage,$city,$phone_number);
			
		}else{
			echo json_encode("you must type both inputs");
		}
		
	}
?>