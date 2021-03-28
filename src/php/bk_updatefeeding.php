<?php require_once('../../config/connect.php'); 
session_start();





if(isset($_POST['update'])){
    
 
          
    $sql2= "UPDATE feeding SET FeedingRecNo ='".$_POST['FeedingRecNo']."',beehiveno ='".$_POST['beehiveno']."',  fdate ='".$_POST['fdate']."', ftime ='".$_POST['ftime']."',feedingtype ='".$_POST['feedingtype']."',famount ='".$_POST['famount']."',unit ='".$_POST['unit']."' WHERE FeedingRecNo='".$_POST['FeedingRecNo']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT  FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount,unit FROM feeding WHERE FeedingRecNo ='".$_POST['FeedingRecNo']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);


    if($result2){

      echo '<script>';
      echo 'alert("Record Updated Successfully");';
      echo 'window.location.href = "bk_updatefeeding.php?FeedingRecNo='.$row["FeedingRecNo"].'";';
      echo '</script>';
      die();
    }

    else{

      echo '<script>';
      echo 'alert("Failed");';
      echo 'window.location.href = "bk_updatefeeding.php?FeedingRecNo='.$row["FeedingRecNo"].'";';
      echo '</script>';
      die();
    }

}


   

?>
<html>

    <head>

      <title>Update Feeding Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">
    <p >Update Feeding Records</p>

    <br />
    <br />

  
<?php
if(isset($_GET['FeedingRecNo'])){
    
  $sql1 = "SELECT FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount,unit FROM feeding WHERE  FeedingRecNo =".$_GET['FeedingRecNo'];
  $result1= mysqli_query($connection,$sql1);
  while($row=mysqli_fetch_assoc($result1)){  
            
   
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Record No </div><div class="col3">';
        echo "<input type = 'number' name='FeedingRecNo' style='width: 225px'  value ='".$row['FeedingRecNo']."' readonly>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive No </div><div class="col3" ><input type = "number" min="0" name="beehiveno" style="width: 225px" required value ="'.$row['beehiveno'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Date </div><div class="col3"><input type = "date" name="fdate" style="width: 225px" required value ="'.$row['fdate'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Time </div><div class="col3"><input type = "time"" name="ftime" style="width: 225px" required value ="'.$row['ftime'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Type </div><div class="col3"><input type = "text" name="feedingtype" style="width: 225px" value ="'.$row['feedingtype'].'" required >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Amount </div><div class="col3"><input type = "number" min="0.000" placeholder="0.000" step="0.001" name="famount" style="width: 169px" value ="'.$row['famount'].'" required>';
        echo '<select id="unit" name="unit"  style="width: 55px" >
        <option value="'.$row['unit'].'" >'.$row['unit'].'</option>
             <option value="Kg">Kg</option>
             <option value="g">g</option>
             <option value="mg">mg</option>
        </select> ';
        echo "</div>";
        echo "</div>";
        echo"<br/>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Update Record" name="update" ></div></form>';

  }}
   

        

?>

<form  action="bk_viewfeeding.php" method="post" >
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