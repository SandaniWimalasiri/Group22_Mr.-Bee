<?php require_once('../../config/connect.php'); 
 session_start();
?>

<?php


?>

<?php
$beehiveno_error="";
$beehiveno="";

    if(isset($_POST['enter'])){
 
        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "</br>*Beehive no is required";
          }else {

            

            $beehiveno = test_input($_POST["beehiveno"]);

            $sql = "SELECT beehiveno FROM beehive WHERE  userID='".$_SESSION['userid']."'";

$result = mysqli_query($connection,$sql);
while($row = mysqli_fetch_array($result))
  {
    if($row['beehiveno']!== $beehiveno){
      $beehiveno_error = "</br>*Invalid beehive no";
    }

    else{
      $_SESSION['beehiveno']=$_POST["beehiveno"]; 
      header( 'Location: bk_fbeehivereport.php');
    }
  }

            
          }

       
        }

$beehiveno1_error="";
$beehiveno1="";

        if(isset($_POST['enterr'])){

            if (empty($_POST["beehiveno"])) {
                $beehiveno1_error = "</br>*Beehive no is required";
              } else {            
              
              $beehiveno1 = test_input($_POST["beehiveno"]);

              $sql = "SELECT beehiveno FROM harvest WHERE  userID='".$_SESSION['userid']."'";
              $result = mysqli_query($connection,$sql);
              while($row = mysqli_fetch_array($result))
                {
                  if($row['beehiveno']!== $beehiveno1){
                    $beehiveno1_error = "</br>*Invalid beehive no";
                  }
              
                  else{
                    $_SESSION['beehiveno']=$_POST["beehiveno"]; 
                    header( 'Location: bk_fharvestreport.php');
                  }
                }
              }
            }

            $beehiveno2_error="";
            $beehiveno2="";            

            if(isset($_POST['enterrr'])){

                if (empty($_POST["beehiveno"])) {
                    $beehiveno2_error = "</br>*Beehive no is required";
                  } else {            
              
                    $beehiveno2 = test_input($_POST["beehiveno"]);
      
                    $sql = "SELECT beehiveno FROM feeding WHERE  userID='".$_SESSION['userid']."'";
        
                    $result = mysqli_query($connection,$sql);
                    while($row = mysqli_fetch_array($result))
                      {
                        if($row['beehiveno']!== $beehiveno2){
                          $beehiveno2_error = "</br>*Invalid beehive no";
                        }
                    
                        else{
                          $_SESSION['beehiveno']=$_POST["beehiveno"]; 
                          header( 'Location: bk_ffeedingreport.php');
                        }
                      }
                  }
                }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          

?>

<html>

	<head>	
		<title>Reports</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body >
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        ?>

        
<div class="main">



  <div class="bhivecontainer" >

			



 
        
  <br/><br/> <br/>
<center>
        
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno">Beehive No</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno" autofocus>
               <span class="error"><?= $beehiveno_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View Full Beehive Report >>" name="enter" >
        </div>
        </div>
        </form>


<center/>

<br />
<br />

<hr />


        
<br/><br/> <br/>
      <center>  
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno">Beehive No</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno" >
               <span class="error"><?= $beehiveno1_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View Full Harvest Report >>" name="enterr" >
        </div>
        </div>
        </form>

      </center>


<br />
<br />


<hr />
			


        <br/><br/> <br/>
        <center>
        
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno">Beehive No</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno"  >
               <span class="error"><?= $beehiveno2_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View Full Feeding Report >>" name="enterrr" >
        </div>
</div>
        </form>

<center/>

<br />
<br />

</div>	



	</body>
</html>

