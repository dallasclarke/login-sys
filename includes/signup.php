<?php

    if (isset($_POST['submit'])) {

        // Grabbing data
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];
        $pwdRepeat = $_POST['pwdrepeat'];
        $email = $_POST['email'];

        // Instantiate Signup Controller Class
        include "../classes/db.php";
        include "../classes/Signup.php";
        include "../classes/Signup-Controller.php";

        $signup = new SignupController($uid, $pwd, $pwdRepeat, $email);

        // Running error handlers
        $signup->signupUser();

        // Going to back to front page
        header("location: ../index.php?error=none");
    }