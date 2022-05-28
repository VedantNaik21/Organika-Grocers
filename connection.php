<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];

	// Database connection
	$server = 'localhost';
	$username1 = 'root';
	$password1 = '';
	$dbname = 'registration';
	$conn = new mysqli($server,$username1,$password1,$dbname);
	// $conn = new mysqli('localhost','root','','mydata');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into grocers(username, email, password, confirm) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $username, $email, $password, $confirm);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Your Registration is Successful!!";
		$stmt->close();
		$conn->close();
	}
?>