<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['HarvestRecNo'])){
$sql = "UPDATE harvest set  is_deleted=0 WHERE HarvestRecNo = ".$_GET['HarvestRecNo'];
$result = mysqli_query($connection,$sql);


if($result){

    echo '<script>';
    echo 'alert("Record Restored Successfully");';
    echo 'window.location.href = "bk_viewdelharvest.php";';
    echo '</script>';
    die();
  }

  else{

    echo '<script>';
    echo 'alert("Failed");';
    echo 'window.location.href = "bk_viewdelharvest.php";';
    echo '</script>';
    die();
  }

}


?>

