<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['BeehiveRecNo'])){
$sql = "DELETE FROM beehive WHERE BeehiveRecNo = ".$_GET['BeehiveRecNo'];
$result = mysqli_query($connection,$sql);


if($result){

    echo '<script>';
    echo 'alert("Record Deleted Successfully");';
    echo 'window.location.href = "bk_viewbeehive.php";';
    echo '</script>';
    die();
  }

  else{

    echo '<script>';
    echo 'alert("Failed");';
    echo 'window.location.href = "bk_viewbeehive.php";';
    echo '</script>';
    die();
  }

}


?>

