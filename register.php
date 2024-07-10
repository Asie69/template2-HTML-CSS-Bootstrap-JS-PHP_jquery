<?php include('header.php'); ?>
<!--contactUs-start-->
<section class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <?php
            if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'true') : ?>
                <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                    ثبت نام انجام شد.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <?php
            if (isset($_GET['isRegister']) && $_GET['isRegister'] == 'false') : ?>
                <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                    ثبت نام انجام نشد.
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>
            <h3 class="my-5 text-center">ثبت نام</h3>
            <form method="POST" action="<?php echo htmlspecialchars('reg.php'); ?>">
                <input type="text" class="form-control shadow border-0 pt-3" placeholder="نام" name="username">
                <input type="number" class="form-control my-4 shadow border-0 pt-3" placeholder="شماره موبایل" name="phoneNumber">
                <input type="email" class="form-control shadow border-0 pt-3" placeholder="ایمیل" name="email">
                <input type="password" class="form-control my-4 shadow border-0 pt-3" placeholder="پسورد" name="password">
                <textarea class="form-control shadow border-0 pt-3" placeholder="توضیحات" name="comment"></textarea>
                <button type="submit" class="btn bg-Maincustom text-white py-2 px-5 rounded-0 my-4">ارسال</button>
            </form>
        </div>
    </div>
</section>
<!--contactUs-end-->
<?php include('footer.php'); ?>