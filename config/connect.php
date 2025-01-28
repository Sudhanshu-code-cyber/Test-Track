<?php
    $connect = new mysqli("localhost", "root", "", "testtrack") or die("error connecting to db");
    session_start();
    // alert message function
    function msg($msg){
        echo "<script>alert('$msg')</script>";
    }

    function redirect($page){
        echo "<script>window.open('$page', '_self')</script>";
    }

    function redirectIfNotAuth(){
        if(!isset($_SESSION['user'])){
            redirect("login.php");
        }
    }

    function getUser(): array{
        $email = $_SESSION['user'];
        global $connect;
        $query = $connect->query("select * from users where email='$email'");

        $userData = $query->fetch_assoc();
        return $userData;
    }
?>