<?php 
require_once('connect.php'); 
session_start();


$beehiveno_error=$hdate_error= $htime_error=$producttype_error= $amount_error="";
$beehiveno=$hdate= $htime=$producttype=$amount="";

    if(isset($_POST['enter'])){


        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "</br>*Beehive no is required";
          } else {
            $beehiveno = test_input($_POST["beehiveno"]);
          }
          if (empty($_POST["hdate"])) {
            $hdate_error = "</br>*Harvesting date is required";
          } else {
            $hdate = test_input($_POST["hdate"]);
          }
          if (empty($_POST["htime"])) {
            $htime_error = "*Harvesting time is required";
          } else {
            $htime = test_input($_POST["htime"]);
          }
          if (empty($_POST["producttype"])) {
            $producttype_error = "";
          } else {
            $producttype = test_input($_POST["producttype"]);
          }
          if (empty($_POST["amount"])) {
            $amount_error = "*Harvested amount is required";
          } else {
            $amount = test_input($_POST["amount"]);
          }

          if($beehiveno_error =='' and  $hdate_error =='' and   $htime_error=='' and $producttype_error=='' and $amount_error==''){
      
      //echo "Done";
      $date=date("Y/m/d");
      $sql="INSERT INTO harvest (userID,date,beehiveno,hdate,htime,producttype,amount) VALUES('".$_SESSION['userid']."','".$date."','".$_POST['beehiveno']."','".$_POST['hdate']."','".$_POST['htime']."','".$_POST['producttype']."','".$_POST['amount']."')";
      $result=$connection->query($sql);
      //print_r($result);
      if($result){

        header("Refresh: 0; url=bk_harvest.php");
        
        
          
          
      }else{
          echo "failed";
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

      <title>harvest</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">


      

    </head>
  <body>

        

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>
<div class="main">
    <div class="bhivecontainer">
  
        <form method="post" action="bk_harvest.php" >
        <p >Add harvest records</p>
        </br>
    </br>
        <div class="row">
        <div class="col1">
        <label for="beehiveno">Beehive No</label>
    </div>
    <div class="col2">
        <input type="number" name="beehiveno"  value="<?= $beehiveno?>" autofocus >
       
        <span class="error"><?= $beehiveno_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="hdate">Harvesting date</label>
        </div>
    <div class="col1">
        <input type="date" name="hdate" value="<?= $hdate?>" >
        <span class="error"><?= $hdate_error?></span>
        </div>
        <div class="col1">
        <label for="hdate">Harvesting time</label>
        </div>
    <div class="c3">
        <input type="time" name="htime" value="<?= $htime?>" >
        <span class="error"><?= $htime_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="producttype">Harvested product type</label>
        </div>
    <div class="col2">
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
        <label for="amount">Harvested amount</label>
        </div>
    <div class="col2">
        <input type="text" name="amount" value="<?= $amount?>" >
        <span class="error"><?= $amount_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="c1">
        <input type="submit" value="Submit" name="enter" >
        </div>
        </form>


</script>
        <form  action="bk_viewharvest.php" method="post" >
        <div class="c2">
        <input type="submit" value="View harvest records >>" name="enter" >
        </div>
        </div>
        </form>


</div>

</div>

      
 
  </body>
</html>


