<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbanme = "test";

// $conn = mysqli_connect($servername, $username, $password, $dbanme);

// if(!$conn){
//     die("Connection Failed " . mysqli_connect_error());
// }
// //echo "Connected Successfully";

return [
	'database' => [
		'name' => 'test',
		'username' => 'root',
		'password' => '',
		'connection' => 'mysql:host=127.0.0.1',
		'options' => [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]

];