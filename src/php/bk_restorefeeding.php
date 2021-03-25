<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['FeedingRecNo'])){
$sql = "UPDATE feeding set  is_deleted=0 WHERE FeedingRecNo = ".$_GET['FeedingRecNo'];
$result = mysqli_query($connection,$sql);


if($result){

    echo '<script>';
    echo 'alert("Record Restored Successfully");';
    echo 'window.location.href = "bk_viewdelfeeding.php";';
    echo '</script>';
    die();
  }

  else{

    echo '<script>';
    echo 'alert("Failed");';
    echo 'window.location.href = "bk_viewdelfeeding.php";';
    echo '</script>';
    die();
  }

}


?>

