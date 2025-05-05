<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | Students Management - </title>
    <meta name="" name="description" />
    <meta content="" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Vendor css -->
    <link href="{{asset('/')}}admin/assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config Js -->
    <script src="{{asset('/')}}admin/assets/js/config.js"></script>
</head>

<body>
<!-- Begin page -->
<div class="wrapper">

    <!-- Menu -->
    <!-- Sidenav Menu Start -->
    <div class="sidenav-menu">

        <!-- Brand Logo -->


        <!-- Full Sidebar Menu Close Button -->
        <button class="button-close-fullsidebar">
            <i class="ri-close-line align-middle"></i>
        </button>

        <div data-simplebar>

            <!--- Sidenav Menu -->
            <ul class="side-nav">


                <li class="side-nav-item">
                    <a href="{{route('dashboard')}}" class="side-nav-link">
                        <span class="menu-icon"><i data-lucide="airplay"></i></span>
                        <span class="menu-text"> Dashboard </span>

                    </a>
                </li>

                <li class="side-nav-title">Apps</li>

                <li class="side-nav-item">
                    <a href="{{route('student.create')}}" class="side-nav-link">
                        <span class="menu-icon"><i data-lucide="calendar"></i></span>
                        <span class="menu-text"> Add Student </span>
                    </a>
                </li>


                <li class="side-nav-item">
                    <a href="{{route('student.list')}}" class="side-nav-link">
                        <span class="menu-icon"><i data-lucide="mail"></i></span>
                        <span class="menu-text"> View All Student </span>
                    </a>
                </li>



            </ul>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Sidenav Menu End -->

    <!-- Topbar Start -->
    <header class="app-topbar">
        <div class="page-container topbar-menu">
            <div class="d-flex align-items-center gap-2">

                <!-- Brand Logo -->
                <a href="{{route('dashboard')}}" class="logo">
                        <span class="logo-light">
                            <h2 class="logo-lg text-light">SMS</h2>
                        </span>


                </a>

                <!-- Sidebar Menu Toggle Button -->
                <button class="sidenav-toggle-button px-2">
                    <i class="ri-menu-2-line fs-24"></i>
                </button>

                <!-- Horizontal Menu Toggle Button -->
                <button class="topnav-toggle-button px-2" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                    <i class="ri-menu-2-line fs-24"></i>
                </button>

                <!-- Search for small devices -->
                <div class="topbar-item d-flex d-xl-none">
                    <button class="topbar-link" data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                        <i class="ri-search-line fs-22"></i>
                    </button>
                </div>

                <!-- Button Trigger Search Modal -->
                <div class="topbar-search d-none d-xl-flex gap-2 me-2 align-items-center" data-bs-toggle="modal"
                     data-bs-target="#searchModal" type="button">
                    <i class="ri-search-line fs-18"></i>
                    <span class="me-2">Search something..</span>
                </div>
            </div>

            <div class="d-flex align-items-center gap-2">



                <!-- Language Dropdown -->
                <div class="topbar-item">
                    <div class="dropdown">
                        <button class="topbar-link" data-bs-toggle="dropdown" data-bs-offset="0,32" type="button"
                                aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('/')}}admin/assets/images/flags/us.svg" alt="user-image" class="w-100 rounded" height="18"
                                 id="selected-language-image">
                        </button>

                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="en">
                                <img src="{{asset('/')}}admin/assets/images/flags/us.svg" alt="user-image" class="me-1 rounded" height="18"
                                     data-translator-image> <span class="align-middle">English</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item" data-translator-lang="hi">
                                <img src="{{asset('/')}}admin/assets/images/flags/in.svg" alt="user-image" class="me-1 rounded" height="18"
                                     data-translator-image> <span class="align-middle">Hindi</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('/')}}admin/assets/images/flags/de.svg" alt="user-image" class="me-1 rounded" height="18">
                                <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('/')}}admin/assets/images/flags/it.svg" alt="user-image" class="me-1 rounded" height="18">
                                <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('/')}}admin/assets/images/flags/es.svg" alt="user-image" class="me-1 rounded" height="18">
                                <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <img src="{{asset('/')}}admin/assets/images/flags/ru.svg" alt="user-image" class="me-1 rounded" height="18">
                                <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </div>
                </div>

                <!-- Notification Dropdown -->
                <div class="topbar-item">
                    <div class="dropdown">
                        <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                data-bs-offset="0,25" type="button" data-bs-auto-close="outside" aria-haspopup="false"
                                aria-expanded="false">
                            <i data-lucide="bell" class="animate-ring fs-22"></i>
                            <span class="noti-icon-badge"></span>
                        </button>

                        <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg" style="min-height: 300px;">
                            <div class="p-2 border-bottom position-relative border-dashed">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                    </div>
                                    <div class="col-auto">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-arrow-none link-dark"
                                               data-bs-toggle="dropdown" data-bs-offset="0,15" aria-expanded="false">
                                                <i class="ri-settings-2-line fs-22 align-middle"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Mark as Read</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Delete All</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Do not Disturb</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Other Settings</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="position-relative rounded-0" style="max-height: 300px;" data-simplebar>
                                <!-- item-->
                                <div class="dropdown-item notification-item py-2 text-wrap active" id="notification-1">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="{{asset('/')}}admin/assets/images/users/avatar-2.jpg" class="avatar-lg rounded-circle"
                                                     alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Glady Haid</span> commented on <span
                                                    class="fw-medium text-body">Abstack admin status</span>
                                                <br />
                                                <span class="fs-12">25m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-1">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                </div>

                                <!-- item-->
                                <div class="dropdown-item notification-item py-2 text-wrap" id="notification-2">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="{{asset('/')}}admin/assets/images/users/avatar-4.jpg" class="avatar-lg rounded-circle"
                                                     alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Tommy Berry</span> donated <span
                                                    class="text-success">$100.00</span> for <span
                                                    class="fw-medium text-body">Carbon removal program</span>
                                                <br />
                                                <span class="fs-12">58m ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-2">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                </div>

                                <!-- item-->
                                <div class="dropdown-item notification-item py-2 text-wrap" id="notification-3">
                                        <span class="d-flex align-items-center">
                                            <div class="avatar-lg flex-shrink-0 me-3">
                                                <span class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                                    <iconify-icon icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                            <span class="flex-grow-1 text-muted">
                                                You withdraw a <span class="fw-medium text-body">$500</span> by <span
                                                    class="fw-medium text-body">New York ATM</span>
                                                <br />
                                                <span class="fs-12">2h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-3">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                </div>

                                <!-- item-->
                                <div class="dropdown-item notification-item py-2 text-wrap" id="notification-4">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="{{asset('/')}}admin/assets/images/users/avatar-7.jpg" class="avatar-lg rounded-circle"
                                                     alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Richard Allen</span> followed you in <span
                                                    class="fw-medium text-body">Facebook</span>
                                                <br />
                                                <span class="fs-12">3h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-4">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                </div>

                                <!-- item-->
                                <div class="dropdown-item notification-item py-2 text-wrap" id="notification-5">
                                        <span class="d-flex align-items-center">
                                            <span class="me-3 position-relative flex-shrink-0">
                                                <img src="{{asset('/')}}admin/assets/images/users/avatar-10.jpg" class="avatar-lg rounded-circle"
                                                     alt="" />
                                            </span>
                                            <span class="flex-grow-1 text-muted">
                                                <span class="fw-medium text-body">Victor Collier</span> liked you recent photo
                                                in <span class="fw-medium text-body">Instagram</span>
                                                <br />
                                                <span class="fs-12">10h ago</span>
                                            </span>
                                            <span class="notification-item-close">
                                                <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-5">
                                                    <i class="ri-close-line fs-16"></i>
                                                </button>
                                            </span>
                                        </span>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                               class="dropdown-item position-absolute bottom-0 notification-item text-center text-reset text-decoration-underline fw-bold notify-item border-top border-light py-2">
                                View All
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Apps Dropdown -->
                <div class="topbar-item d-none d-sm-flex">
                    <div class="dropdown">
                        <button class="topbar-link dropdown-toggle drop-arrow-none" data-bs-toggle="dropdown"
                                data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                            <i data-lucide="layout-grid" class="fs-22"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-0">
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/slack.svg" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/gitlab.svg" alt="Github">
                                            <span>Gitlab</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/dribbble.svg" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/bitbucket.svg" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/dropbox.svg" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/google-cloud.svg" alt="G Suite">
                                            <span>G Cloud</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/aws.svg" alt="bitbucket">
                                            <span>AWS</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/digital-ocean.svg" alt="dropbox">
                                            <span>Server</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset('/')}}admin/assets/images/brands/bootstrap.svg" alt="G Suite">
                                            <span>Bootstrap</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button Trigger Customizer Offcanvas -->
                <div class="topbar-item d-none d-sm-flex">
                    <button class="topbar-link" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas"
                            type="button">
                        <i data-lucide="settings" class="fs-22"></i>
                    </button>
                </div>

                <!-- Light/Dark Mode Button -->
                <div class="topbar-item d-none d-sm-flex">
                    <button class="topbar-link" id="light-dark-mode" type="button">
                        <i data-lucide="moon" class="light-mode-icon fs-22"></i>
                        <i data-lucide="sun" class="dark-mode-icon fs-22"></i>
                    </button>
                </div>

                <!-- User Dropdown -->
                <div class="topbar-item nav-user">
                    <div class="dropdown">
                        <a class="topbar-link dropdown-toggle drop-arrow-none px-2" data-bs-toggle="dropdown"
                           data-bs-offset="0,25" type="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('/')}}admin/assets/images/users/avatar-3.jpg" width="32" class="rounded-circle me-lg-2 d-flex"
                                 alt="user-image">
                            <span class="d-lg-flex flex-column gap-1 d-none">
                                    <span class="fw-semibold">{{Auth::user()->name}}</span>
                                </span>
                            <i class="ri-arrow-down-s-line d-none d-lg-block align-middle ms-2"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ri-account-circle-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">My Account</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ri-wallet-3-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">Wallet : <span class="fw-semibold">$89.25k</span></span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ri-settings-2-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ri-question-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">Support</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="ri-lock-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="#" class="dropdown-item fw-semibold text-danger" onclick="event.preventDefault(); document.getElementById('logoutForm').submit()">
                                <i class="ri-logout-box-line me-1 fs-16 align-middle"></i>
                                <span class="align-middle">Sign Out</span>
                            </a>


                            <form id="logoutForm" action="{{route('logout')}}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Topbar End -->

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content bg-transparent">
                <form>
                    <div class="card mb-1">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                            <i class="ri-search-line fs-22"></i>
                            <input type="search" class="form-control border-0" id="search-modal-input"
                                   placeholder="Search for actions, people,">
                            <button type="submit" class="btn p-0" data-bs-dismiss="modal" aria-label="Close">[esc]</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">

        @yield('body')

        <!-- Footer Start -->
        <footer class="footer">
            <div class="page-container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <script>document.write(new Date().getFullYear())</script> © Abstack - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</span>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
    <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
        <h5 class="flex-grow-1 mb-0">Theme Settings</h5>

        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body p-0 h-100" data-simplebar>
        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

            <div class="row">
                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-light"
                               value="light">
                        <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                               for="layout-color-light">
                            <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                </div>

                <div class="col-4">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-color-dark"
                               value="dark">
                        <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                               for="layout-color-dark">
                            <iconify-icon icon="solar:cloud-sun-2-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                </div>
            </div>
        </div>

        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

            <div class="row">
                <div class="col-3 darkMode">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-light"
                               value="light">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                </div>

                <div class="col-3">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-dark"
                               value="dark">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle"
                                          style="background-color: #313a46;"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                </div>

                <div class="col-3">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-brand"
                               value="brand">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-brand">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Brand</h5>
                </div>

                <div class="col-3">
                    <div class="form-check card-radio">
                        <input class="form-check-input" type="radio" name="data-topbar-color" id="topbar-color-gradient"
                               value="gradient">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-gradient">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle"
                                          style="background: linear-gradient(to top,#5d6dc3,#3c86d8);"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Gradient</h5>
                </div>
            </div>
        </div>

        <div class="p-3 border-bottom border-dashed">
            <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

            <div class="row">
                <div class="col-3 darkMode">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-light"
                               value="light">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                </div>

                <div class="col-3">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-dark"
                               value="dark">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle"
                                          style="background-color: #313a46;"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                </div>
                <div class="col-3">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-brand"
                               value="brand">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-brand">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-primary"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Brand</h5>
                </div>
                <div class="col-3">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-menu-color" id="sidenav-color-gradient"
                               value="gradient">
                        <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-gradient">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle"
                                          style="background: linear-gradient(to top,#5d6dc3,#3c86d8);"></span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Gradient</h5>
                </div>
            </div>
        </div>

        <div class="p-3 .border-bottom .border-dashed">
            <h5 class="mb-3 fs-16 fw-bold">Sidebar Size</h5>

            <div class="row">
                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-default"
                               value="default">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-compact"
                               value="compact">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-small"
                               value="condensed">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                               id="sidenav-size-small-hover" value="sm-hover">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                               id="sidenav-size-small-hover-active" value="sm-hover-active">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover-active">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column" style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Hover Active</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size" id="sidenav-size-full"
                               value="full">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                </div>

                <div class="col-4">
                    <div class="form-check sidebar-setting card-radio">
                        <input class="form-check-input" type="radio" name="data-sidenav-size"
                               id="sidenav-size-fullscreen" value="fullscreen">
                        <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                <span class="d-flex h-100">
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                        </label>
                    </div>
                    <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                </div>
            </div>
        </div>

        <div class="p-3 border-bottom border-dashed d-none">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                <div class="btn-group radio" role="group">
                    <input type="radio" class="btn-check" name="data-container-position" id="container-width-fixed"
                           value="fixed">
                    <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                    <input type="radio" class="btn-check" name="data-container-position" id="container-width-scrollable"
                           value="scrollable">
                    <label class="btn btn-sm btn-soft-primary w-sm ms-0" for="container-width-scrollable">Boxed</label>
                </div>
            </div>
        </div>

        <div class="p-3 border-bottom border-dashed d-none">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                <div class="btn-group radio" role="group">
                    <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed"
                           value="fixed">
                    <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                    <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable"
                           value="scrollable">
                    <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                           for="layout-position-scrollable">Scrollable</label>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center gap-2 px-3 py-2 offcanvas-header border-top border-dashed">
        <button type="button" class="btn w-50 btn-soft-danger" id="reset-layout">Reset</button>
        <a href="https://1.envato.market/coderthemes" target="_blank" class="btn w-50 btn-soft-info">Buy Now</a>
    </div>

</div>

<!-- Vendor js -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.js"></script>

<!-- Apex Chart js -->
<script src="{{asset('/')}}admin/assets/vendor/apexcharts/apexcharts.min.js"></script>

<!-- Projects Analytics Dashboard App js -->
<script src="{{asset('/')}}admin/assets/js/pages/dashboard.js"></script>

</body>


</html>
