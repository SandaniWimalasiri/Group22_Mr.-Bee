
<?php include('manager_alignments.php')?>
<link rel="stylesheet" type="text/css" href="../../public/css/style_manager_homepage.css">
        <link rel="stylesheet" type="text/css" href="../../public/css/style_buttons.css">
        <link rel="stylesheet" href="../../public/css/index_page.css">
<div class="content"> 


                <?php
                    //first we leave this input field blank
                    $recipient = "";
                    //if user click the send button
                    if(isset($_POST['submit'])){
                        //access user entered data
                       $recipient = $_POST['email'];
                       $subject = $_POST['subject'];
                       $message = $_POST['msg'];
                       $sender = "From: mrbeemanager@gmail.com";
                       //if user leave empty field among one of them
                       if(empty($recipient) || empty($subject) || empty($message)){
                           ?>
                           <!-- display an alert message if one of them field is empty -->
                            <div class="alert alert-danger text-center">
                                <?php echo "All inputs are required!" ?>
                            </div>
<?php
                        }else{
                            // PHP function to send mail
                           if(mail($recipient, $subject, $message, $sender)){
                            ?>
                            <!-- display a success message if once mail sent sucessfully -->
                            <div class="alert alert-success text-center">
                                <?php echo "Your mail successfully sent to $recipient"?>
                            </div>
<?php
                           $recipient = "";
                           }else{
                            ?>
                            <!-- display an alert message if somehow mail can't be sent -->
                            <div class="alert alert-danger text-center">
                                <?php echo "Failed while sending your mail!" ?>
                            </div>
<?php
                           }
                       }
                    }
                ?> <!-- end of php code -->
                <form class="form" action="abc.php" method="post">
                    <div class="form_input">
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="form_input">
                        <input type="text" placeholder="Subject" name="subject">
                    </div>
                    <div class="form_input">
                        <textarea placeholder="Message" name="msg"></textarea>
                    </div>
                    
                    <button class="btn0" type="submit" name="submit"><b>Submit</b></button>
			
		</form>
</div>
</div>
</div>
</body>
</html>
