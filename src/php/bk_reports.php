<?php require_once('../../config/connect.php'); 
session_start();

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
      header( 'Location: bk_fbeehivereport.php?beehiveno='.$beehiveno);
    }
  }

            
          }

       
        }

$beehiveno1_error="";
$beehiveno1="";

        if(isset($_POST['enterr'])){

            if (empty($_POST["beehiveno1"])) {
                $beehiveno1_error = "</br>*Beehive no is required";
              } else {            
              
              $beehiveno1 = test_input($_POST["beehiveno1"]);

              $sql = "SELECT beehiveno FROM harvest WHERE  userID='".$_SESSION['userid']."'";
              $result = mysqli_query($connection,$sql);
              while($row = mysqli_fetch_array($result))
                {
                  if($row['beehiveno']!== $beehiveno1){
                    $beehiveno1_error = "</br>*Invalid beehive no";
                  }
              
                  else{
                    header( 'Location: bk_fharvestreport.php?beehiveno1='.$beehiveno1);
                  }
                }
              }
            }

            $beehiveno2_error="";
            $beehiveno2="";            

            if(isset($_POST['enterrr'])){

                if (empty($_POST["beehiveno2"])) {
                    $beehiveno2_error = "</br>*Beehive no is required";
                  } else {            
              
                    $beehiveno2 = test_input($_POST["beehiveno2"]);
      
                    $sql = "SELECT beehiveno FROM feeding WHERE  userID='".$_SESSION['userid']."'";
        
                    $result = mysqli_query($connection,$sql);
                    while($row = mysqli_fetch_array($result))
                      {
                        if($row['beehiveno']!== $beehiveno2){
                          $beehiveno2_error = "</br>*Invalid beehive no";
                        }
                    
                        else{
                          header( 'Location: bk_ffeedingreport.php?beehiveno2='.$beehiveno2);
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
		<title>reports</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">
	</head>
	<body >
<?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
        ?>

        
<div class="main">



  <div class="bhivecontainer">

			


<p>Beehive report</p>
 

        <hr />
        
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno">Beehive no</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno" >
               <span class="error"><?= $beehiveno_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View full beehive report >>" name="enter" >
        </div>
        </div>
        </form>



</div>
<br />
<br />

<div class="bhivecontainer">


<p>Harvest report</p>
        <hr />
        
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno1">Beehive no</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno1" >
               <span class="error"><?= $beehiveno1_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View full harvest report >>" name="enterr" >
        </div>
        </div>
        </form>



</div>
<br />
<br />

<div class="bhivecontainer">


			

        
<p>Feeding report</p>
        <hr />
        
        <form  method="post" action="" >
        <div class="row">
           <div class="col1">
               <label for="beehiveno2">Beehive no</label>
           </div>
           <div class="col1">
               <input type="number" name="beehiveno2"  >
               <span class="error"><?= $beehiveno2_error?></span>
           </div>
           <div class="col1">
        <input type="submit" value="View full feeding report >>" name="enterrr" >
        </div>
</div>
        </form>




</div>
</div>	



	</body>
</html>

