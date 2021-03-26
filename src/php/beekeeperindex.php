<?php require_once('../../config/connect.php'); 
session_start();
if($_SESSION['loggedin']!=1){
    header('Location: beekeeperlogin.php');
}

$beehiveno_error=$sdate_error=$idate_error=$itime_error=$actstatus_error=$temperament_error=$wbeehive_error=$wstatus_error=$cbeehive_error=$noframes_error=$disease_error=$treatment_error=$sqbee_error=$bcolony_error="";
$beehiveno=$sdate=$idate=$itime=$actstatus=$temperament=$wbeehive=$wstatus=$cbeehive=$noframes=$disease=$treatment=$sqbee=$bcolony="";

    if(isset($_POST['enter'])){

        if (empty($_POST["beehiveno"])) {
            $beehiveno_error = "</br>*Beehive no is required";
          } else {
            $beehiveno = test_input($_POST["beehiveno"]);
          }
        if (empty($_POST["sdate"])) {
            $sdate_error = "</br>*Start date is required";
          } else {
            $sdate = test_input($_POST["sdate"]);
          }
        
          if (empty($_POST["idate"])) {
            $idate_error = "</br>*Inspection date is required";
          } else {
            $idate = test_input($_POST["idate"]);
          }
          if (empty($_POST["itime"])) {
            $itime_error = "*Inspection time is required";
          } else {
            $itime = test_input($_POST["itime"]);
          }
          if (empty($_POST["actstatus"])) {
            $actstatus_error = "*Active status is required";
          } else {
            $actstatus = test_input($_POST["actstatus"]);
          }

          if (empty($_POST["temperament"])) {
            $temperament_error = "*Temperament is required";
          } else {
            $temperament = test_input($_POST["temperament"]);
          }
        
          if (empty($_POST["wbeehive"])) {
            $wbeehive_error = "*Weight of beehive is required";
          } else {
            $wbeehive = test_input($_POST["wbeehive"]);
          }
          if (empty($_POST["wstatus"])) {
            $wstatus_error = "*Weather status is required";
          } else {
            $wstatus = test_input($_POST["wstatus"]);
          }
          if (empty($_POST["cbeehive"])) {
            $cbeehive_error = "*Changes made to beehive is required";
          } else {
            $cbeehive = test_input($_POST["cbeehive"]);
          }
        
          if (empty($_POST["noframes"])) {
            $noframes_error = "*Number of frames is required";
          } else {
            $noframes = test_input($_POST["noframes"]);
          }
          if (empty($_POST["disease"])) {
            $disease_error = "";
          } else {
            $disease = test_input($_POST["disease"]);
          }
          if (empty($_POST["treatment"])) {
            $treatment_error = "";
          } else {
            $treatment = test_input($_POST["treatment"]);
          }
        
          if (empty($_POST["sqbee"])) {
            $sqbee_error = "*Status of queen bee is required";
          } else {
            $sqbee = test_input($_POST["sqbee"]);
          }
        
         
          if (empty($_POST["bcolony"])) {
            $bcolony_error = "</br>*Number of bee colonies is required";
          } else {
            $bcolony = test_input($_POST["bcolony"]);
          }
        

          if($beehiveno_error=='' and $sdate_error=='' and $idate_error=='' and $itime_error=='' and $actstatus_error=='' and $temperament_error=='' and $wbeehive_error=='' and $wstatus_error=='' and $cbeehive_error=='' and $noframes_error=='' and $disease_error=='' and $treatment_error=='' and $sqbee_error=='' and $bcolony_error==''){
        
        $date=date("Y/m/d");
        $sql="INSERT INTO beehive (userID,beehiveno,sdate,idate,itime,actstatus,temperament,wbeehive,unit,wstatus,cbeehive,noframes,disease,treatment,sqbee,bcolony) VALUES('".$_SESSION['userid']."','".$_POST['beehiveno']."','".$_POST['sdate']."','".$_POST['idate']."','".$_POST['itime']."','".$_POST['actstatus']."','".$_POST['temperament']."','".$_POST['wbeehive']."','".$_POST['unit']."','".$_POST['wstatus']."','".$_POST['cbeehive']."','".$_POST['noframes']."','".$_POST['disease']."','".$_POST['treatment']."','".$_POST['sqbee']."','".$_POST['bcolony']."')";
        $result=$connection->query($sql);
        if($result){

          echo '<script>';
          echo 'alert("Record Inserted Successfully");';
          echo 'window.location.href = "beekeeperindex.php";';
          echo '</script>';
          die();
        }

        else{

          echo '<script>';
          echo 'alert("Failed");';
          echo 'window.location.href = "beekeeperindex.php";';
          echo '</script>';
          die();
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

      <title>bee-hive</title>
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_style.css">
      <link rel="stylesheet" type="text/CSS" href="../../public/css/bk_catstyle.css">

    </head>
  <body  >
      

        <?php include('bk_navbar.php');
        include('bk_sidenavbar.php');
        
?>


<div class="main">


    <div class="bhivecontainer">
        <p >Add Bee-hive records</p>
    </br>
    </br>
           <form method="post" action="beekeeperindex.php"  >
           <div class="row">
           <div class="col1">
               <label for="beehiveno">Beehive no</label>
           </div>
           <div class="col2">
               <input type="number" name="beehiveno" value="<?= $beehiveno?>" autofocus >
               <span class="error"><?= $beehiveno_error?></span>
           </div>
           </div>
           <div class="row">
           <div class="col1">
               <label for="sdate">Start date</label>
           </div>
           <div class="col1">
               <input type="date" name="sdate"  value="<?= $sdate?>">
               <span class="error"><?= $sdate_error?></span>
           </div>
           
           <div class="col1">
        <label for="wbeehive">Weight of beehive </label>
        </div>
           <div class="c3">
        <input type="text" name="wbeehive" style="width: 125px" value="<?= $wbeehive?>" >
        <select id="unit" name="unit" value="<?= $unit?>" style="width: 55px">
             <option value="Kg">Kg</option>
             <option value="g">g</option>
        </select> 
        <span class="error"><?= $wbeehive_error?></span>
        </div>
        </div>

           <div class="row">
           <div class="col1">
               <label for="idate">Inspection date</label>
           </div>
           <div class="col1">
               <input type="date" name="idate" value="<?= $idate?>" >
               <span class="error"><?= $idate_error?></span>
           </div>
        <div class="col1">        
        <label for="idate">Inspection time</label>
        </div>
           <div class="c3">
        <input type="time" name="itime" value="<?= $itime?>" >
        <span class="error"><?= $itime_error?></span>
        </div>
        </div>      
        <div class="row">       
        <div class="col1">
        <label for="bcolony">Number of bee colonies</label>
        </div>
           <div class="col1">
        <input type="number" name="bcolony" value="<?= $bcolony?>">
        <span class="error"><?= $bcolony_error?></span>
        </div>
        <div class="col1">
        <label for="noframes">Number of frames</label>
        </div>
           <div class="c3">
           <input type="number" name="noframes"  value="<?= $noframes?>">
           <span class="error"><?= $noframes_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="actstatus">Active Status</label>
        </div>
        <div class="col2">
        <select id="actstatus" name="actstatus" value="<?= $actstatus?>" >
             <option value="Strongly Active">Strongly Active</option>
             <option value="Active">Active</option>
             <option value="Neutral">Neutral</option>
             <option value="Inactive">Inactive</option>
             <option value="Empty">Empty</option>
        </select> 
        <span class="error"><?= $actstatus_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="temperament">Temperament</label>
        </div>
        <div class="col2">
        <select id="temperament" name="temperament" value="<?= $temperament?>" >
             <option value="Calm">Calm</option>
             <option value=" Nervous"> Nervous</option>
             <option value="Angry">Angry</option>
        </select> 
        <span class="error"><?= $temperament_error?></span>
        </div>
        </div>
        
        <div class="row">
        <div class="col1">
        <label for="wstatus">Weather status</label>
        </div>
           <div class="col2">
           <textarea id="wstatus" name="wstatus" style="height:100px" placeholder="Weather status" value="<?= $wstatus?>"></textarea>
           <span class="error"><?= $wstatus_error?></span>
        </div>
        </div>
        
        <div class="row">
        <div class="col1">
        <label for="cbeehive">Changes made to beehive</label>
        </div>
           <div class="col2">
           <select id="cbeehive" name="cbeehive" value="<?= $cbeehive?>" >
             <option value="Add">Add</option>
             <option value="Removal">Removal</option>
             <option value="Repair">Repair</option>
             <option value="Switch"> Switch</option>
             <option value="Neutral">Neutral</option>
             </select> 
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="disease">Signs of diseases (if there's any) </label>
        </div>
           <div class="col2">
           <textarea id="disease" name="disease" style="height:100px" placeholder="Signs of diseases" value="<?= $disease?>"></textarea>
           <span class="error"><?= $disease_error?></span> 
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="treatment">Treatments (if there's any)</label>
        </div>
           <div class="col2">
           <textarea id="treatment" name="treatment" style="height:100px" placeholder="Treatments" value="<?= $treatment?>"></textarea>
           <span class="error"><?= $treatment_error?></span>
        </div>
        </div>
        <div class="row">
        <div class="col1">
        <label for="sqbee">Status of queen bee</label>
        </div>
           <div class="col2">
           <select id="sqbee" name="sqbee" value="<?= $sqbee?>" >
             <option value="Missing">Missing</option>
             <option value="No Fresh Eggs">No Fresh Eggs</option>
             <option value="Fresh Eggs Provided">Fresh Eggs Provided</option>
             <option value=" Queen Cell Introduced"> Queen Cell Introduced</option>
             <option value="Virgin Queen Introduced">Virgin Queen Introduced</option>
             <option value="Mated Queen Introduced">Mated Queen Introduced</option>
        </select> 
           <span class="error"><?= $sqbee_error?></span>
        </div>
        </div>  
        <br/>      
        <div class="row">
        <div class="c1">
        <input type="submit" value="Submit" name="enter" >
        </div>
        </form>


        <form  action="bk_viewbeehive.php" method="post" >
        <div class="c2">
        <input type="submit" value="View beehive records >>" name="enter" >
        </div>
    </div>
        </form>


</div>

</div>

    
 
  </body>
</html>