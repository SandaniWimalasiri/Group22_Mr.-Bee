<?php require_once('../../config/connect.php'); ?>
<?php
if(isset($_GET['BeehiveRecNo'])){
$sql = "DELETE FROM beehive WHERE BeehiveRecNo = ".$_GET['BeehiveRecNo'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
header("Location:beekeeperindex.php");
}
else{

}

}
?>

