<?php
    session_start();
    
    if(isset($_SESSION['name'])) {
        $userName = $_SESSION['name'];
    } else {
        $userName = null;
    }
    if(isset($_SESSION['email'])) {
        $userEmail = $_SESSION['email'];
    } else {
        $userEmail = null;
    }
    return;
?>