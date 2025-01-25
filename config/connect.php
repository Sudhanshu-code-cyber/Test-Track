<?php
    $connect = new mysqli("localhost", "root", "", "testtrack") or die("error connecting to db");

    // alert message function
    function msg($msg){
        echo "<script>alert('$msg')</script>";
    }

    function redirect($page){
        echo "<script>window.open('$page', '_self')</script>";
    }
?>