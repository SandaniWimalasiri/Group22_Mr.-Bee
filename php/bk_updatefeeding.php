<?php require_once('connect.php'); 
session_start();





if(isset($_POST['update'])){
    
 
          
    $sql2= "UPDATE feeding SET FeedingRecNo ='".$_POST['FeedingRecNo']."',beehiveno ='".$_POST['beehiveno']."',  fdate ='".$_POST['fdate']."', ftime ='".$_POST['ftime']."',feedingtype ='".$_POST['feedingtype']."',famount ='".$_POST['famount']."' WHERE FeedingRecNo='".$_POST['FeedingRecNo']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT  FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount FROM feeding WHERE FeedingRecNo ='".$_POST['FeedingRecNo']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);


}


   

?>
<html>

    <head>

      <title>bee-hive</title>
      <link rel="stylesheet" type="text/CSS" href="../css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">
    <p >Update feeding records</p>
  
<?php
if(isset($_GET['FeedingRecNo'])){
    
  $sql1 = "SELECT FeedingRecNo,beehiveno,fdate,ftime,feedingtype,famount FROM feeding WHERE  FeedingRecNo =".$_GET['FeedingRecNo'];
  $result1= mysqli_query($connection,$sql1);
  while($row=mysqli_fetch_assoc($result1)){  
            
   
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding Record no </div><div class="col2">';
        echo "<input type = 'number' name='FeedingRecNo' required value ='".$row['FeedingRecNo']."' readonly>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive no </div><div class="col2" ><input type = "number" name="beehiveno" required value ="'.$row['beehiveno'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding date </div><div class="col1"><input type = "date" name="fdate" required value ="'.$row['fdate'].'" >';
        echo "</div>";
        echo '<div class="col1">';
        echo 'Feeding time </div><div class="c3"><input type = "time"" name="ftime" required value ="'.$row['ftime'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding type </div><div class="col2"><input type = "text" name="feedingtype"  value ="'.$row['feedingtype'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Feeding amount </div><div class="col2"><input type = "text" name="famount" value ="'.$row['famount'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Update record" name="update" ></div></form>';

  }}
   

        

?>

<form  action="bk_viewfeeding.php" method="post" >
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