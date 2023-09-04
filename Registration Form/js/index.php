<?php


$conn = mysqli_connect('localhost', 'root', '', 'form');


$name = $_POST['name'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$address = $_POST['address'];
$pass = $_POST['pass'];


$insert = mysqli_query($conn, "INSERT INTO form (name,fname,email,address,pass)VALUES('$name', '$fname', '$email', '$address', '$pass')  ");

if ($insert) {
	echo '
		<script>
		alert("Your From has been Submitted Successfull");
		location = "index.html";
		</script>
		';
	}
	else{
		echo "Error";
	}





?>