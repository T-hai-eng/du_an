<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/ui-tabs-accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2024 15:07:00 GMT -->
<head>
        

        

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       

         <!-- App css -->
           @extends('layouts.back-end-mainpage')
    </head>

    
    <!-- Top Bar Start -->
    <body>
        <!-- Top Bar Start -->
        <div class="topbar d-print-none">
            <div class="container-xxl">
                <nav class="topbar-custom d-flex justify-content-between" id="topbar-custom">    
        

                    <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">                        
                        <li>
                            <button class="nav-link mobile-menu-btn nav-icon" id="togglemenu">
                                <i class="iconoir-menu-scale"></i>
                            </button>
                        </li> 
                        <li class="mx-3 welcome-text">
                            <h3 class="mb-0 fw-bold text-truncate">Good Morning, James!</h3>
                            <!-- <h6 class="mb-0 fw-normal text-muted text-truncate fs-14">Here's your overview this week.</h6> -->
                        </li>                   
                    </ul>
                    <ul class="topbar-item list-unstyled d-inline-flex align-items-center mb-0">
                        <li class="hide-phone app-search">
                            <form role="search" action="#" method="get">
                                <input type="search" name="search" class="form-control top-search mb-0" placeholder="Search here...">
                                <button type="submit"><i class="iconoir-search"></i></button>
                            </form>
                        </li>     
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/flags/us_flag.jpg" alt="" class="thumb-sm rounded-circle">
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/us_flag.jpg" alt="" height="15" class="me-2">English</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/spain_flag.jpg" alt="" height="15" class="me-2">Spanish</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/germany_flag.jpg" alt="" height="15" class="me-2">German</a>
                                <a class="dropdown-item" href="#"><img src="assets/images/flags/french_flag.jpg" alt="" height="15" class="me-2">French</a>
                            </div>
                        </li><!--end topbar-language-->
        
                        <li class="topbar-item">
                            <a class="nav-link nav-icon" href="javascript:void(0);" id="light-dark-mode">
                                <i class="icofont-moon dark-mode"></i>
                                <i class="icofont-sun light-mode"></i>
                            </a>                    
                        </li>
    
                        <li class="dropdown topbar-item">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <i class="icofont-bell-alt"></i>
                                <span class="alert-badge"></span>
                            </a>
                            <div class="dropdown-menu stop dropdown-menu-end dropdown-lg py-0">
                        
                                <h5 class="dropdown-item-text m-0 py-3 d-flex justify-content-between align-items-center">
                                    Notifications <a href="#" class="badge text-body-tertiary badge-pill">
                                        <i class="iconoir-plus-circle fs-4"></i>
                                    </a>
                                </h5>
                                <ul class="nav nav-tabs nav-tabs-custom nav-success nav-justified mb-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mx-0 active" data-bs-toggle="tab" href="#All" role="tab" aria-selected="true">
                                            All <span class="badge bg-primary-subtle text-primary badge-pill ms-1">24</span>
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mx-0" data-bs-toggle="tab" href="#Projects" role="tab" aria-selected="false" tabindex="-1">
                                            Projects
                                        </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link mx-0" data-bs-toggle="tab" href="#Teams" role="tab" aria-selected="false" tabindex="-1">
                                            Team
                                        </a>
                                    </li>
                                </ul>
                                <div class="ms-0" style="max-height:230px;" data-simplebar>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="All" role="tabpanel" aria-labelledby="all-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">2 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-wolf fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing and industry.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">10 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-apple-swift fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Meeting with designers</h6>
                                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">40 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
                                                        <i class="iconoir-birthday-cake fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-user fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </div>
                                        <div class="tab-pane fade" id="Projects" role="tabpanel" aria-labelledby="projects-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">40 min ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">                                                    
                                                        <i class="iconoir-birthday-cake fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">UX 3 Task complete.</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-user fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </div>
                                        <div class="tab-pane fade" id="Teams" role="tabpanel" aria-labelledby="teams-tab" tabindex="0">
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">1 hr ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-drone fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Your order is placed</h6>
                                                        <small class="text-muted mb-0">It is a long established fact that a reader.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                            <!-- item-->
                                            <a href="#" class="dropdown-item py-3">
                                                <small class="float-end text-muted ps-2">2 hrs ago</small>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 bg-primary-subtle text-primary thumb-md rounded-circle">
                                                        <i class="iconoir-user fs-4"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-2 text-truncate">
                                                        <h6 class="my-0 fw-normal text-dark fs-13">Payment Successfull</h6>
                                                        <small class="text-muted mb-0">Dummy text of the printing.</small>
                                                    </div><!--end media-body-->
                                                </div><!--end media-->
                                            </a><!--end-item-->
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- All-->
                                <a href="pages-notifications.html" class="dropdown-item text-center text-dark fs-13 py-2">
                                    View All <i class="fi-arrow-right"></i>
                                </a>
                            </div>
                        </li>
    
                        <li class="dropdown topbar-item">
                            <a class="nav-link dropdown-toggle arrow-none nav-icon" data-bs-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-lg rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="d-flex align-items-center dropdown-item py-2 bg-secondary-subtle">
                                    <div class="flex-shrink-0">
                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-truncate align-self-center">
                                        <h6 class="my-0 fw-medium text-dark fs-13">William Martin</h6>
                                        <small class="text-muted mb-0">Front End Developer</small>
                                    </div><!--end media-body-->
                                </div>
                                <div class="dropdown-divider mt-0"></div>
                                <small class="text-muted px-2 pb-1 d-block">Account</small>
                                <a class="dropdown-item" href="pages-profile.html"><i class="las la-user fs-18 me-1 align-text-bottom"></i> Profile</a>
                                <a class="dropdown-item" href="pages-faq.html"><i class="las la-wallet fs-18 me-1 align-text-bottom"></i> Earning</a>
                                <small class="text-muted px-2 py-1 d-block">Settings</small>                        
                                <a class="dropdown-item" href="pages-profile.html"><i class="las la-cog fs-18 me-1 align-text-bottom"></i>Account Settings</a>
                                <a class="dropdown-item" href="pages-profile.html"><i class="las la-lock fs-18 me-1 align-text-bottom"></i> Security</a>
                                <a class="dropdown-item" href="pages-faq.html"><i class="las la-question-circle fs-18 me-1 align-text-bottom"></i> Help Center</a>                       
                                <div class="dropdown-divider mb-0"></div>
                                <a class="dropdown-item text-danger" href="auth-login.html"><i class="las la-power-off fs-18 me-1 align-text-bottom"></i> Logout</a>
                            </div>
                        </li>
                    </ul><!--end topbar-nav-->
                </nav>
                <!-- end navbar-->
            </div>
        </div>
        <!-- Top Bar End -->
        <!-- leftbar-tab-menu -->
        <div class="startbar d-print-none">
            <!--start brand-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span class="">
                        <img src="assets/images/logo-light.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <!--end brand-->
            <!--start startbar-menu-->
            <div class="startbar-menu" >
                <div class="startbar-collapse" id="startbarCollapse" data-simplebar>
                    <div class="d-flex align-items-start flex-column w-100">
                        <!-- Navigation -->
                        <ul class="navbar-nav mb-auto w-100">
                            <li class="menu-label pt-0 mt-0">
                                <!-- <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small> -->
                                <span>Main Menu</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="iconoir-home-simple menu-icon"></i>
                                    <span>Dashboards</span>
                                </a>
                                <div class="collapse " id="sidebarDashboards">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.html">Analytics</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ecommerce-index.html">Ecommerce</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarDashboards-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarApplications" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarApplications">
                                    <i class="iconoir-view-grid menu-icon"></i>
                                    <span>Applications</span>
                                </a>
                                <div class="collapse " id="sidebarApplications">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarAnalytics">                                        
                                                <span>Analytics</span>
                                            </a>
                                            <div class="collapse " id="sidebarAnalytics">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                                    </li><!--end nav-item-->
                                                </ul><!--end nav-->
                                            </div>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarProjects">                                        
                                                <span>Projects</span>
                                            </a>
                                            <div class="collapse " id="sidebarProjects">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-clients.html">Clients</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-team.html">Team</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-project.html">Project</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-task.html">Task</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-kanban-board.html">Kanban Board</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-chat.html">Chat</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-users.html">Users</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="projects-create.html">Project Create</a>
                                                    </li><!--end nav-item--> 
                                                </ul><!--end nav-->
                                            </div>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="#sidebarEcommerce" data-bs-toggle="collapse" role="button"
                                                aria-expanded="false" aria-controls="sidebarEcommerce">                                        
                                                <span>Ecommerce</span>
                                            </a>
                                            <div class="collapse " id="sidebarEcommerce">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-products.html">Products</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-customers.html">Customers</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-customer-details.html">Customer Details</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-orders.html">Orders</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-order-details.html">Order Details</a>
                                                    </li><!--end nav-item-->
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="ecommerce-refunds.html">Refunds</a>
                                                    </li><!--end nav-item-->
                                                </ul><!--end nav-->
                                            </div>
                                        </li><!--end nav-item-->
                                 
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-chat.html">Chat</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-contact-list.html">Contact List</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-calendar.html">Calendar</a>
                                        </li><!--end nav-item-->  
                                        <li class="nav-item">
                                            <a class="nav-link" href="apps-invoice.html">Invoice</a>
                                        </li><!--end nav-item-->                                
                                    </ul><!--end nav-->
                                </div><!--end startbarApplications-->
                            </li><!--end nav-item-->
                            <li class="menu-label mt-2">
                                <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small>
                                <span>Components</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarElements" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarElements">
                                    <i class="iconoir-compact-disc menu-icon"></i>
                                    <span>UI Elements</span>
                                </a>
                                <div class="collapse " id="sidebarElements">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-alerts.html">Alerts</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-avatar.html">Avatar</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-buttons.html">Buttons</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-badges.html">Badges</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-cards.html">Cards</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-carousels.html">Carousels</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-dropdowns.html">Dropdowns</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-grids.html">Grids</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-images.html">Images</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-list.html">List</a>
                                        </li><!--end nav-item-->                                   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-modals.html">Modals</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navs.html">Navs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-navbar.html">Navbar</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-paginations.html">Paginations</a>
                                        </li><!--end nav-item-->   
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-popover-tooltips.html">Popover & Tooltips</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-progress.html">Progress</a>
                                        </li><!--end nav-item-->                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-spinners.html">Spinners</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        </li><!--end nav-item-->                               
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-typography.html">Typography</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="ui-videos.html">Videos</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end startbarElements-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAdvancedUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAdvancedUI">
                                    <i class="iconoir-peace-hand menu-icon"></i>
                                    <span>Advanced UI</span><span class="badge rounded text-success bg-success-subtle ms-1">New</span>
                                </a>
                                <div class="collapse " id="sidebarAdvancedUI">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-animation.html">Animation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-clipboard.html">Clip Board</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-dragula.html">Dragula</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-files.html">File Manager</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-highlight.html">Highlight</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-rangeslider.html">Range Slider</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ratings.html">Ratings</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-ribbons.html">Ribbons</a>
                                        </li><!--end nav-item-->                                  
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-sweetalerts.html">Sweet Alerts</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="advanced-toasts.html">Toasts</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarAdvancedUI-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="iconoir-journal-page menu-icon"></i>
                                    <span>Forms</span>
                                </a>
                                <div class="collapse " id="sidebarForms">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-elements.html">Basic Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-advanced.html">Advance Elements</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-validation.html">Validation</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-wizard.html">Wizard</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-editors.html">Editors</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-uploads.html">File Upload</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="forms-img-crop.html">Image Crop</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarForms-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCharts">
                                    <i class="iconoir-candlestick-chart menu-icon"></i>
                                    <span>Charts</span>
                                </a>
                                <div class="collapse " id="sidebarCharts">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-apex.html">Apex</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-justgage.html">JustGage</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-chartjs.html">Chartjs</a>
                                        </li><!--end nav-item--> 
                                        <li class="nav-item">
                                            <a class="nav-link" href="charts-toast-ui.html">Toast</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end startbarCharts-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="iconoir-table-rows menu-icon"></i>
                                    <span>Tables</span>
                                </a>
                                <div class="collapse " id="sidebarTables">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-basic.html">Basic</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-datatable.html">Datatables</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-editable.html">Editable</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end startbarTables-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="iconoir-trophy menu-icon"></i>
                                    <span>Icons</span>
                                </a>
                                <div class="collapse " id="sidebarIcons">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-fontawesome.html">Font Awesome</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-lineawesome.html">Line Awesome</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-icofont.html">Icofont</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="icons-iconoir.html">Iconoir</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarIcons-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="iconoir-navigator-alt menu-icon"></i>
                                    <span>Maps</span>
                                </a>
                                <div class="collapse " id="sidebarMaps">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-google.html">Google Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-leaflet.html">Leaflet Maps</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="maps-vector.html">Vector Maps</a>
                                        </li><!--end nav-item--> 
                                    </ul><!--end nav-->
                                </div><!--end startbarMaps-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarEmailTemplates" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarEmailTemplates">
                                    <i class="iconoir-send-mail menu-icon"></i>
                                    <span>Email Templates</span>
                                </a>
                                <div class="collapse " id="sidebarEmailTemplates">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-basic.html">Basic Action Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-alert.html">Alert Email</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="email-templates-billing.html">Billing Email</a>
                                        </li><!--end nav-item-->  
                                    </ul><!--end nav-->
                                </div><!--end startbarEmailTemplates-->
                            </li><!--end nav-item-->
                            <li class="menu-label mt-2">
                                <small class="label-border">
                                    <div class="border_left hidden-xs"></div>
                                    <div class="border_right"></div>
                                </small>
                                <span>Crafted</span>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarPages" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="iconoir-page-star menu-icon"></i>
                                    <span>Pages</span>
                                </a>
                                <div class="collapse " id="sidebarPages">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-profile.html">Profile</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-notifications.html">Notifications</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-timeline.html">Timeline</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-treeview.html">Treeview</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-starter.html">Starter Page</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-pricing.html">Pricing</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-blogs.html">Blogs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-faq.html">FAQs</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages-gallery.html">Gallery</a>
                                        </li><!--end nav-item-->  
                                    </ul><!--end nav-->
                                </div><!--end startbarPages-->
                            </li><!--end nav-item-->
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAuthentication" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAuthentication">
                                    <i class="iconoir-fingerprint-lock-circle menu-icon"></i>
                                    <span>Authentication</span>
                                </a>
                                <div class="collapse " id="sidebarAuthentication">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-login.html">Log in</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-register.html">Register</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-recover-pw.html">Re-Password</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-lock-screen.html">Lock Screen</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-maintenance.html">Maintenance</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-404.html">Error 404</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="auth-500.html">Error 500</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end startbarAuthentication-->
                            </li><!--end nav-item-->
                        </ul><!--end navbar-nav--->
                        <div class="update-msg text-center"> 
                            <div class="d-flex justify-content-center align-items-center thumb-lg update-icon-box  rounded-circle mx-auto">
                                <i class="iconoir-peace-hand h3 align-self-center mb-0 text-primary"></i>
                            </div>                   
                            <h5 class="mt-3">Mannat Themes</h5>
                            <p class="mb-3 text-muted">Rizz is a high quality web applications.</p>
                            <a href="javascript: void(0);" class="btn text-primary shadow-sm rounded-pill">Upgrade your plan</a>
                        </div>
                    </div>
                </div><!--end startbar-collapse-->
            </div><!--end startbar-menu-->    
        </div><!--end startbar-->
        <div class="startbar-overlay d-print-none"></div>
        <!-- end leftbar-tab-menu-->


        <div class="page-wrapper">

            <!-- Page Content-->
            <div class="page-content">
                <div class="container-xxl">
                    
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Tabs</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab" aria-selected="true">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a>
                                        </li>                                                
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>
    
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3 active" id="home" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                            </p>
                                        </div>
                                        <div class="tab-pane p-3" id="profile" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Food truck fixie locavore, accusamus mcsweeney's
                                                single-origin coffee squid. 
                                            </p>
                                        </div>                                                
                                        <div class="tab-pane p-3" id="settings" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                            </p>
                                        </div>
                                    </div>              
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Pills</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                     <!-- Nav tabs -->
                                <ul class="nav nav-pills nav-justified" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home-1" role="tab" aria-selected="true">Home</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#profile-1" role="tab" aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                        <a class="nav-link" data-bs-toggle="tab" href="#settings-1" role="tab" aria-selected="false">Settings</a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane p-3 active" id="home-1" role="tabpanel">
                                        <p class="text-muted mb-0">
                                            Raw denim you probably haven't heard of them jean shorts Austin.
                                        </p>
                                    </div>
                                    <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                                        <p class="text-muted mb-0">
                                            Food truck fixie locavore, accusamus mcsweeney's
                                            single-origin coffee squid. 
                                        </p>
                                    </div>
                                    <div class="tab-pane p-3" id="settings-1" role="tabpanel">
                                        <p class="text-muted mb-0">
                                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                        </p>
                                    </div>
                                </div>    
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                       
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Vertical Pills</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link waves-effect waves-light active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
                                                <a class="nav-link waves-effect waves-light" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                                                <a class="nav-link waves-effect waves-light" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-sm-9">
                                            <div class="tab-content mo-mt-2" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <p class="text-muted mb-0">
                                                        Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                                        art party before they sold out master cleanse gluten-free squid
                                                        scenester freegan cosby sweater. 
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <p class="text-muted mb-0">
                                                        Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin
                                                        coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next
                                                        level wes anderson.
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <p class="text-muted mb-0">Exercitation commodo enim craft beer mlkshk +1 labore velit, blog sartorial PBR leggings next
                                                        level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                                        booth letterpress. 
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->          
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Custom Tabs</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                     <!-- Nav tabs -->
                                    <div class="nav-tabs-custom text-center">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link text-center active" data-bs-toggle="tab" href="#cu_home" role="tab"><i class="la la-home d-block"></i>Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link text-center" data-bs-toggle="tab" href="#cu_profile" role="tab"><i class="la la-calendar d-block"></i>Events</a>
                                            </li>                                                
                                            <li class="nav-item">
                                                <a class="nav-link text-center" data-bs-toggle="tab" href="#cu_settings" role="tab"><i class="la la-cog d-block"></i>Setings</a>
                                            </li>
                                        </ul>
                                    </div>
                                    

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active p-3" id="cu_home" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Raw denim you probably haven't heard of them jean shorts Austin.
                                            </p>
                                        </div>
                                        <div class="tab-pane p-3" id="cu_profile" role="tabpanel">
                                            <p class="mb-0 text-muted">
                                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla.
                                            </p>
                                        </div>                                                
                                        <div class="tab-pane p-3" id="cu_settings" role="tabpanel">
                                            <p class="text-muted mb-0">
                                                Trust fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                            </p>
                                        </div>
                                    </div> <!--end tab-content-->          
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                       
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Collapse</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">    
                                    <p class="">
                                        <a class="btn btn-primary mb-2 mb-lg-0" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                            Link with href
                                        </a>
                                        <button class="btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                                            Button with data-target
                                        </button>
                                    </p>
                                    <div class="collapse show " id="collapseExample">
                                        <div class="mb-0 card-body border-dashed border-theme-color rounded">
                                            <p class="mb-0 text-muted">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p> 
                                        </div>
                                    </div>                                    
                                          
                                </div><!--end card-body--> 
                            </div><!--end card-->
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Flush Examplee</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">    
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="flush-headingOne">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h5>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="flush-headingTwo">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h5>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="flush-headingThree">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h5>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                    tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                                                    lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                            
                        </div> <!--end col-->                                                       
                    </div><!--end row-->     
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Accordion Example</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="headingOne">
                                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h5>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                                                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="headingTwo">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h5>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                                                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header m-0" id="headingThree">
                                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h5>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as
                                                    well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div><!--end card-body--> 
                            </div><!--end card-->  
                        </div> <!--end col--> 
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Always open</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                              Accordion Item #1
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                            <div class="accordion-body">
                                              <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                              Accordion Item #2
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                              <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                          </div>
                                        </div>
                                        <div class="accordion-item">
                                          <h2 class="accordion-header">
                                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                              Accordion Item #3
                                            </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                              <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                            </div>
                                          </div>
                                        </div>
                                      </div>        
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                                       
                    </div><!--end row-->               
                </div><!-- container -->
                <!--Start Rightbar-->
                <!--Start Rightbar/offcanvas-->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
                    <div class="offcanvas-header border-bottom justify-content-between">
                      <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
                      <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">  
                        <h6>Account Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch1">
                                <label class="form-check-label" for="settings-switch1">Auto updates</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                                <label class="form-check-label" for="settings-switch2">Location Permission</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch3">
                                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->
                        <h6>General Settings</h6>
                        <div class="p-2 text-start mt-3">
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch4">
                                <label class="form-check-label" for="settings-switch4">Show me Online</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch mb-2">
                                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
                            </div><!--end form-switch-->
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="settings-switch6">
                                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
                            </div><!--end form-switch-->
                        </div><!--end /div-->               
                    </div><!--end offcanvas-body-->
                </div>
                <!--end Rightbar/offcanvas-->
                <!--end Rightbar-->
                <!--Start Footer-->
                
                <footer class="footer text-center text-sm-start d-print-none">
                    <div class="container-xxl">
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-0 rounded-bottom-0">
                                    <div class="card-body">
                                        <p class="text-muted mb-0">
                                            ©
                                            <script> document.write(new Date().getFullYear()) </script>
                                            Rizz
                                            <span
                                                class="text-muted d-none d-sm-inline-block float-end">
                                                Crafted with
                                                <i class="iconoir-heart text-danger"></i>
                                                by Mannatthemes</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->  
        <!-- vendor js -->
        
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>

        <script src="assets/js/app.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/ui-tabs-accordions.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2024 15:07:00 GMT -->
</html>