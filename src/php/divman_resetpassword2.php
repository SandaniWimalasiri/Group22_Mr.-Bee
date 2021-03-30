<?php

if (isset($_POST['Submit'])) {
    session_start();
    require_once("../../config/connect.php");

    $oldpass = $_POST['opwd'];
    $username = $_POST['id'];
    $newpassword = $_POST['npwd'];

    if (!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $newpassword))) {
        $_SESSION['message'] = "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and special character";
        header("Location: divma_resetpass.php?id='$username'");
    }

    $newpassword = ($_POST['npwd']);
    $rpassword = ($_POST['cpwd']);

    $sql = mysqli_query($connection, "SELECT COUNT(pwd) as count FROM div_manager where pwd='$oldpass' and div_id=$username");

    if($sql->fetch_assoc()['count'] == 1) {
        $sql = mysqli_query($connection, "UPDATE div_manager SET pwd = '$newpassword' where div_id=$username");
        $_SESSION['message'] = "Password changed.";
        header("Location: divma_resetpass.php?id='$username'");
    } else {
        $_SESSION['message'] = "Invalid current password";
        header("Location: divma_resetpass.php?id='$username'");
    }

}
