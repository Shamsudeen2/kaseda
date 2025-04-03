<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="../assets/css/sidebar-menu.css">
		<link rel="stylesheet" href="../assets/css/simplebar.css">
		<link rel="stylesheet" href="../assets/css/apexcharts.css">
		<link rel="stylesheet" href="../assets/css/prism.css">
		<link rel="stylesheet" href="../assets/css/rangeslider.css">
		<link rel="stylesheet" href="../assets/css/sweetalert.min.css">
        <link rel="stylesheet" href="../assets/css/quill.snow.css">
        <link rel="stylesheet" href="../assets/css/google-icon.css">
        <link rel="stylesheet" href="../assets/css/remixicon.css">
        <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../assets/css/fullcalendar.main.css">
		<link rel="stylesheet" href="../assets/css/style.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../assets/images/favicon.png">
		<!-- Title -->
		<title>Trezo - Bootstrap 5 Admin Dashboard Template</title>
    </head>
    <body class="boxed-size">
        <!-- Start Preloader Area -->
       
        <!-- End Preloader Area -->

          <!-- Start Sidebar Area -->
          <?php   require "Ad_includes/Ad_side.php";  ?>

<!-- End Sidebar Area -->

        <!-- Start Main Content Area -->
        <div class="container-fluid">
            <div class="main-content d-flex flex-column">
               <!-- Start header Area -->
      <?php   require "Ad_includes/ad_header.php";  ?>

       <!-- End header Area -->

<!--code here---->

<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">Recharge Card Print </h3>

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="change-password.html#" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                        <span class="text-secondary fw-medium hover">Dashboard</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Settings</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">upgrade user</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                   
                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <ul class="ps-0 mb-4 list-unstyled d-flex flex-wrap gap-2 gap-lg-3">
                                <li>
                                     <h3> Recharge Card Print </h3>
                            </li>
   
                            </ul>
                            
                            <form>
                                <div class="row">
                                <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Network</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                <option value="1" class="text-dark">MTN</option>
                                                <option selected class="text-dark">AIRTEL</option>
                                                    <option value="2" class="text-dark">GLO</option>
                                                <option value="1" class="text-dark">9MOBILE</option>
                                                

                                                </select>
                                                <i class="ri-men-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Network amount</label>
                                            <div class="form-group position-relative">
                                                <select class="form-select form-control ps-5 h-55" aria-label="Default select example">
                                                <option value="1" class="text-dark">₦100</option>
                                                <option selected class="text-dark">₦300</option>
                                                <option value="1" class="text-dark">₦100</option>
                                                <option selected class="text-dark">₦300</option>
                                                 

                                                </select>
                                                <i class="ri-timer-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Name On Card</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" placeholder="Your Company name to show on generated pin
">
                                                <i class="ri-bill-fill position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                              
                                            </div>
                                        </div>
                                    </div>
                                <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Quantity</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" placeholder="amount">
                                                <i class="ri-currency-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="col-lg-6">
                                        <div class="form-group mb-4">
                                            <label class="label text-secondary">Amount</label>
                                            <div class="form-group position-relative">
                                                <input type="text" class="form-control text-dark ps-5 h-55" value="0.56% discount" readonly>
                                                <i class="ri-line-chart-fill position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                            </div>
                                        </div>
                                    </div>
                           
                                    
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group d-flex gap-3 align-items-center">
                                         <a href="bill_verify.php" >  <button type="button" class="btn btn-primary py-2 px-5 fw-medium fs-16"><i class="ri-speed-up-fill fs-20"></i> Generate </button> <i class="ri-check-line text-white fw-medium"></i></a>
                                        </div>
                                    </div>
                                </div>     
                            </form>
                        </div>
                    </div>
                </div>
















<!---footer start--->
       <div class="flex-grow-1"></div>
                     <!-- Start footer Area -->
      <?php   require "Ad_includes/Ad_footer.php";  ?>

<!-- End footer Area -->
              
            </div>
        </div>
        <!-- Start Main Content Area -->

        <!-- Start Theme Setting Area -->
        <div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
            <div class="offcanvas-header bg-body-bg py-3 px-4">
                <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-4">
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
                    <div class="settings-btn rtl-btn">
                        <label id="switch" class="switch">
                            <input type="checkbox" onchange="toggleTheme()" id="slider">
                            <span class="slider round"></span>
                        </label>
                    </div>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
                    <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                        Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
                    </button>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
                    <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                        Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
                    </button>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
                    <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                        Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
                    </button>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
                    <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                        Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
                    </button>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
                    <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                        Click To <span class="square">Square</span> <span class="radius">Radius</span>
                    </button>
                </div>
                <div class="mb-4 pb-2">
                    <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
                    <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                        Click To <span class="white">White</span> <span class="gray">Gray</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- End Theme Setting Area -->
     
        <!-- Link Of JS File -->
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/sidebar-menu.js"></script>
        <script src="../assets/js/dragdrop.js"></script>
        <script src="../assets/js/rangeslider.min.js"></script>
        <script src="../assets/js/sweetalert.js"></script>
        <script src="../assets/js/quill.min.js"></script>
        <script src="../assets/js/data-table.js"></script>
        <script src="../assets/js/prism.js"></script>
        <script src="../assets/js/clipboard.min.js"></script>
        <script src="../assets/js/feather.min.js"></script>
        <script src="../assets/js/simplebar.min.js"></script>
        <script src="../assets/js/apexcharts.min.js"></script>
        <script src="../assets/js/swiper-bundle.min.js"></script>
        <script src="../assets/js/fullcalendar.main.js"></script>
        <script src="../assets/js/custom/apexcharts.js"></script>
        <script src="../assets/js/custom/custom.js"></script>
    </body>
</html>