<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="light" data-bs-theme="light">

    
<!-- Mirrored from mannatthemes.com/rizz/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2024 15:06:43 GMT -->
<head>
        

        

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">

       
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet" type="text/css" />
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                            <div class="d-flex align-items-center flex-row flex-wrap">
                                                <div class="position-relative me-3">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" height="120" class="rounded-circle">
                                                    <a href="#" class="thumb-md justify-content-center d-flex align-items-center bg-primary text-white rounded-circle position-absolute end-0 bottom-0 border border-3 border-card-bg">
                                                        <i class="fas fa-camera"></i>
                                                    </a>
                                                </div>
                                                <div class="">
                                                    <h5 class="fw-semibold fs-22 mb-1">Rosa Dodson</h5>                                                        
                                                    <p class="mb-0 text-muted fw-medium">UI/UX Designer, USA</p>                                                        
                                                </div>
                                            </div>                                                
                                        </div><!--end col-->
                                        
                                        <div class="col-lg-4 ms-auto align-self-center">
                                            <div class="d-flex justify-content-center">
                                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                    <h5 class="fw-semibold fs-22 mb-1">75</h5>
                                                    <p class="text-muted mb-0 fw-medium">Projects</p>
                                                </div>
                                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                    <h5 class="fw-semibold fs-22 mb-1">68%</h5>
                                                    <p class="text-muted mb-0 fw-medium">Success Rate</p>
                                                </div>
                                                <div class="border-dashed rounded border-theme-color p-2 me-2 flex-grow-1 flex-basis-0">
                                                    <h5 class="fw-semibold fs-22 mb-1">$8620</h5>
                                                    <p class="text-muted mb-0 fw-medium">Earning</p>
                                                </div>
                                            </div>                                          
                                        </div><!--end col-->
                                        <div class="col-lg-4 align-self-center">
                                            <div class="row row-cols-2">
                                                <div class="col text-end">
                                                    <div id="complete" class="apex-charts"></div>
                                                </div>  
                                                <div class="col align-self-center">
                                                    <button type="button" class="btn btn-primary  d-inline-block">Follow</button> 
                                                    <button type="button" class="btn btn-light  d-inline-block">Hire Me</button>  
                                                </div>
                                            </div>                                   
                                        </div><!--end col-->
                                    </div><!--end row-->               
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->                                  
                    </div><!--end row-->

                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Personal Information</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto">                      
                                            <a href="#" class="float-end text-muted d-inline-flex text-decoration-underline"><i class="iconoir-edit-pencil fs-18 me-1"></i>Edit</a>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <p class="text-muted fw-medium mb-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                    <div class="mb-3">
                                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Javascript</span>
                                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Python</span>
                                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Angular</span>
                                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Reactjs</span>
                                        <span class="badge bg-transparent border border-light text-gray-700 fs-12 fw-medium mb-1">Flutter</span>
                                    </div>
                                    <ul class="list-unstyled mb-0">                                        
                                        <li class=""><i class="las la-birthday-cake me-2 text-secondary fs-22 align-middle"></i> <b> Birth Date </b> : 06 June 1989</li>
                                        <li class="mt-2"><i class="las la-briefcase me-2 text-secondary fs-22 align-middle"></i> <b> Position </b> : Full Stack Developer</li>
                                        <li class="mt-2"><i class="las la-university me-2 text-secondary fs-22 align-middle"></i> <b> Education </b> : Stanford Univercity</li>
                                        <li class="mt-2"><i class="las la-language me-2 text-secondary fs-22 align-middle"></i> <b> Languages </b> : English, French, Spanish</li>
                                        <li class="mt-2"><i class="las la-phone me-2 text-secondary fs-22 align-middle"></i> <b> Phone </b> : +91 23456 78910</li>
                                        <li class="mt-2"><i class="las la-envelope text-secondary fs-22 align-middle me-2"></i> <b> Email </b> : mannat.theme@gmail.com</li>
                                    </ul> 
                                    <div class="row justify-content-center mt-4">
                                        <div class="col-auto text-end border-end">
                                            <span class="thumb-md justify-content-center d-flex align-items-center bg-blue text-white rounded-circle ms-auto mb-1">
                                                <i class="fab fa-facebook-f"></i>
                                            </span>
                                            <p class="mb-0 fw-semibold">Facebook</p>
                                            <h4 class="m-0 fw-bold">25k <span class="text-muted fs-12 fw-normal">Followers</span></h4>
                                        </div><!--end col-->
                                        <div class="col-auto">
                                            <span class="thumb-md justify-content-center d-flex align-items-center bg-black text-white rounded-circle mb-1">
                                                <i class="fab fa-x-twitter"></i>
                                            </span>
                                            <p class="mb-0 fw-semibold">Twitter</p>
                                            <h4 class="m-0 fw-bold">58k <span class="text-muted fs-12 fw-normal">Followers</span></h4>
                                        </div><!--end col-->
                                    </div><!--end row-->       
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col--> 
                        <div class="col-md-8">
                            <ul class="nav nav-tabs mb-3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link fw-medium active" data-bs-toggle="tab" href="#post" role="tab" aria-selected="true">Post</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" href="#gallery" role="tab" aria-selected="false">Gallery</a>
                                </li>                                                
                                <li class="nav-item">
                                    <a class="nav-link fw-medium" data-bs-toggle="tab" href="#settings" role="tab" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="post" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col">
                                                            <p class="text-dark mb-1 fw-semibold">Views</p>
                                                            <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                                            <p class="mb-0 text-truncate text-muted"><i class="iconoir-bell text-warning fs-18"></i>
                                                                <span class="text-dark fw-semibold">1500</span> New subscribers this week
                                                            </p>
                                                        </div>
                                                        <div class="col-auto align-self-center">
                                                            <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                                <i class="iconoir-eye fs-30 align-self-center text-muted"></i>
                                                            </div>                                                                    
                                                        </div>
                                                    </div> 
                                                </div><!--end card-body--> 
                                            </div><!--end card-->   
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col">
                                                            <p class="text-dark mb-1 fw-semibold">Comments</p>
                                                            <h3 class="my-2 fs-24 fw-bold">24k</h3>
                                                            <p class="mb-0 text-truncate text-muted"><i class="ti ti-thumb-up text-success fs-18"></i>
                                                                <span class="text-dark fw-semibold">854</span> New Like this week
                                                            </p>
                                                        </div>
                                                        <div class="col-auto align-self-center">
                                                            <div class="d-flex justify-content-center align-items-center thumb-xl bg-light rounded-circle mx-auto">
                                                                <i class="iconoir-chat-lines fs-30 align-self-center text-muted"></i>
                                                            </div>
                                                        </div>
                                                    </div>    
                                                </div><!--end card-body--> 
                                            </div><!--end card--> 
                                        </div><!--end col-->
                                    </div><!--end row--> 
                                    <div class="row">
                                        <div class="col-12">                                            
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <div class="d-flex align-items-center">
                                                                <img src="assets/images/users/avatar-10.jpg" class="thumb-md align-self-center rounded-circle" alt="...">
                                                                <div class="flex-grow-1 ms-2">
                                                                    <h5 class="m-0 fs-14">Anderson Vanhron</h5>
                                                                    <p class="text-muted mb-0 fs-12">online</p>
                                                                </div><!--end media-body-->
                                                            </div>                     
                                                        </div><!--end col-->
                                                        <div class="col-auto">                      
                                                            <div class="d-none d-sm-inline-block align-self-center">
                                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Call" data-bs-custom-class="tooltip-primary"><i class="iconoir-media-image fs-18"></i></a>
                                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Attachment" data-bs-custom-class="tooltip-primary"><i class="iconoir-attachment fs-18"></i></a>
                                                                <a href="#" class="me-2 text-muted" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" data-bs-custom-class="tooltip-primary"><i class="iconoir-calendar fs-18"></i></a>
                                                                
                                                                <div class="dropdown d-inline-block">
                                                                    <a class="dropdown-toggle arrow-none text-muted" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="true">
                                                                        <i class="iconoir-more-vert fs-18"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-end pb-0" >
                                                                        <a class="dropdown-item" href="#">Profile</a>
                                                                        <a class="dropdown-item" href="#">Add archive</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item text-danger" href="#">Block</a>
                                                                    </div>
                                                                </div>                                                       
                                                            </div>                  
                                                        </div><!--end col-->
                                                    </div>  <!--end row-->                                  
                                                </div><!--end card-header-->
                                                <div class="card-body pt-0">  
                                                    <form action="#">
                                                        <div class="">
                                                            <textarea class="form-control mb-2" id="post-1" rows="5" placeholder="Write here.."></textarea>
                                                            <button type="button" class="btn btn-primary">Post</button>
                                                        </div>
                                                    </form>
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->  
                                        <div class="col-12">                                            
                                            <div class="card">
                                                <div class="card-body">                                                                                          
                                                    <img src="assets/images/extra/card/post-1.jpg" alt="" class="img-fluid">
                                                    <div class="post-title mt-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="badge bg-primary-subtle text-primary">Natural</span>
                                                            </div><!--end col-->
                                                            <div class="col-auto">
                                                                <span class="text-muted"><i class="far fa-calendar me-1"></i>02 July 2024</span>
                                                            </div><!--end col-->
                                                        </div><!--end row-->
                                                       
                                                        <h5 href="#" class="fs-20 fw-bold d-block my-3">There is nothing more beautiful than nature.</h5>
                                                        <span class="fs-15 bg-light py-2 px-3 rounded">Taking pictures is savouring life intensely.</span>
                                                        <p class="fs-15 mt-3">It is a long established fact that a reader will be distracted by the readable content of 
                                                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                            more-or-less normal distribution of letters, as opposed to using 
                                                            'Content here, content here', making it look like readable English. 
                                                            Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                            as their default model text, and a search for 'lorem ipsum' will uncover many
                                                             web sites still in their infancy. 

                                                        </p>
                                                        <blockquote class="blockquote border-start ps-4">
                                                            <p class="fs-18"><i>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</i></p>
                                                            <footer class="blockquote-footer mt-1">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                        </blockquote>
                                                        <p class="fs-15">Taking pictures is savouring life intensely, every hundredth of a second – Marc Riboud.
                                                            Joy in looking and comprehending is nature’s most beautiful gift.</p>
                                                        <p class="fs-15 mb-0">It is a long established fact that a reader will be distracted by the readable content of 
                                                            a page when looking at its layout. The point of using Lorem Ipsum is that it has a 
                                                            more-or-less normal distribution of letters, as opposed to using 
                                                            'Content here, content here', making it look like readable English. 
                                                            Many desktop publishing packages and web page editors now use Lorem Ipsum 
                                                            as their default model text, and a search for 'lorem ipsum' will uncover many
                                                             web sites still in their infancy. 

                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row mb-3">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-0">Artical tags</p>
                                                        </div>
                                                    </div>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Music</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Animals</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Natural</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Food</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Fashion</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Helth</span>
                                                    <span class="badge bg-light text-dark px-3 py-2 fw-semibold">Charity</span>
                                                </div>
                                            </div>   
                                            <div class="card">
                                                <div class="card-body pb-0">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-0">Comments (205)</p>
                                                        </div><!--end col-->
                                                    </div><!--end row-->    
                                                </div><!--end card-body-->  
                                                <div class="card-body border-bottom-dashed"> 
                                                    <ul class="list-unstyled mb-0">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="thumb-md rounded-circle">
                                                                </div><!--end col-->
                                                                <div class="col">
                                                                    <div class="bg-light rounded ms-n2 bg-light-alt p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p class="text-dark fw-semibold mb-2">Martin Luther</p>
                                                                            </div><!--end col-->
                                                                            <div class="col-auto">
                                                                                <span class="text-muted"><i class="far fa-clock me-1"></i>30 min ago</span>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->                                                                
                                                                        <p>It is a long established fact that a reader will be distracted by the 
                                                                            readable content of a page when looking at its layout. The point of 
                                                                            using Lorem Ipsum is that it has a more-or-less normal distribution of letters, 
                                                                            as opposed to using 'Content here, content here', making it look like readable English.
                                                                        </p>
                                                                        <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                            <ul class="list-unstyled ms-5">
                                                                <li>
                                                                    <div class="row mt-3">
                                                                        <div class="col-auto">
                                                                            <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                        </div><!--end col-->
                                                                        <div class="col">
                                                                            <div class="bg-light rounded ms-n2 bg-light-alt p-3">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p class="text-dark fw-semibold mb-2">Metrica Author</p>
                                                                                    </div><!--end col-->
                                                                                    <div class="col-auto">
                                                                                        <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                    </div><!--end col-->
                                                                                </div><!--end row-->                                                                
                                                                                <p>It is a long established fact that a reader will be distracted by the 
                                                                                    readable content of a page when looking at its layout. 
                                                                                </p>
                                                                                <p class="mb-0">Thank you</p>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mt-3">
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="thumb-md rounded-circle">
                                                                </div><!--end col-->
                                                                <div class="col">
                                                                    <div class="bg-light rounded ms-n2 bg-light-alt p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p class="text-dark fw-semibold mb-2">Joseph Rust</p>
                                                                            </div><!--end col-->
                                                                            <div class="col-auto">
                                                                                <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->                                                                
                                                                        <p>Is it a long established fact that a reader will be distracted by the 
                                                                            readable content of a page when looking at its layout?
                                                                        </p>
                                                                        <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row--> 
                                                        </li>
                                                        <li class="mt-3">
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="thumb-md rounded-circle">
                                                                </div><!--end col-->
                                                                <div class="col">
                                                                    <div class="bg-light rounded ms-n2 bg-light-alt p-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <p class="text-dark fw-semibold mb-2">Matt Rosales</p>
                                                                            </div><!--end col-->
                                                                            <div class="col-auto">
                                                                                <span class="text-muted"><i class="far fa-clock me-1"></i>40 min ago</span>
                                                                            </div><!--end col-->
                                                                        </div><!--end row-->                                                                
                                                                        <p>Is it a long established fact that a reader will be distracted by the 
                                                                            readable content of a page when looking at its layout?
                                                                        </p>
                                                                        <a href="#" class="text-primary"><i class="fas fa-reply me-1"></i>Replay</a>
                                                                    </div>
                                                                </div><!--end col-->
                                                            </div><!--end row-->
                                                            <ul class="list-unstyled ms-5">
                                                                <li>
                                                                    <div class="row mt-3">
                                                                        <div class="col-auto">
                                                                            <img src="assets/images/logo-sm.png" alt="" class="thumb-md rounded-circle">
                                                                        </div><!--end col-->
                                                                        <div class="col">
                                                                            <div class="bg-light rounded ms-n2 bg-light-alt p-3">
                                                                                <div class="row">
                                                                                    <div class="col">
                                                                                        <p class="text-dark fw-semibold mb-2">Metrica Author</p>
                                                                                    </div><!--end col-->
                                                                                    <div class="col-auto">
                                                                                        <span class="text-muted"><i class="far fa-clock me-1"></i>37 min ago</span>
                                                                                    </div><!--end col-->
                                                                                </div><!--end row-->                                                                
                                                                                <p>It is a long established fact that a reader will be distracted by the 
                                                                                    readable content of a page when looking at its layout. 
                                                                                </p>
                                                                                <p class="mb-0">Thank you</p>
                                                                            </div>
                                                                        </div><!--end col-->
                                                                    </div><!--end row-->
                                                                </li>
                                                            </ul> 
                                                        </li>
                                                    </ul> 
                                                </div><!--end card-body--> 
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col">
                                                            <p class="text-dark fw-semibold mb-0">Leave a comment</p>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </div><!--end card-body--> 
                                                <div class="card-body pt-0">
                                                    <form>
                                                        <div class="form-group mb-3">
                                                            <textarea class="form-control" rows="5" id="leave_comment" placeholder="Message"></textarea>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12 text-end">
                                                                <button type="submit" class="btn btn-primary px-4">Send Message</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!--end card-body-->             
                                            </div> <!--end card-->  
                                        </div><!--end col-->                                                
                                    </div><!--end row-->
                                </div>
                                <div class="tab-pane p-3" id="gallery" role="tabpanel">
                                    <div id="grid" class="row g-0">
                                        <div class="col-md-6 col-lg-4 picture-item">
                                            <a href="assets/images/extra/card/img-1.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-1.jpg" alt="" class="img-fluid" />
                                            </a>  
                                        </div>
                                        <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                                            <a href="assets/images/extra/card/img-2.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-2.jpg" alt="" class="img-fluid" />
                                            </a> 
                                        </div>
                                        <div class="col-md-6 col-lg-4 picture-item">
                                            <a href="assets/images/extra/card/img-3.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-3.jpg" alt="" class="img-fluid" />
                                            </a> 
                                        </div>
                                        <div class="col-md-6 col-lg-4 picture-item picture-item--h2">
                                            <a href="assets/images/extra/card/img-4.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-4.jpg" alt="" class="img-fluid" />
                                            </a> 
                                        </div>
                                        <div class="col-md-6 col-lg-4 picture-item">
                                            <a href="assets/images/extra/card/img-5.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-5.jpg" alt="" class="img-fluid" />
                                            </a> 
                                        </div>
                                        <div class="col-md-6 col-lg-4 picture-item picture-item--overlay">
                                            <a href="assets/images/extra/card/img-6.jpg" class="lightbox">
                                                <img src="assets/images/extra/card/img-6.jpg" alt="" class="img-fluid" />
                                            </a> 
                                        </div>                 
                                    </div> 
                                </div>                                                
                                <div class="tab-pane p-3" id="settings" role="tabpanel">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row align-items-center">
                                                <div class="col">                      
                                                    <h4 class="card-title">Personal Information</h4>                      
                                                </div><!--end col-->                                                       
                                            </div>  <!--end row-->                                  
                                        </div><!--end card-header-->
                                        <div class="card-body pt-0">                       
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">First Name</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="text" value="Rosa">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Last Name</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="text" value="Dodson">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Company Name</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="text" value="MannatThemes">
                                                    <span class="form-text text-muted font-12">We'll never share your email with anyone else.</span>
                                                </div>
                                            </div>
                
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Contact Phone</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="las la-phone"></i></span>
                                                        <input type="text" class="form-control" value="+123456789" placeholder="Phone" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Email Address</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="las la-at"></i></span>
                                                        <input type="text" class="form-control" value="rosa.dodson@demo.com" placeholder="Email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Website Link</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <div class="input-group">
                                                        <span class="input-group-text"><i class="la la-globe"></i></span>
                                                        <input type="text" class="form-control" value=" https://mannatthemes.com/" placeholder="Email" aria-describedby="basic-addon1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">USA</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <select class="form-select">
                                                        <option>London</option>
                                                        <option>India</option>
                                                        <option>USA</option>
                                                        <option>Canada</option>
                                                        <option>Thailand</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>                                                    
                                        </div><!--end card-body-->                                            
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Change Password</h4>
                                        </div><!--end card-header-->
                                        <div class="card-body pt-0"> 
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Current Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="Password">
                                                    <a href="#" class="text-primary font-12">Forgot password ?</a>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">New Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="New Password">
                                                </div>
                                            </div>
                                            <div class="form-group mb-3 row">
                                                <label class="col-xl-3 col-lg-3 text-end mb-lg-0 align-self-center form-label">Confirm Password</label>
                                                <div class="col-lg-9 col-xl-8">
                                                    <input class="form-control" type="password" placeholder="Re-Password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-9 col-xl-8 offset-lg-3">
                                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                                    <button type="button" class="btn btn-danger">Cancel</button>
                                                </div>
                                            </div>   
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Other Settings</h4>
                                        </div><!--end card-header-->
                                        <div class="card-body pt-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="Email_Notifications" checked>
                                                <label class="form-check-label" for="Email_Notifications">
                                                    Email Notifications
                                                </label>
                                                <span class="form-text text-muted fs-12 mt-0">Do you need them?</span>
                                              </div>
                                              <div class="form-check mt-2">
                                                <input class="form-check-input" type="checkbox" value="" id="API_Access">
                                                <label class="form-check-label" for="API_Access">
                                                    API Access
                                                </label>
                                                <span class="form-text text-muted font-12 mt-0">Enable/Disable access</span>
                                            </div>
                                        </div><!--end card-body-->
                                    </div><!--end card-->
                                </div>
                            </div> 
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
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/js/pages/profile.init.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
    <!--end body-->

<!-- Mirrored from mannatthemes.com/rizz/default/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Nov 2024 15:06:46 GMT -->
</html>