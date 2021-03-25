<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['BeehiveRecNo'])){
$sql = "UPDATE beehive set  is_deleted=0 WHERE BeehiveRecNo = ".$_GET['BeehiveRecNo'];
$result = mysqli_query($connection,$sql);


if($result){

    echo '<script>';
    echo 'alert("Record Restored Successfully");';
    echo 'window.location.href = "bk_viewdelbeehive.php";';
    echo '</script>';
    die();
  }

  else{

    echo '<script>';
    echo 'alert("Failed");';
    echo 'window.location.href = "bk_viewdelbeehive.php";';
    echo '</script>';
    die();
  }

}


?>

