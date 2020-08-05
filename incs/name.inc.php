<?php

    // save name
    $name = $_POST['visitante'];

    session_start();
    $_SESSION['visitantName'] = $name;
    header("Location:../index.php");
    exit();
?>