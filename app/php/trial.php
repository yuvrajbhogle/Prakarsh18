<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['collage'])&& isset($_POST['city'])&& isset($_POST['phone_number'])){
        $name = $_POST['name'];
        $collage = $_POST['collage'];
		$city = $_POST['city'];
		$phone_number = $_POST['phone_number'];
 
        $query = "INSERT INTO `prakarsh_represantative` (name, collage, city, phone_number) VALUES ('$name', '$collage','$city','$phone_number')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>