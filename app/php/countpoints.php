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
		
		public function does_user_exist($phone_number,$points,$name)
		{
			//,Email,Password,city,username,number
		
			$query = "Select * from prakarsh_represantative where phone_number = '$phone_number'";
			
			$result = mysqli_query($this->connection, $query);
			if(mysqli_num_rows($result)>0)
			{
				$sql = "UPDATE prakarsh_represantative SET points = '$points' WHERE phone_number='$phone_number'";
				$result = mysqli_query($this->connection, $sql);
				$query = "Select * from prakarsh_represantative where phone_number = '$phone_number'";
				$result1 = mysqli_query($this->connection, $query);
				//while($row = $result->fetch_assoc()) {
				//	echo $row["ID"];
				//}
				if($result == 1 )
				{
					
					$json['success'] = $phone_number;
					$json['points'] = $points; 
					$json['name'] = $name;
					
					while($row = $result1->fetch_assoc()) 
					{			
						$json['points'] = $row["points"];
					}
					
					echo json_encode($json);
					mysqli_close($this -> connection);
				}
			}
			
		}
		
	}
	
	
	$prakarsh_represantative = new prakarsh_represantative();
	
	if(isset($_POST['phone_number'],$_POST['points'],$_POST['name'])) {
		$phone_number = $_POST['phone_number'];
		$points = $_POST['points'];
		$name = $_POST['name'];
						
		if(!empty($phone_number) && !empty($points) && !empty($name)){
						
			$prakarsh_represantative-> does_user_exist($phone_number,$points,$name);
			
		}else{
			echo json_encode("you must type both inputs");
		}
		
	}
?>