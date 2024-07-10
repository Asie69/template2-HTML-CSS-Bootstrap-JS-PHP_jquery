<?php
include('header.php');
require('connection.php');
$user_id = $_SESSION['id'];
if (isset($_SESSION['role']) && $_SESSION['role'] == 'user') {
    $q_select_user = "SELECT * FROM users where id='$user_id'";
    $res = mysqli_query($conn, $q_select_user);
} else {
    $q_select_user = "SELECT * FROM users";
    $res = mysqli_query($conn, $q_select_user);
}
mysqli_close($conn);
?>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">نام کاربری</th>
                            <th scope="col">ایمیل</th>
                            <th scope="col">شماره تلفن</th>
                            <th scope="col">توضیحات</th>
                            <th scope="col">تاریخ ثبت نام</th>
                            <th scope="col">تغییر وضعیت</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($user_data = mysqli_fetch_assoc($res)) : ?>
                            <tr>
                                <th><?= $user_data['id'] ?></th>
                                <td><?= $user_data['username'] ?></td>
                                <td><?= $user_data['email'] ?></td>
                                <td><?= $user_data['phoneNumber'] ?></td>
                                <td><?= $user_data['comment'] ?></td>
                                <td class="reg-date-user"><?= $user_data['reg_date'] ?></td>
                                <td>
                                    <button type="button" class="btn btn-danger" onclick="deleteUser(<?= $user_data['id'] ?>,event)">حذف</button>
                                    <a href="editUser.php?id=<?= $user_data['id'] ?>" class="btn btn-success" target="_blank">ادیت</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>