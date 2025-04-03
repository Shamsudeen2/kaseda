<?php
 include 'web_info.php';
 require_once dirname(__DIR__, 2) . '/config.php'; 

$webname1 = substr($webname,0, 5). "...";
  

?>    
 
    <!-- Start Sidebar Area -->
     <div class="sidebar-area" id="sidebar-area">
            <div class="logo position-relative">
                <a href="index.html" class="d-block text-decoration-none position-relative">
                    <img src="../assets/images/logo-icon.png" alt="logo-icon">
                    <span class="logo-text fw-bold text-dark"><?php echo $webname1; ?></span>
                </a>
                <button class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y" id="sidebar-burger-menu">
                    <i data-feather="x"></i>
                </button>
            </div>

            <aside id="layout-menu" class="layout-menu menu-vertical menu active" data-simplebar>
                <ul class="menu-inner">
                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">MAIN</span>
                    </li>
                    <li class="menu-item open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle active">
                            <span class="material-symbols-outlined menu-icon">dashboard</span>
                            <span class="title">Dashboard</span>
                            <span class="count">1</span>
                        </a> 
                
                        <ul class="menu-sub">
                           
                            <li class="menu-item">
                        <a href="dash_admin.php" class="menu-link active">
      
                        <span class="material-symbols-outlined  menu-icon">home</span>
                            <span class="title">Dashboard</span>
                        </a>
                       
                    </li>
                        </ul>
                    </li>

              

                    <li class="menu-title small text-uppercase">
                        <span class="menu-title-text">SERVICES</span>
                    </li>

                    <li class="menu-item">
                        <a href="bill_pur.php" class="menu-link active">
                        <span class="material-symbols-outlined  menu-icon">phonelink_ring</span>
                            <span class="title">LogOut</Leg></span>
                        </a>
                       
                    </li>

                    
                


                   
                </ul>
            </aside>
        </div>
        <!-- End Sidebar Area -->