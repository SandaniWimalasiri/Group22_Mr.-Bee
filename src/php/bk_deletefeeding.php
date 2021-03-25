<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['FeedingRecNo'])){
$sql = "UPDATE feeding SET is_deleted=1 WHERE FeedingRecNo = ".$_GET['FeedingRecNo'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){

    echo '<script>';
    echo 'alert("Record Deleted Successfully");';
    echo 'window.location.href = "bk_viewfeeding.php";';
    echo '</script>';
    die();
  }

  else{

    echo '<script>';
    echo 'alert("Failed");';
    echo 'window.location.href = "bk_viewfeeding.php";';
    echo '</script>';
    die();
  }
}
?>