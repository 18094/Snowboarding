<!DOCTYPE html>
<html>
<head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300&display=swap" rel="stylesheet">
	</head>
	<body>
		<section style="margin-left: 32%";>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
	
//Database connection
	$conn = new mysqli('localhost', '_nmiller1', 'O2JL50enYpyLIjRw', 'nmiller1_contact');
if($conn->connect_error){
	die("Error Connecting to Database: " . $conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contact(firstname, lastname, email, phonenumber)
	values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$firstname, $lastname, $email, $phonenumber);
	$stmt->execute();
	$stmt->close();
	$conn->close();
}
?>
			<p style="font-size: 650%;" "font-family: Caveat Brush, cursive;" "font-style: italic;">Form Submitted</p>
		<br>
		<br>
		<img src="Images/thumbsup.jpg" width="40%"; style="margin-left: 5%";>
		</section>
	</body>
	
</html>
