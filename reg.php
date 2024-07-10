<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = valid($_POST['username']);
    $phoneNumber = valid($_POST['phoneNumber']);
    $email = valid($_POST['email']);
    $comment = valid($_POST['comment']);
    $password = valid($_POST['password']);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $q_insert_user = "INSERT INTO users(username,email,phoneNumber,comment,password,role) 
                                 VALUES('$username','$email','$phoneNumber','$comment','$pass_hash','user')";
    require('connection.php');
    if (mysqli_query($conn, $q_insert_user)) {
        header('Location:register.php?isRegister=true');
    } else {
        header('Location:register.php?isRegister=false');
    }
}
mysqli_close($conn);
function valid($val){
    $val = trim($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    return $val;
}
