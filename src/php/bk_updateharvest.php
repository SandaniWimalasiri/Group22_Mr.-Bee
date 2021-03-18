<?php require_once('../../config/connect.php'); 
session_start();

$beehiveno_error=$hdate_error= $htime_error=$producttype_error= $amount_error="";
$beehiveno=$hdate= $htime=$producttype=$amount="";

    if(isset($_POST['update'])){


        
          if (empty($_POST["amount"])) {
            $amount_error = "*Harvested amount is required";
          } else {
            $amount = test_input($_POST["amount"]);
          }

          if($amount_error==''){
    
    
 
          
    $sql2= "UPDATE harvest SET HarvestRecNo ='".$_POST['HarvestRecNo']."',beehiveno ='".$_POST['beehiveno']."',  hdate ='".$_POST['hdate']."', htime ='".$_POST['htime']."',producttype ='".$_POST['producttype']."',amount ='".$_POST['amount']."' WHERE HarvestRecNo='".$_POST['HarvestRecNo']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount  FROM harvest WHERE HarvestRecNo ='".$_POST['HarvestRecNo']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);

    
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

      <title>bee-hive</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">

    <p >Update harvest records</p>

    <br />
    <br />

<?php


if(isset($_GET['HarvestRecNo'])){
    
  $sql1 = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount FROM harvest WHERE  HarvestRecNo =".$_GET['HarvestRecNo'];
  $result1= mysqli_query($connection,$sql1);

while($row=mysqli_fetch_assoc($result1)){  
            
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'Harvest Record no </div><div class="col2">';
        echo "<input type = 'number' name='HarvestRecNo' required value ='".$row['HarvestRecNo']."' readonly>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive no </div><div class="col2" ><input type = "number" name="beehiveno"  value ="'.$row['beehiveno'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvesting date </div><div class="col1"><input type = "date" name="hdate"  value ="'.$row['hdate'].'" >';
        echo "</div>";
        echo '<div class="col1">';
        echo 'Harvesting time </div><div class="c3"><input type = "time"" name="htime"  value ="'.$row['htime'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvested product type </div><div class="col2"><select id="producttype" name="producttype" value="<?= $producttype?>" >
        <option value="Raw Honey">Raw Honey</option>
        <option value="Bee Colonies">Bee Colonies</option>
        <option value="Royal Gel">Royal Gel</option>
        </select> ';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvested amount </div><div class="col2"><input type = "text" name="amount"  value ="'.$row['amount'].'" >';
        echo '<span class="error"><?= $amount_error?></span>';
        echo "</div>";
        echo "</div>";
        echo"<br/>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Update record" name="update" ></div></form>';
}}       

?>


<form  action="bk_viewharvest.php" method="post" >
        <div class="c2" style="width: 90px">
        <input type="submit" value="<< Back" name="back" >
        </div>
</div>
        </form>

    </div>
    
<br />
<br />
</div>  
 
  </body>
</html>