<?php
    
    $conn=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($conn,"putovanja");

    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    $query="SELECT * FROM zadar";
    $result=mysqli_query($conn,$query);

    

?>