<?php

    // Requires
    require_once('incs/day.php');

    // Save Visitant Name
    if(isset($_GET['name']))
    {
        $name = $_POST['visitante'];

        session_start();
        $_SESSION['visitantName'] = $name;

        header("Location:index.php");
        exit();
    }
    
    // Se não tem nome do vistante 
    if(!$_SESSION['visitantName'] && $_SERVER['REQUEST_URI'] != '/welcome.php')
    {
        header("Location:welcome.php");
        exit();
    }

?>