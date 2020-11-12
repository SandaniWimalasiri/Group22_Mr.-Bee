<?php 
require_once('../db_connection/connect.php'); 
session_start();
$beehiveno_error=$fdate_error= $ftime_error=$feedingtype_error=$famount_error="";
$beehiveno=$fdate= $ftime=$feedingtype=$famount="";

    if(isset($_POST['enter'])){

        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "</br>*Beehive no is required";
          } else {
            $beehiveno = test_input($_POST["beehiveno"]);
          }

        if (empty($_POST["fdate"])) {
            $fdate_error = "</br>*Feeding date is required";
          } else {
            $fdate = test_input($_POST["fdate"]);
          }
          if (empty($_POST["ftime"])) {
            $ftime_error = "*Feeding time is required";
          } else {
            $ftime = test_input($_POST["ftime"]);
          }
          if (empty($_POST["feedingtype"])) {
            $feedingtype_error = "*Feeding type is required";
          } else {
            $feedingtype = test_input($_POST["feedingtype"]);
          }
          if (empty($_POST["famount"])) {
            $famount_error = "*Feeding amount is required";
          } else {
            $famount = test_input($_POST["famount"]);
          }

          if($beehiveno_error =='' and  $fdate_error =='' and   $ftime_error=='' and $feedingtype_error=='' and $famount_error==''){
        //echo "Done";
        $date=date("Y/m/d");
        $sql="INSERT INTO feeding (userID,date,beehiveno,fdate,ftime,feedingtype,famount) VALUES('".$_SESSION['userid']."','".$date."','".$_POST['beehiveno']."','".$_POST['fdate']."','".$_POST['ftime']."','".$_POST['feedingtype']."','".$_POST['famount']."')";
        $result=$connection->query($sql);
        //print_r($result);
        if($result){
          
         echo  '<script > alert("data submitted successfully"); </script>';
         
                 
            header( 'Location: bk_feeding.php ');
        }else{
            echo "failed";
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

      <title>feeding</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
  <body>

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>
<div class="main">
    <div class="bhivecontainer">
  
        <form method="post" action="bk_feeding.php" >
        <p >Add Feeding records</p>

        </br>
    </br>
        <div class="row">
        <div class="col1">
        <label for="beehiveno">Beehive no</label>
        </div>
    <div class="col2">
        <input type="number" name="beehiveno" value="<?= $beehiveno?>" autofocus >
        <span class="error"><?= $beehiveno_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="fdate">Feeding date</label>
        </div>
    <div class="col1">
        <input type="date" name="fdate" value="<?= $fdate?>" >
        <span class="error"><?= $fdate_error?></span>
        </div>
        <div class="col1">
        <label for="ftime">Feeding time</label>
        </div>
    <div class="c3">
        <input type="time" name="ftime" value="<?= $ftime?>" >
        <span class="error"><?= $ftime_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="feedingtype">Feeding type</label>
        </div>
    <div class="col2">
        <input type="text" name="feedingtype"  placeholder="Feeding type" value="<?= $feedingtype?>" >
        <span class="error"><?= $feedingtype_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="famount">Feeding amount</label>
        </div>
    <div class="col2">
        <input type="text" name="famount" value="<?= $famount?>"  >
        <span class="error"><?= $famount_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="c1">
        <input type="submit" value="Submit" name="enter" >
        </div>
        </form>


        <form  action="bk_viewfeeding.php" method="post" >
        <div class="c2">
        <input type="submit" value="View feeding records >>" name="enter" >
        </div>
    </div>
        </form>

</div>

</div>

     
 
  </body>
</html>