<?php
include_once 'connection1.php';
header('Content-Type : application/json');
	class prakarsh_represantative {
		
		private $db;
		private $connection;
		
		function __construct()
		{
			$this->db = new DB_Connection();
			$this->connection = $this->db->getConnection();
		}
		
		public function does_user_exist($phone_number)
		{
					
			$query = "Select * from prakarsh_represantative where phone_number = '$phone_number'";
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0)
			{
				$json['success'] = $phone_number;
				while($row = $result->fetch_assoc()) {
					$json['name'] = $row["name"];
					$json['points'] = $row["points"];
					
				}
				
				echo json_encode($json);
				mysqli_close($this -> connection);
			}else
			{	
					$json['error'] = 'Wrong password';
		
				echo json_encode($json);
				mysqli_close($this->connection);
				
				
			}
			
		}
		
	}
	
	
	$prakarsh_represantative = new prakarsh_represantative();
	
	if(isset($_POST['phone_number'])) {
		$phone_number = $_POST['phone_number'];
						
		if(!empty($phone_number)){
			
			
			$prakarsh_represantative-> does_user_exist($phone_number);
			
		}else{
			echo json_encode("you must type both inputs");
		}
		
	}
?>