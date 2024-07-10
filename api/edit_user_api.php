<?php
$result = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['id'];
    $username=valid($_POST['username']);
    $email = valid($_POST['email']);
    $phoneNumber = valid($_POST['phoneNumber']);
    $comment = valid($_POST['comment']);
    require('../connection.php');

    $q_update_user="UPDATE users SET username='$username',email='$email',phoneNumber='$phoneNumber',comment='$comment' WHERE id='$user_id'";
    if(mysqli_query($conn,$q_update_user)){
        $result['status']=200;
        $result['msg'] = 'رکورد مورد نظر تغییر کرد.';
        mysqli_close($conn);
        echo json_encode($result);
    }else{
        $result['status'] = 500;
        $result['msg'] = 'خطای سروری رخ داده است.';
        mysqli_close($conn);
        echo json_encode($result);
    }
    
}
function valid($val)
{
    $val = trim($val);
    $val = htmlspecialchars($val);
    $val = stripslashes($val);
    return $val;
}
