<?php 
require_once('../../config/connect.php'); 
session_start();

if($_SESSION['loggedin']!=1){
    header('Location: login.php');
}

$beehiveno_error=$hdate_error= $htime_error=$producttype_error= $amount_error="";
$beehiveno=$hdate= $htime=$producttype=$amount="";

    if(isset($_POST['enter'])){


        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "*Beehive No is Required";
          } else {
            $beehiveno = test_input($_POST["beehiveno"]);
          }
          if (empty($_POST["hdate"])) {
            $hdate_error = "*Harvesting Date is Required";
          } else {
            $hdate = test_input($_POST["hdate"]);
          }
          if (empty($_POST["htime"])) {
            $htime_error = "*Harvesting Time is Required";
          } else {
            $htime = test_input($_POST["htime"]);
          }
          if (empty($_POST["producttype"])) {
            $producttype_error = "";
          } else {
            $producttype = test_input($_POST["producttype"]);
          }
          if (empty($_POST["amount"])) {
            $amount_error = "*Harvested Amount is Required";
          } else {
            $amount = test_input($_POST["amount"]);
          }

      if($beehiveno_error =='' and  $hdate_error =='' and   $htime_error=='' and $producttype_error=='' and $amount_error==''){
          
      $date=date("Y/m/d");
      $sql="INSERT INTO harvest (userID,date,beehiveno,hdate,htime,producttype,amount,unit) VALUES('".$_SESSION['userid']."','".$date."','".$_POST['beehiveno']."','".$_POST['hdate']."','".$_POST['htime']."','".$_POST['producttype']."','".$_POST['amount']."','".$_POST['unit']."')";
      $result=$connection->query($sql);
      
      if($result){

        echo '<script>';
        echo 'alert("Record Inserted Successfully");';
        echo 'window.location.href = "bk_harvest.php";';
        echo '</script>';
        die();
      }

      else{

        echo '<script>';
        echo 'alert("Failed");';
        echo 'window.location.href = "bk_harvest.php";';
        echo '</script>';
        die();
      }

        }}
      
       
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        
?>
<html>

    <head>

      <title>Add Harvest Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">   

    </head>
  <body>

        <?php 
        include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
        ?>

<div class="main">
    <div class="bhivecontainer" >
  
        <form method="post" action="bk_harvest.php" >
        <p >Add Harvest Records</p>
        </br></br></br>

        <div class="row">
        <div class="col1">
        <label for="beehiveno">Beehive No</label>
        </div>
        <div class="col3">
        <input type="number" min="0" name="beehiveno"  value="<?= $beehiveno?>" autofocus style="width:225px">
        <span class="error"><?= $beehiveno_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="hdate">Harvesting Date</label>
        </div>
        <div class="col3">
        <input type="date" name="hdate" value="<?= $hdate?>" style="width:225px">
        <span class="error"><?= $hdate_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="hdate">Harvesting Time</label>
        </div>
        <div class="col3">
        <input type="time" name="htime" value="<?= $htime?>" style="width:225px">
        <span class="error"><?= $htime_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="producttype">Harvested Product Type</label>
        </div>
        <div class="col3">
        <select id="producttype" name="producttype" value="<?= $producttype?>" >
             <option value="Raw Honey">Raw Honey</option>
             <option value="Bee Colonies">Bee Colonies</option>
             <option value="Royal Gel">Royal Gel</option>
        </select> 
        <span class="error"><?= $producttype_error?></span>    
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="amount">Harvested Amount</label>
        </div>
        <div class="col3">
        <input type="number" min="0.000" placeholder="0.000" step="0.001" name="amount" value="<?= $amount?>" style="width:166px" >
        <select id="unit" name="unit" value="<?= $unit?>" style="width: 55px">
             <option value="Kg">Kg</option>
             <option value=" "></option>
        </select> 
        <span class="error"><?= $amount_error?></span>
        </div>
        </div>

        <br/>
        <br/>

        <div class="row">
        <div class="c1">
        <input type="submit" value="Submit" name="enter" >
        </div>
        </form>

        <form  action="bk_viewharvest.php" method="post" >
        <div class="c2">
        <input type="submit" value="View Harvest Records >>" name="enter" >
        </div>
        </div>
        </form>
        </br>

  </div>
</div>
  
 
  </body>
</html>


