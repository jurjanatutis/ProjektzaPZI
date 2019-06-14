<?php
	$pol = $_POST['pgrad'];
	$dol = $_POST['dgrad'];
	$cijena = $_POST['cijena'];
	$br_osoba = $_POST['kol'];
	$ime = $_POST['ime'];
	
	$conn = mysqli_connect("localhost","root","");
	
	$db = mysqli_select_db($conn, "rezervacije");
	
	if(!$conn){
        die("Could not connect");
    }
	$sql = "INSERT INTO rezervacije (ID,POLAZAK,DOLAZAK,CIJENA,OSOBA,IME)
	VALUES ('', '$pol', '$dol', '$cijena', '$br_osoba', '$ime')";

	if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
			header("Location: ../index.php");
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

    mysqli_close($conn);
?>