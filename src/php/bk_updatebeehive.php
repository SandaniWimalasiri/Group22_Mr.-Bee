<?php require_once('../../config/connect.php'); 
session_start();


if(isset($_POST['update'])){
    
          
    $sql2= "UPDATE beehive SET BeehiveRecNo ='".$_POST['BeehiveRecNo']."',beehiveno ='".$_POST['beehiveno']."', sdate ='".$_POST['sdate']."', idate ='".$_POST['idate']."', itime ='".$_POST['itime']."',actstatus ='".$_POST['actstatus']."',temperament ='".$_POST['temperament']."',wbeehive ='".$_POST['wbeehive']."',unit='".$_POST['unit']."',wstatus ='".$_POST['wstatus']."',cbeehive ='".$_POST['cbeehive']."',noframes ='".$_POST['noframes']."',disease ='".$_POST['disease']."',treatment ='".$_POST['treatment']."',sqbee ='".$_POST['sqbee']."',bcolony ='".$_POST['bcolony']."' WHERE BeehiveRecNo='".$_POST['BeehiveRecNo']."'";
    $result2 = mysqli_query($connection,$sql2);
    $sql3 = "SELECT BeehiveRecNo,beehiveno,sdate,idate,itime,actstatus,temperament,wbeehive,unit,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony FROM beehive WHERE BeehiveRecNo ='".$_POST['BeehiveRecNo']."'";
    $result3 = mysqli_query($connection,$sql3);
    $row=mysqli_fetch_assoc($result3);

      if($result2){

      echo '<script>';
      echo 'alert("Record Updated Successfully");';
      echo 'window.location.href = "bk_updatebeehive.php?BeehiveRecNo='.$row["BeehiveRecNo"].'";';
      echo '</script>';
      die();
    }

    else{

      echo '<script>';
      echo 'alert("Failed");';
      echo 'window.location.href = "bk_updatebeehive.php?BeehiveRecNo='.$row["BeehiveRecNo"].'";';
      echo '</script>';
      die();
    }

}
   

?>
<html>

    <head>

      <title>Update Beehive Records</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      
        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>

<div class="main">

    <div class="bhivecontainer">

    <p >Update Beehive Records</p>

    <br />
    <br />

<?php
if(isset($_GET['BeehiveRecNo'])){
    
  $sql1 = "SELECT BeehiveRecNo,beehiveno,sdate,idate,itime,actstatus,temperament,wbeehive,unit,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony FROM beehive WHERE  BeehiveRecNo =".$_GET['BeehiveRecNo'];
  $result1= mysqli_query($connection,$sql1);
  while($row=mysqli_fetch_assoc($result1)){  
            
   
        echo '<form  method="post" action="" ><div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive Record No </div><div class="col2">';
        echo "<input type = 'number' name='BeehiveRecNo'  value ='".$row['BeehiveRecNo']."' readonly>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Beehive No </div><div class="col2"><input type = "number" min="0" name="beehiveno" required value ="'.$row['beehiveno'].'">';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Start Date </div><div class="col1"><input type = "date" name="sdate" required value ="'.$row['sdate'].'" >'; 
        echo "</div>";
        echo '<div class="col1">';
        echo 'Weight of Beehive </div><div class="c3"><input type = "number" min="0.000" placeholder="0.000" step="0.001" name="wbeehive" style="width: 125px" required value ="'.$row['wbeehive'].'">';
        echo '<select id="unit" name="unit" value="<?= $unit?>" style="width: 55px">
        <option value="'.$row['unit'].'">'.$row['unit'].'</option>
        <option value="Kg">Kg</option>
        <option value="g">g</option>
        </select> ';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Inspection Date </div><div class="col1"><input type = "date" name="idate" required value ="'.$row['idate'].'" >';
        echo "</div>";
        echo '<div class="col1">';
        echo 'Inspection Time </div><div class="c3"><input type = "time" name="itime" required value ="'.$row['itime'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Number of Bee Colonies  </div><div class="col1"><input type = "number" min="0" name="bcolony" required value ="'.$row['bcolony'].'">';
        echo "</div>";
        echo '<div class="col1">';
        echo 'Number of Frames </div><div class="c3"><input type = "number" min="0" name="noframes" required value ="'.$row['noframes'].'" >';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Active Status </div><div class="col2"><select id="actstatus" name="actstatus" required value="<?= $actstatus?>" >
             <option value="'.$row['actstatus'].'">'.$row['actstatus'].'</option>
             <option value="Strongly Active">Strongly Active</option>
             <option value="Active">Active</option>
             <option value="Neutral">Neutral</option>
             <option value="Inactive">Inactive</option>
             <option value="Empty">Empty</option></select> ';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Temperament </div><div class="col2"><select id="temperament" name="temperament" value="<?= $temperament?>" required>
        <option value="'.$row['temperament'].'">'.$row['temperament'].'</option>
        <option value="Calm">Calm</option>
        <option value=" Nervous"> Nervous</option>
        <option value="Angry">Angry</option>
        </select> ';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Weather Status </div><div class="col2"><textarea name="wstatus" style="height:100px" required placeholder ="">'.$row['wstatus']."</textarea>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Changes Made to Beehive </div><div class="col2">
        <select id="cbeehive" name="cbeehive" value="<?= $cbeehive?>" >
          <option value="'.$row['cbeehive'].'">'.$row['cbeehive'].'</option>
          <option value="Add">Add</option>
          <option value="Removal">Removal</option>
          <option value="Repair">Repair</option>
          <option value="Switch"> Switch</option>
          <option value="Neutral">Neutral</option></select>';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo "Signs of Diseases (If there's any)</div><div class='col2'><textarea name='disease' style='height:100px' placeholder =''>".$row['disease']."</textarea>";
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo "Treatments (If there's any) </div><div class='col2'><textarea name='treatment' style='height:100px' placeholder =''>".$row['treatment'].'</textarea>';
        echo "</div>";
        echo "</div>";
        echo '<div class="row" >';
        echo '<div class="col1">';
        echo 'Status of Queen Bee </div><div class="col2"><select id="sqbee" required name="sqbee" value="<?= $sqbee?>" >
             <option value="'.$row['sqbee'].'">'.$row['sqbee'].'</option>
             <option value="Missing">Missing</option>
             <option value="No Fresh Eggs">No Fresh Eggs</option>
             <option value="Fresh Eggs Provided">Fresh Eggs Provided</option>
             <option value=" Queen Cell Introduced"> Queen Cell Introduced</option>
             <option value="Virgin Queen Introduced">Virgin Queen Introduced</option>
             <option value="Mated Queen Introduced">Mated Queen Introduced</option>
             </select> ';
        echo "</div>";
        echo "</div>";
        echo"<br/>";
        echo '<div class="row"><div class="c1" style="width: 910px"><input type="submit" value="Update Record" name="update" ></div></form>';
        

  }}
        

?>


        <form  action="bk_viewbeehive.php" method="post" >
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