<?php

    // Requires
    require_once('incs/day.php');

    // Save Visitant Name
    if(isset($_GET['name']))
    {
        $name = $_POST['visitante'];

        session_start();
        $_SESSION['visitantName'] = $name;

        header("Location:../index.php");
        exit();
    }

?>