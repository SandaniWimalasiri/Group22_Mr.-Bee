<?php 
require_once('../../config/connect.php'); 
session_start();
$beehiveno_error=$fdate_error= $ftime_error=$feedingtype_error=$famount_error="";
$beehiveno=$fdate= $ftime=$feedingtype=$famount="";

    if(isset($_POST['enter'])){

        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "*Beehive No is Required";
          } else {
            $beehiveno = test_input($_POST["beehiveno"]);
          }

        if (empty($_POST["fdate"])) {
            $fdate_error = "*Feeding Date is Required";
          } else {
            $fdate = test_input($_POST["fdate"]);
          }
          if (empty($_POST["ftime"])) {
            $ftime_error = "*Feeding Time is Required";
          } else {
            $ftime = test_input($_POST["ftime"]);
          }
          if (empty($_POST["feedingtype"])) {
            $feedingtype_error = "<br/>*Feeding Type is Required";
          } else {
            $feedingtype = test_input($_POST["feedingtype"]);
            
          }
          if (empty($_POST["famount"])) {
            $famount_error = "*Feeding Amount is Required";
          } else {
            $famount = test_input($_POST["famount"]);
          }

          if($beehiveno_error =='' and  $fdate_error =='' and   $ftime_error=='' and $feedingtype_error=='' and $famount_error==''){
        
        $date=date("Y/m/d");
        $sql="INSERT INTO feeding (userID,date,beehiveno,fdate,ftime,feedingtype,famount,unit) VALUES('".$_SESSION['userid']."','".$date."','".$_POST['beehiveno']."','".$_POST['fdate']."','".$_POST['ftime']."','".$_POST['feedingtype']."','".$_POST['famount']."','".$_POST['unit']."')";
        $result=$connection->query($sql);
        
        if($result){

          echo '<script>';
          echo 'alert("Record Inserted Successfully");';
          echo 'window.location.href = "bk_feeding.php";';
          echo '</script>';
          die();
        }

        else{

          echo '<script>';
          echo 'alert("Failed");';
          echo 'window.location.href = "bk_feeding.php";';
          echo '</script>';
          die();
        }
  

    }

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
<html>


    <head>

      <title>Add Feeding Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body>

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>
<div class="main">
    <div class="bhivecontainer">
  
        <form method="post" action="bk_feeding.php" >
        <p >Add Feeding Records</p>

        </br>
    </br></br>
        <div class="row">
        <div class="col1">
        <label for="beehiveno">Beehive No</label>
        </div>
    <div class="col3">
        <input type="number" min="0" name="beehiveno" value="<?= $beehiveno?>" autofocus style="width:225px">
        <span class="error"><?= $beehiveno_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="fdate">Feeding Date</label>
        </div>
    
    <div class="col3">
        <input type="date" name="fdate" value="<?= $fdate?>" style="width:225px">
        <span class="error"><?= $fdate_error?></span>
        </div>
        </div>
    <div class="row">
        <div class="col1">
        <label for="ftime">Feeding Time</label>
        </div>
    <div class="col3">
        <input type="time" name="ftime" value="<?= $ftime?>"style="width:225px" >
        <span class="error"><?= $ftime_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="feedingtype">Feeding Type</label>
        </div>
    <div class="col3" style="width:300px">
        <input type="text" name="feedingtype"  placeholder="Feeding type" value="<?= $feedingtype?>" style="width:225px">
        <span class="error" ><?= $feedingtype_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="famount">Feeding Amount</label>
        </div>
    <div class="col3">
        <input type="number" min="0.000" placeholder="0.000" step="0.001" name="famount" value="<?= $famount?>" style="width:166px" >
        <select id="unit" name="unit" value="<?= $unit?>" style="width: 55px">
             <option value="Kg">Kg</option>
             <option value="g">g</option>
             <option value="mg">mg</option>
        </select> 
        <span class="error"><?= $famount_error?></span>
        </div>
        </div>
        <br/></br>
        <div class="row">
        <div class="c1">
        <input type="submit" value="Submit" name="enter" >
        </div>
        </form>


        <form  action="bk_viewfeeding.php" method="post" >
        <div class="c2">
        <input type="submit" value="View Feeding Records >>" name="enter" >
        </div>
    </div>
        </form>
    </br>

</div>

</div>

     
 
  </body>
</html>