<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $password = valid($_POST['password']);
    $q_select_user = "SELECT * FROM users where username='$username'";
    require('connection.php');
    $res_user = mysqli_query($conn, $q_select_user);
    if (mysqli_num_rows($res_user) > 0) {
        $user_data = mysqli_fetch_assoc($res_user);
        if (password_verify($password, $user_data['password'])) {
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['role'] = $user_data['role'];
            header('Location:index.php');
        } else {
            header('Location:login.php?err=پسورد اشتباه است');
        }
    } else {
        header('Location:login.php?err=نام کاربری وجود ندارد');
    }
}
mysqli_close($conn);
function valid($val)
{
    $val = trim($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    return $val;
}
