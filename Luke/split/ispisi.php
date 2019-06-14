<?php
    $conn = mysqli_connect("localhost","root", "");
    $db=mysqli_select_db($conn,"putovanja");
    $output='';
    
    $sql = "SELECT * FROM split";
    $result = mysqli_query($conn, $sql);

    $rows = mysqli_num_rows($result);

    if($rows > 0){
      
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
     <div class="container">
	<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" >Split</h3>
        </div>   
        <form action="../rezerviraj.php" method="post">
        <input type="text" hidden name="dgrad"  value="<?php echo $row["GRAD"];?>">
        <input type="text" hidden  name="cijena" value="<?php echo $row["CIJENA"];?>">
        <input type="text" hidden name="pgrad" value="Split">
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row toggle" id="dropdown-detail-1" data-toggle="detail-1">
                    <div class="col-xs-10">
                        <p  ><?php echo $row["GRAD"];?></p>
                    </div>
                    <div class="col-xs-2"><i class="fa fa-chevron-down pull-right"></i></div>
                </div>
                <div id="detail-1">
                    <hr></hr>
                    <div class="container">
                        <div class="fluid-row">
                            <div class="col-xs-1">
                                Broj osoba:
                            </div>
                            <div class="col-xs-3">
                                <input name="kol" type="number">
                            </div>
                            <div class="col-xs-1">
                                Ime:
                            </div>
                            <div class="col-xs-3">
                                <input name="ime" type="text">
                            </div>
                            <div class="col-xs-1" >
                                <?php echo $row['CIJENA'];?> kn
                            </div>
                            <div class="col-xs-3">
                            <button type="submit" class="btn btn-default" >Rezerviraj</button>
                            </div><br/>
                        
                            
                        </div>
                    </div>
                </div>
            </li>
            
        </ul>
        </form>
	</div>
</div>
<?php
    }
    }
?>