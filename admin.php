<?php
include('../session.php');
include('ispis_rezervacija.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Jadrolinija Admin </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="css/table.css" rel="stylesheet">

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
        <a class="nav-link" href="admin.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Početna</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Dodaj</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Luke</h6>
          <a id="button" class="dropdown-item" href="../dodaj/dodajDubrovnik.php" value="Dubrovnik">Dubrovnik</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajSplit.php" value="Split">Split</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajPloce.php" value="Ploce">Ploce</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajZadar.php" value="Zadar">Zadar</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajRijeka.php" value="Rijeka">Rijeka</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajSibenik.php" value="Sibenik">Sibenik</a>
                                      
          
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Brisi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Luke</h6>
          <a id="button" class="dropdown-item" href="../brisi/Dubrovnik.php" value="Dubrovnik">Dubrovnik</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajSplit.php" value="Split">Split</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajPloce.php" value="Ploce">Ploce</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajZadar.php" value="Zadar">Zadar</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajRijeka.php" value="Rijeka">Rijeka</a>
          <a id="button" class="dropdown-item" href="../dodaj/dodajSibenik.php" value="Sibenik">Sibenik</a>
                                      
          
        </div>
      </li>
      
      
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
        <section>

                                <div class="tbl-header">
                                <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ime</th>
                                        <th>Polazak</th>
                                        <th>Dolazak</th>
                                        <th>Cijena</th>
                                        <th>Akcija</th>
                                    </tr>
                                    </thead>
                                </table>
                                </div>
                                <div class="tbl-content">
                                <table cellpadding="0" cellspacing="0" border="0" id="employee_table">
                                <?php 
                                        
                                        if(mysqli_num_rows($result)>0){
                                            while($row=mysqli_fetch_assoc($result)){
                                            
                                            ?>
                                            <tr>
                                                <td id="td"> <?php echo $row['ID'] ?> </td>
                                                <td id="td"><?php echo $row['IME'] ?></td>
                                                <td id="td"><?php echo $row['POLAZAK'] ?></td>
                                                <td id="td"><?php echo $row['DOLAZAK'] ?></td>
                                                <td id="td"><?php echo $row['CIJENA'] ?></td>
                                                <td id="td">
                                                    <input type='button' onclick=brisi(<?php echo $row['ID']; ?>) class="btn btn-danger btn-xs" name='brisi'value='Briši'/>
                                                    <button type="button" class="btn btn-warning btn-xs" value='Uredi' onclick=uredi(<?php echo $row['ID']; ?>)><a href="uredi.php?edit_id=<?php echo $row['ID'];?>">Uredi</a></button>

                                                </td>
                                            </tr>
                                            <?php
                                                }} ?>
                                    
                                </table>
                                </div>
                            </section>


 
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
  <script src="css/table.js"></script>
  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
    <script>
                                function brisi(id){
                                    if(confirm('Da li ste sigurni da želite izbrisati rezervaciju?')){
                                        window.location.href='brisi.php?del_id=' +id+'';
                                        return true;
                                    }}
                                function uredi(id){
                                    window.location.href='uredi.php?edit_id=' +id+'';
                                    return true;
                              }
                                      
                            </script>
  </script>
</body>

</html>
