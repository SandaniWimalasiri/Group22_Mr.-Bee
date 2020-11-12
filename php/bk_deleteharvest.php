<?php require_once('../db_connection/connect.php'); ?>
<?php
if(isset($_GET['HarvestRecNo'])){
$sql = "DELETE FROM harvest WHERE HarvestRecNo = ".$_GET['HarvestRecNo'];
mysqli_query($connection, $sql);
$result = mysqli_query($connection,$sql);

if($result){
header("Location:bk_harvest.php");
}
else{

}

}
?>

