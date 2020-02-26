<?php
    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST["continue"])){
        $_SESSION = array();
        require_once("mvcinput.php");
        return;
    }
?>