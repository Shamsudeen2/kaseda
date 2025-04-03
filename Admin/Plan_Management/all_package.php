<?php
 require_once dirname(__DIR__, 2) . '/config.php'; 
 include(BASE_PATH . 'Hk_includes/web_info.php');


?>    
 

<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="../../assets/css/sidebar-menu.css">
		<link rel="stylesheet" href="../../assets/css/simplebar.css">
		<link rel="stylesheet" href="../../assets/css/apexcharts.css">
		<link rel="stylesheet" href="../../assets/css/prism.css">
		<link rel="stylesheet" href="../../assets/css/rangeslider.css">
		<link rel="stylesheet" href="../../assets/css/sweetalert.min.css">
        <link rel="stylesheet" href="../../assets/css/quill.snow.css">
        <link rel="stylesheet" href="../../assets/css/google-icon.css">
        <link rel="stylesheet" href="../../assets/css/remixicon.css">
        <link rel="stylesheet" href="../../assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="../../assets/css/fullcalendar.main.css">
		<link rel="stylesheet" href="../../assets/css/style.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="../../assets/images/favicon.png">
		<!-- Title -->
		<title>Trezo - Bootstrap 5 Admin Dashboard Template</title>
    </head>
    <body class="boxed-size">
        <!-- Start Preloader Area -->
       
        <!-- End Preloader Area -->

          <!-- Start Sidebar Area -->
          <?php require "../Ad_includes/Ad_side.php";  ?>

<!-- End Sidebar Area -->

        <!-- Start Main Content Area -->
        <div class="container-fluid">
            <div class="main-content d-flex flex-column">
               <!-- Start header Area -->
      <?php   require "../Ad_includes/ad_header.php";  ?>

       <!-- End header Area -->

<!--code here---->

<div class="main-content-container overflow-hidden">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <h3 class="mb-0">User</h3>

                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb align-items-center mb-0 lh-1">
                                <li class="breadcrumb-item">
                                    <a href="user.html#" class="d-flex align-items-center text-decoration-none">
                                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                                        <span class="text-secondary fw-medium hover">Dashboard</span>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">Project Management</span>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span class="fw-medium">User</span>
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div class="card bg-white border-0 rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                                <form class="position-relative table-src-form me-0">
                                    <input type="text" class="form-control" placeholder="Search here">
                                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                                </form>
                                <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <span class="py-sm-1 d-block">
                                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                                        <span>Add New User</span>
                                    </span>
                                </button>
                            </div>

                            <div class="default-table-area default-table-width">
                                <div class="table-responsive">
                                    <table class="table align-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    <div class="form-check">
                                                        <input class="form-check-input position-relative top-1" type="checkbox" value="" id="flexCheckDefault7">
                                                        <label class="position-relative top-4 ms-1" for="flexCheckDefault7">ID</label>
                                                    </div>
                                                </th>
                                                <th scope="col">User</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Project Access</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#999</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-42.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Sarah Johnson</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea998b988b82aa9e988f9085c4898587">[email&#160;protected]</a></td>
                                                <td class="text-body">Project Manager</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Hotel Management System, Python</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#998</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-43.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Carolyn Barnes</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc9f9d8e93908592bc888e998693d29f9391">[email&#160;protected]</a></td>
                                                <td class="text-body">Developer</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Project Monitoring, Project Alpho</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#997</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-44.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Donna Miller</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7d191213131c3d090f180712531e1210">[email&#160;protected]</a></td>
                                                <td class="text-body">Business Analyst</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Aegis Accounting Service, Beja Banking</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">Deactive</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#996</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-45.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Barbara Cross</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5436352636352635142026312e3b7a373b39">[email&#160;protected]</a></td>
                                                <td class="text-body">UI/UX Designer</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Aoriv AI Design, Vaxo App Design</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#995</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-46.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Rebecca Block</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="334156515650505273474156495c1d505c5e">[email&#160;protected]</a></td>
                                                <td class="text-body">QA Tester</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Product Development, Trezo Dashboard</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">Deactive</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#994</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-47.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Ramiro McCarty</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2351424e4a514c63575146594c0d404c4e">[email&#160;protected]</a></td>
                                                <td class="text-body">Admin</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Hotel Management System, Python</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#993</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-48.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Robert Fairweather</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ae8f5f8ffe8eedaeee8ffe0f5b4f9f5f7">[email&#160;protected]</a></td>
                                                <td class="text-body">Editor</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Project Monitoring, Project Alpho</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#992</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-49.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Marcelino Haddock</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7815190a1b1d14111617380c0a1d0217561b1715">[email&#160;protected]</a></td>
                                                <td class="text-body">Project Manager</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">egis Accounting Service, Beja Banking</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#991</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-50.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Thomas Wilson</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4a0bcbbb9b5a794a0a6b1aebbfab7bbb9">[email&#160;protected]</a></td>
                                                <td class="text-body">UI/UX Designer</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Aoriv AI Design, Vaxo App Design</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-primary bg-opacity-10 text-primary p-2 fs-12 fw-normal">Active</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                            <tr>
                                                <td class="text-body">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#990</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="agents.html" class="d-flex align-items-center">
                                                        <div class="flex-shrink-0">
                                                            <img src="assets/images/user-51.jpg" class="wh-34 rounded-circle" alt="user">
                                                        </div>
                                                        <div class="flex-grow-1 ms-2 position-relative top-1">
                                                            <h6 class="mb-0 fs-14 fw-medium">Nathaniel Hulsey</h6>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="https://templates.envytheme.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c6a8a7b2aea7a8afa3aa86b2b4a3bca9e8a5a9ab">[email&#160;protected]</a></td>
                                                <td class="text-body">Web Developer</td>
                                                <td class="text-body">
                                                    <span class="text-truncate d-inline-block" style="width: 200px;">Product Development, Trezo Dashboard</span>
                                                </td>
                                                <td>
                                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">Deactive</span>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center gap-1">
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                                        </button>
                                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                            <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                                        </button>
                                                    </div>
                                                </td> 
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                                    <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>
    
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination mb-0 justify-content-center">
                                            <li class="page-item">
                                                <a class="page-link icon" href="user.html" aria-label="Previous">
                                                    <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="user.html">1</a></li>
                                            <li class="page-item"><a class="page-link" href="user.html">2</a></li>
                                            <li class="page-item"><a class="page-link" href="user.html">3</a></li>
                                            <li class="page-item"><a class="page-link" href="user.html">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link icon" href="user.html" aria-label="Next">
                                                    <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>















<!---footer start--->
       <div class="flex-grow-1"></div>
                     <!-- Start footer Area -->
      <?php   require "../Ad_includes/Ad_footer.php";  ?>

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
        <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../../assets/js/sidebar-menu.js"></script>
        <script src="../../assets/js/dragdrop.js"></script>
        <script src="../../assets/js/rangeslider.min.js"></script>
        <script src="../../assets/js/sweetalert.js"></script>
        <script src="../../assets/js/quill.min.js"></script>
        <script src="../../assets/js/data-table.js"></script>
        <script src="../../assets/js/prism.js"></script>
        <script src="../../assets/js/clipboard.min.js"></script>
        <script src="../../assets/js/feather.min.js"></script>
        <script src="../../assets/js/simplebar.min.js"></script>
        <script src="../../assets/js/apexcharts.min.js"></script>
        <script src="../../assets/js/swiper-bundle.min.js"></script>
        <script src="../../assets/js/fullcalendar.main.js"></script>
        <script src="../../assets/js/custom/apexcharts.js"></script>
        <script src="../../assets/js/custom/custom.js"></script>
    </body>
</html>