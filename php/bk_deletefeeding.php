<?php require_once('../db_connection/connect.php'); ?>
<?php
if(isset($_GET['FeedingRecNo'])){
$sql = "DELETE FROM feeding WHERE FeedingRecNo = ".$_GET['FeedingRecNo'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: bk_feeding.php");
}
?>