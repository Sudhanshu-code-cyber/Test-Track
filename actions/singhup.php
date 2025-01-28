<?php
include_once "../config/connect.php";

if(isset($_POST['singhup'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($connect,"insert into users (firstname, lastname, gender ,contact ,email ,password) values('$firstname','$lastname','$gender','$contact','$email','$password')");

    if($query){
        redirect("../login.php");
    }
    else{
        msg("something went wrong");
    }
}
?>