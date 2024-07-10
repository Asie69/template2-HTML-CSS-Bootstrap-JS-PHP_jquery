<?php
$result=array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user_id=$_POST['id'];
    require('../connection.php');
    $q_delete_user="DELETE FROM users WHERE id='$user_id'";
    if(mysqli_query($conn,$q_delete_user)){
$result['status']=200;
$result['msg']='کاربر حذف شد.';
mysqli_close($conn);
echo json_encode($result);
    }else{
        $result['status'] = 500;
        $result['msg'] = 'کاربر حذف نشد.';
        mysqli_close($conn);
        echo json_encode($result);
    }
}else{
    $result['status'] = 500;
    $result['msg'] = 'method must be post.';
    mysqli_close($conn);
    echo json_encode($result);
}