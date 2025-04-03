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

        <!-- End Header Area -->
   
   
   
   
   
   
                 <!---My code Here--->
                
                            <div class="card bg-primary border-0 rounded-3 welcome-box style-two mb-4 lative">
                                <div class="card-body py-38 px-4">
                                    <div class="mb-5">
                                        <h3 class="text-white fw-semibold">Welcome Back, <span class="text-danger-div">Olivia!</span></h3>
                                        <p class="text-light">Your progress this week is Awesome.</p>
                                    </div>

                                    <div class="d-flex align-items-center flex-wrap gap-4 gap-xxl-5">
                                        <div class="d-flex align-items-center welcome-status-item style-two">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined">airplay</i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="text-white fw-semibold mb-0 fs-16">75h</h5>
                                                <p class="text-light">Hours Spent</p>
                                            </div>
                                        </div>
                                    
                                        <div class="d-flex align-items-center welcome-status-item style-two">
                                            <div class="flex-shrink-0">
                                                <i class="material-symbols-outlined icon-bg two">local_library</i>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="text-white fw-semibold mb-0 fs-16">15</h5>
                                                <p class="text-light">Course Completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <img src="../assets/images/welcome-2.gif" class="welcome-2 d-none d-sm-block" alt="welcome">
                            </div>

                            
                    <div class="main-content-container overflow-hidden">
                            <div class="card bg-white border-0 rounded-3 mb-4 kanban-for-dark">
                                <div class="card-body p-4">
                                    <div class="rounded-3 mb-4" style="background-color: #D8FFC8; padding: 20px;">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="mb-0 fs-14 fw-semibold">UX/UI Design</h4>
                                            <button class="material-symbols-outlined fs-20 text-body hover border-0 p-0 bg-transparent">edit</button>
                                        </div>
                                        <p>A brief description of the project, its objectives, and its importance to the organization.</p>
                                       
                                    </div>
                                    <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <span class="py-sm-1 d-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="40px" fill="blue"><path d="M480-313 287-506l43-43 120 120v-371h60v371l120-120 43 43-193 193ZM220-160q-24 0-42-18t-18-42v-143h60v143h520v-143h60v143q0 24-18 42t-42 18H220Z"/></svg>
                                            <span class="fs-18">Downloding</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        
                    



                        </div>
                   
               </div>
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