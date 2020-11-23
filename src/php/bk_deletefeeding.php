<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['FeedingRecNo'])){
$sql = "DELETE FROM feeding WHERE FeedingRecNo = ".$_GET['FeedingRecNo'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){

}
else{

}
header("Location: bk_feeding.php");
}
?>