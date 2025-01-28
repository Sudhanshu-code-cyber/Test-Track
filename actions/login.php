<?php include_once "../config/connect.php";

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = mysqli_query($connect,"select * from users where email='$email' and password='$password'");
    $data = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);

    if($count){
        if($data['isAdmin'] == 1){
            $_SESSION['user'] = $email;
            redirect("../admin/index.php");
        }
        else{
            if($count > 0){
            $_SESSION['user'] = $email;
            redirect("../index.php");
            }
            else{
                msg("username password is invalid");
                redirect("login.php");
            }
        }
       
    }
    else{
        msg('invalid email aur password');
        redirect("login.php");
    }
}

?>