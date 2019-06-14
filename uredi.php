<?php

// Create connection
$connect = mysqli_connect("localhost", "root", "", "rezervacije");
// Check connection
if(isset($_GET['edit_id'])){
      $sql='SELECT * FROM rezervacije WHERE ID='.$_GET['edit_id'];
      $result = mysqli_query($connect, $sql);
      $row = mysqli_fetch_array($result);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="uredi.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
      <form method="post" id="insert_form">  
            <label>Ime </label>  
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['IME']; ?>"/>  
            <br />  
            <label>Dolazak </label>  
            <input type="text" name="sname" id="sname" class="form-control" value="<?php echo $row['DOLAZAK']; ?>"/>  
            <br />
            <label>Cijena </label>  
            <input type="number" name="user" id="user" class="form-control" value="<?php echo $row['CIJENA']; ?>"/> </br>
            <input type="submit" name="btn-update" class="btn btn-secondary" id="btn-update" onclick=update() value="Update">
      </form>
      <?php
            if(isset($_POST['btn-update'])){
                  echo 'radi';
                  $grad = $_POST['name'];
                  $pol = $_POST['sname'];
                  $cijena = $_POST['user'];
                  $update = "UPDATE rezervacije SET Dolazak='$pol', IME='$grad', CIJENA='$cijena' WHERE ID=".$_GET['edit_id'];
                  $up = mysqli_query($connect, $update);
                  if(!isset($sql)){
                        die("Nije uspjelo".mysqli_connect_error());
                  }
                  else{
                        header("location: admin.php");
                  }
            }
      
      ?>
      <script>
            function update(){
                  var x;
                  if(confirm('Uređivanje uspiješno') == true){
                        x="update";
                  }
            }
      </script>  
</body>
</html>
