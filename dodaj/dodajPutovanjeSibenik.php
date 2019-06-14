<?php
	$pol = $_POST['ograd'];
	$cijena = $_POST['cijena'];
	$vrijeme = $_POST['vrijeme'];

	
	$conn = mysqli_connect("localhost","root","");
	
	$db = mysqli_select_db($conn, "putovanja");
	
	if(!$conn){
        die("Could not connect");
    }
	$sql = "INSERT INTO sibenik (ID, GRAD, CIJENA, POLAZAK)
	VALUES ('','$pol', '$cijena', '$vrijeme' )";

	if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			header("Location: ../index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

    mysqli_close($conn);
?>