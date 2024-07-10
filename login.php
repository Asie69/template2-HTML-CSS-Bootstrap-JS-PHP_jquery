<?php include('header.php'); ?>
<!--contactUs-start-->
<section class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <h3 class="my-5 text-center">فرم ورود</h3>
            <form method="POST" action="<?php echo htmlspecialchars('log.php'); ?>">
                <input type="text" class="form-control shadow border-0 pt-3" placeholder="نام" name="username">
                <input type="password" class="form-control shadow border-0 pt-3 my-4" placeholder="پسورد" name="password">
                <button type="submit" class="btn bg-Maincustom text-white py-2 px-5 rounded-0">ورود</button>
            </form>
        </div>
    </div>
</section>
<!--contactUs-end-->
<?php include('footer.php'); ?>