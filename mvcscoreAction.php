<?php

    if(!isset($_SESSION)){
        session_start();
    }

    if(isset($_POST["back"])){
        require_once("mvcinput.php");
        return;
    }

    
?>