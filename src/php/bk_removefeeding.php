<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['FeedingRecNo'])){
$sql = "DELETE FROM feeding WHERE FeedingRecNo = ".$_GET['FeedingRecNo'];
$result = mysqli_query($connection,$sql);


if($result){

    echo '<script>';
    echo 'alert("Record Removed Successfully");';
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

