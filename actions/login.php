<?php include_once "../config/connect.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($connect,"select * from users where email='$email' and password='$password'");
    $count = mysqli_num_rows($query);

    if($count){
        $_SESSION['user'] = $email;
        redirect("../index.php");
    }
    else{
        msg('invalid email aur password');
        redirect("../login.php");
    }
}

?>