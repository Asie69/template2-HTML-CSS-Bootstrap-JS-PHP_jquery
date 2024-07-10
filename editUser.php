<?php include('header.php');
require('connection.php');
$user_id = $_GET['id'];
$q_select_user = "SELECT * FROM users WHERE id='$user_id'";
$res_user = mysqli_query($conn, $q_select_user);
$user_data = mysqli_fetch_assoc($res_user);
?>
<!--contactUs-start-->
<section class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h3 class="my-5 text-center">تغییر اطلاعات کاربری</h3>
            <input type="text" class="form-control shadow border-0 pt-3" placeholder="نام" name="username" id="userNameEdit" value="<?= $user_data['username'] ?>">
            <input type="number" class="form-control my-4 shadow border-0 pt-3" placeholder="شماره موبایل" name="phoneNumber" id="phoneEdit" value="<?= $user_data['phoneNumber'] ?>">
            <input type="email" class="form-control shadow border-0 pt-3" placeholder="ایمیل" name="email" id="emailEdit" value="<?= $user_data['email'] ?>">
            <textarea class="form-control shadow border-0 my-4 pt-3" placeholder="توضیحات" name="comment" id="commentEdit" value="<?= $user_data['comment'] ?>"></textarea>
            <button type="submit" class="btn bg-Maincustom text-white py-2 px-5 rounded-0 my-4" onclick="editUser(<?= $user_data['id'] ?>)">ذخیره</button>
        </div>
    </div>
</section>
<!--contactUs-end-->
<?php include('footer.php'); ?>