<?php
require 'components/header.php'
?>
<!-- Dark mode switching -->
<div class="dark-mode-switching">
    <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="dark-mode-text text-center">
            <svg class="bi bi-moon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"></path>
            </svg>
            <p class="mb-0">Switching to dark mode</p>
        </div>
        <div class="light-mode-text text-center">
            <svg class="bi bi-brightness-high" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </svg>
            <p class="mb-0">Switching to light mode</p>
        </div>
    </div>
</div>
<!-- RTL mode switching -->
<div class="rtl-mode-switching">
    <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="rtl-mode-text text-center">
            <svg class="bi bi-text-right" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
            </svg>
            <p class="mb-0">Switching to RTL mode</p>
        </div>
        <div class="ltr-mode-text text-center">
            <svg class="bi bi-text-left" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
            </svg>
            <p class="mb-0">Switching to default mode</p>
        </div>
    </div>
</div>
<!-- Header Area -->
<div class="header-area" id="headerArea">
    <div class="container">
        <!-- Paste your Header Content from here -->
        <!-- Header Content -->
        <div class="header-content header-style-three position-relative d-flex align-items-center justify-content-between">
            <!-- Navbar Toggler -->
            <div class="navbar--toggler" id="affanNavbarToggler" data-bs-toggle="offcanvas" data-bs-target="#affanOffcanvas" aria-controls="affanOffcanvas">
                <div class="span-wrap"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
            </div>
            <!-- Logo Wrapper -->
            <div class="logo-wrapper"><a href="page-home.html"><img src="../html/dist/imgcore-img/logo.png" alt=""></a></div>
            <!-- User Profile -->
            <div class="user-profile-wrapper"><a class="user-profile-trigger-btn" href="#"><img src="../html/dist/img/bg-img/2.jpg" alt=""></a></div>
        </div>
        <!-- # Header Three Layout End -->
    </div>
</div>
<?php
require 'components/sidebar.php'
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
<div class="page-content-wrapper py-3">
    <!-- Pagination -->
    <div class="shop-pagination pb-3">
        <div class="container">
            <div class="card">
                <div class="card-body p-2">
                    <div class="d-flex align-items-center justify-content-between">
                        <small class="ms-1">Tambah Kelompok</small>
                        <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-plus-circle"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Element Heading -->
        <div class="element-heading mt-3">
            <h6>List Kelompok</h6>
        </div>
    </div>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="accordion accordion-flush accordion-style-two" id="accordionStyle2">
                    <!-- Single Accordion -->
                    <div class="accordion-item">
                        <div class="accordion-header" id="accordionFour">
                            <h6 data-bs-toggle="collapse" data-bs-target="#accordionStyleFour" aria-expanded="true" aria-controls="accordionStyleFour"><i class="bi bi-plus-lg"></i>What is refund policy?</h6>
                        </div>
                        <div class="accordion-collapse collapse show" id="accordionStyleFour" aria-labelledby="accordionFour" data-bs-parent="#accordionStyle2">
                            <div class="accordion-body">
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, velit?</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Accordion -->
                    <div class="accordion-item">
                        <div class="accordion-header" id="accordionFive">
                            <h6 class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleFive" aria-expanded="false" aria-controls="accordionStyleFive"><i class="bi bi-plus-lg"></i>Can it accept Paypal?</h6>
                        </div>
                        <div class="accordion-collapse collapse" id="accordionStyleFive" aria-labelledby="accordionFive" data-bs-parent="#accordionStyle2">
                            <div class="accordion-body">
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a cupiditate.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Accordion -->
                    <div class="accordion-item">
                        <div class="accordion-header" id="accordionSix">
                            <h6 class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordionStyleSix" aria-expanded="false" aria-controls="accordionStyleSix"><i class="bi bi-plus-lg"></i>What is PWA ready?</h6>
                        </div>
                        <div class="accordion-collapse collapse" id="accordionStyleSix" aria-labelledby="accordionSix" data-bs-parent="#accordionStyle2">
                            <div class="accordion-body">
                                <p class="mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a cupiditate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'components/script.php'
?>
</body>

</html>