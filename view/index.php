<?php 
    require 'components/header.php'
?>
        <!-- Static Backdrop Modal -->
        <div class="cs-newsletter-form modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        <h6 class="mb-3">Subscribe our newsletter.</h6>
                        <form action="#">
                        <input class="form-control mb-3" type="email" placeholder="Enter your email">
                        <button class="btn btn-primary w-100" type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content Wrapper -->
        <div class="coming-soon-wrapper bg-white text-center bg-overlay" style="background-image: url('../html/dist/img/bg-img/welcome.jpg')">
            <div class="container">
                <div class="cs-logo"><a href="page-home.html"><img src="img/core-img/logo-dark.png" alt=""></a></div>
                <h2 class="text-white display-3">Selamat Datang</h2>
                <p class="text-white">Dilomba cerdas cermat Semarak Ramadan 1443 H</p>
                <div class="countdown2 justify-content-center" id="countdown2" data-date="23-4-2022" data-time="22:00">
                    <div class="day"><span class="num"></span><span class="word"></span></div>
                    <div class="hour"><span class="num"></span><span class="word"></span></div>
                    <div class="min"><span class="num"></span><span class="word"></span></div>
                    <div class="sec"><span class="num"></span><span class="word"></span></div>
                </div>
                <div class="notify-email mt-5">
                    <!-- <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Mulai</button> -->
                    <a class="btn btn-warning" href="menu.php">Mulai</a>
                </div>
            </div>
        </div>
        <?php 
            require 'components/script.php'
        ?>
    </body>
</html>