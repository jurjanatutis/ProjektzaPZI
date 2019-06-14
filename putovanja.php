<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rezerviraj</title>
</head>
<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
        
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="admin/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<body>
<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Jadrolinija-Rezerviraj</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>
</nav>
    <div class="row">
                      <div class="col-sm-2">
                          <nav class="nav-sidebar">
                              <ul class="nav">
                                
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry='dubrovnik'" value="Dubrovnik">Dubrovnik</a></li>
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry=this.value" value="Split">Split</a></li>
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry=this.value" value="Ploce">Ploce</a></li>
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry=this.value" value="Zadar">Zadar</a></li>
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry=this.value" value="Rijeka">Rijeka</a></li>
                                        <li><a id="button" class="kategorija" href="ispis.php?ctgry=this.value" value="Sibenik">Sibenik</a></li>
                                      </ul>
                                     


    <!-- Navbar -->
    
  </nav>
  </div></div>
  <div id="sadrzaj">
  
  </div>
<script>
            
            $(".kategorija").click(function(e){
                console.log('tute');
              var url = $(this).attr("href");
              console.log(url);
              $.get(url,function(data){
                $("#sadrzaj").html(data);
              });
              return false;
            });
            function Pretraga(value){
              console.log("funk");
              $.post("ispisi.php",{q:value},function(data){
                console.log("fja");
                $("#sadrzaj").html(data);
                console.log(data);
                console.log("ispiso");
              });
              
            }

            

          </script>
</body>
</html>