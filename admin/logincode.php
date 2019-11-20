<?php 
include('security.php');

//code for login into admin 
if(isset($_POST['login_btn']))
{
    $email_login=$_POST['email'];
    $password_login=$_POST['password'];

    $query ="SELECT * FROM admin_user WHERE email='$email_login' AND password='$password_login' ";
    $query_run=mysqli_query($con,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username']=$email_login;
        header('Location: index.php'); 
    }
    else 
    {
        $_SESSION['status']='Invalid Username & Password';
        header('Location: login.php'); 
    }
}

?>