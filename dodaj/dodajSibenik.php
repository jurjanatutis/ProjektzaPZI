<?php
include('../session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <title>Jadrolinija Admin </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../admin/css/sb-admin.css" rel="stylesheet">
  <link href="../admin/css/table.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Jadrolinija-Admin</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
        <input type="button" class="btn btn-danger" value="Odjava" onclick="location.href='../logout.php'">
        
      </div>
    </form>

    <!-- Navbar -->
    
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
      <a class="nav-link" href="../admin/admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Početna</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Luke</h6>
          <a id="button" class="dropdown-item" href="dodajDubrovnik.php" value="Dubrovnik">Dubrovnik</a>
          <a id="button" class="dropdown-item" href="dodajSplit.php" value="Split">Split</a>
          <a id="button" class="dropdown-item" href="dodajPloce.php" value="Ploce">Ploce</a>
          <a id="button" class="dropdown-item" href="dodajZadar.php" value="Zadar">Zadar</a>
          <a id="button" class="dropdown-item" href="dodajRijeka.php" value="Rijeka">Rijeka</a>
          <a id="button" class="dropdown-item" href="3" value="Sibenik">Sibenik</a>
                                      
          
        </div>
      </li>
      
      
    </ul>
    <div id="content-wrapper">
    <div class="container-fluid">

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dodaj</a>
  </li>
  <li class="breadcrumb-item active">Putovanje</li>
</ol>
    </div>
    <div id="content-wrapper">
    <form action="dodajPutovanjeSibenik.php" method='post'>
     <?php include('izbornik.php')?>
</form>
    </div>
 
    
    <script src="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="http://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
  <!-- Bootstrap core JavaScript-->
  <script src="../admin/vendor/jquery/jquery.min.js"></script>
  <script src="../admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="../admin/vendor/chart.js/Chart.min.js"></script>
  <script src="../admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="../admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../admin/js/sb-admin.min.js"></script>
  <script src="../admin/css/table.js"></script>
  <!-- Demo scripts for this page-->
  <script src="../admin/js/demo/datatables-demo.js"></script>
  <script src="../admin/js/demo/chart-area-demo.js"></script>
   <script>
 var timepicker = new TimePicker('time', {
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});


   </script>
</body>

</html>
