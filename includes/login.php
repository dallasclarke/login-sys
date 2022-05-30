<?php

    if (isset($_POST['submit'])) {

        // Grabbing data
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        $login = new LoginController($uid, $pwd);

        $login->loginUser();

    }