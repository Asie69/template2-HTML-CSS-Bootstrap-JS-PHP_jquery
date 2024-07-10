 <!--footer-start-->
 <footer class="container-fluid mt-5">
     <div class="row">
         <div class="col-12 text-center">
             <h3 class="text-white my-5 pt-2">با ما در تماس باشید</h3>
         </div>
     </div>
     <div class="container position-relative">
         <hr class="mx-auto position-absolute d-none d-md-block">
         <div class="row justify-content-center position-relative">
             <div class="col-md-3 text-center contactIcon">
                 <i class="fa-solid fa-envelope text-white fa-2x p-4 my-4 rounded-circle bg-Maincustom"></i>
                 <p class="text-white">asiehdavary@yahoo.com</p>
             </div>
             <div class="col-md-3 text-center contactIcon">
                 <i class="fa-solid fa-phone text-white fa-2x p-4 my-4 rounded-circle bg-Maincustom"></i>
                 <p class="text-white">05130000000</p>
             </div>
             <div class="col-md-3 text-center contactIcon">
                 <i class="fa-solid fa-location text-white fa-2x p-4 my-4 rounded-circle bg-Maincustom"></i>
                 <p class="text-white">Lorem ipsum dolor sit amet</p>
             </div>
         </div>
         <div class="row my-5">
             <div class="col-12 text-center">
                 <h3 class="text-white">ما را دنبال کنید</h3>
             </div>
             <div class="col-md-2 d-flex justify-content-evenly bg-white py-2 mx-auto my-3">
                 <a href="">
                     <i class="fa-brands fa-1x fa-instagram text-Maincustom"></i>
                 </a>
                 <a href="">
                     <i class="fa-brands fa-1x fa-youtube text-Maincustom"></i>
                 </a>
                 <a href="">
                     <i class="fa-brands fa-1x fa-twitter text-Maincustom"></i>
                 </a>
                 <a href="">
                     <i class="fa-brands fa-1x fa-facebook-f text-Maincustom"></i>
                 </a>
             </div>
         </div>
     </div>
     <div class="container border-top text-center">
         <p class="text-white py-3">
             © 2024 All Rights Reserved By Free Html Templates
         </p>
     </div>
 </footer>
 <!--footer-end-->

 <!--offcanvas-start-->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="myOffcanvas" aria-labelledby="offcanvasExampleLabel">
     <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasExampleLabel">منو</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0 p-0">
             <li class="nav-item">
                 <a class="nav-link text-black pe-0" href="index.php">خانه</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-black" href="#">درباره ما</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-black" href="#">خدمات</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-black" href="register.php" target="_blank">تماس با ما</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link text-black" href="<?php echo isset($_SESSION['username']) ? 'profile.php' : 'login.php'; ?>" target="_blank">
                     <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'ورود'; ?>
                 </a>
             </li>
             <?php if (isset($_SESSION['username'])) : ?>
                 <li class="nav-item">
                     <a class="nav-link text-black" href="logout.php">خروج</a>
                 </li>
             <?php endif; ?>
         </ul>
     </div>
 </div>
 <!--offcanvas-end-->


 <script src="./assets/js/jquery-3.7.1.min.js"></script>
 <script src="./assets/js/jalali-moment.browser.js"></script>
 <script src="./assets/js/bootstrap.bundle.min.js"></script>
 <script src="./assets/js/main.js"></script>
 </body>

 </html>