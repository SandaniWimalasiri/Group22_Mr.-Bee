<?php  session_start();?>

<html>

<head>

    <title>Change Password</title>

    <link rel="stylesheet" type="text/css" href="../../public/css/change_password.css">


</head>

<body>

    <nav>
        <!--logo-->
        <a href="#" class="logo">Mr.<font color="#f4976c">Bee</font></a>


        <a href="divman.php#about" class="lang">Back</a>
    </nav>
    <section id="about">
    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Password Change</h2>
            </div>
            <div class="row clearfix">
            <div class="">

                <form name="chngpwd" action="divman_resetpassword2.php" method="post" onSubmit="return valid();">
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="opwd" id="opwd" placeholder="Old Password" required />
                    </div>
                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="npwd" id="npwd" placeholder="New Password" required />
                    </div>

                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                        <input type="password" name="cpwd" id="cpwd" placeholder="Re-Type New Password" required />
                    </div>
                    <div class="error">
                        <?php
                        if (isset($_SESSION['message']) && $_SESSION['message'] != '') echo $_SESSION['message'];
                        ?>
                    </div>
                    <input type="submit" name="Submit" value="Change Password" />
                    <input type="hidden" name='id' value="<?php echo $_GET['id']; ?>" />
                </form>
            </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>