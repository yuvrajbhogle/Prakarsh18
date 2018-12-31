<?php
//header('Content-Type : application/json');


define('hostname', 'localhost');
define('username', 'prakarsh_abc');
define('password', 'rajpatel1234');
define('db_name', 'prakarsh_hello');

$connect = new mysqli_connect(hostname, username, password, db_name) or die("Could not connect to db");

	class prakarsh_represantative {
		
		private $db;
		private $connection;
		
		function __construct()
		{
		    echo '<p>Hello World</p>';
		}
            
	}
        
        $prakarsh_represantative = new prakarsh_represantative();
        
        ?>