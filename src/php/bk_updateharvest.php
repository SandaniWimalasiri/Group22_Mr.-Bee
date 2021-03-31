<?php require_once('../../config/connect.php'); 
session_start();

    if(isset($_POST['update'])){
          
    $sql2= "UPDATE harvest SET HarvestRecNo ='".$_POST['HarvestRecNo']."',beehiveno ='".$_POST['beehiveno']."',  hdate ='".$_POST['hdate']."', htime ='".$_POST['htime']."',producttype ='".$_POST['producttype']."',amount ='".$_POST['amount']."',unit ='".$_POST['unit']."' WHERE HarvestRecNo='".$_POST['HarvestRecNo']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount,unit  FROM harvest WHERE HarvestRecNo ='".$_POST['HarvestRecNo']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);

    if($result2){

      echo '<script>';
      echo 'alert("Record Updated Successfully");';
      echo 'window.location.href = "bk_updateharvest.php?HarvestRecNo='.$row["HarvestRecNo"].'";';
      echo '</script>';
      die();
    }

    else{

      echo '<script>';
      echo 'alert("Failed");';
      echo 'window.location.href = "bk_updateharvest.php?HarvestRecNo='.$row["HarvestRecNo"].'";';
      echo '</script>';
      die();
    }
          

}
  

?>
<html>

    <head>

      <title>Update Harvest Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      
        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>

<div class="main">

    <div class="bhivecontainer">

    <p >Update Harvest Records</p>

    <br />
    <br /></br>

<?php

if(isset($_GET['HarvestRecNo'])){
    
  $sql1 = "SELECT HarvestRecNo,beehiveno,hdate,htime,producttype,amount,unit FROM harvest WHERE  HarvestRecNo =".$_GET['HarvestRecNo'];
  $result1= mysqli_query($connection,$sql1);
  while($row=mysqli_fetch_assoc($result1)){  
            
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'Harvest Record No </div><div class="col3">';
        echo "<input type = 'number' name='HarvestRecNo' style='width: 225px'  value ='".$row['HarvestRecNo']."' readonly>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive No </div><div class="col3" ><input type = "number" min="0.000" name="beehiveno" required style="width: 225px" value ="'.$row['beehiveno'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvesting Date </div><div class="col3"><input type = "date" name="hdate" required style="width: 225px" value ="'.$row['hdate'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvesting Time </div><div class="col3" ><input type = "time"" name="htime" required style="width: 225px" value ="'.$row['htime'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvested Product Type </div><div class="col3" ><select id="producttype"required name="producttype" value="<?= $producttype?>" >
        <option value="'.$row['producttype'].'">'.$row['producttype'].'</option>
        <option value="Raw Honey">Raw Honey</option>
        <option value="Bee Colonies">Bee Colonies</option>
        <option value="Royal Gel">Royal Gel</option></select> ';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Harvested Amount </div><div class="col3"><input type = "number" min="0.000" placeholder="0.000" step="0.001" required name="amount" style="width: 170px" required value ="'.$row['amount'].'">';
        echo '<select id="unit" name="unit" value="<?= $unit?>" style="width: 55px">
        <option value="'.$row['unit'].'">'.$row['unit'].'</option>
        <option value="Kg">Kg</option>
        <option value=""></option></select> ';
        echo "</div>";
        echo "</div>";
        echo"<br/></br>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Update Record" name="update" ></div></form>';
}}       

?>


        <form  action="bk_viewharvest.php" method="post" >
        <div class="c2" style="width: 90px">
        <input type="submit" value="<< Back" name="back" >
        </div>
        </div>
        </form>
      </br>
    </div>
    
<br />
<br />
</div>  
 
  </body>
</html>