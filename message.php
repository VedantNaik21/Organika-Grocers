<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$topic = $_POST['topic'];
    $textarea = $_POST['textarea'];

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
		$stmt = $conn->prepare("insert into messagebox(name, email, number, topic, textarea) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiss", $name, $email, $number, $topic, $textarea);
		$execval = $stmt->execute();
		// echo $execval;
		echo "Your Message is sent to our website.";
		$stmt->close();
		$conn->close();
	}
?>