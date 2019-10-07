<?php

    require("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $insertAccount = "INSERT INTO user VALUES (null , '$username' , '$username')";

    echo $username;

?>