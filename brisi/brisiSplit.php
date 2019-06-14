<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "");
$db=mysqli_select_db($conn,"putovanja");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$select="DELETE FROM split WHERE ID='".$_GET['del_id']."'";
$query=mysqli_query($conn,$select) or die($select);
header("Location:../admin/admin.php");

mysqli_close($conn);
?>

