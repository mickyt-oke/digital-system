<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
  <head>
    <meta charset="UTF-8">
	<meta name="description" content="Nigeria Immigration Service Digital Clearance System">
    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

    <title>NIS Digital Clearance System</title>
    <!-- up to 10% speed up for external res -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <!-- preloading icon font is helping to speed up a little bit -->
    <link rel="preload" href="public/assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="public/assets/css/core.min.css">
    <link rel="stylesheet" href="public/assets/css/vendor_bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="public/assets/images/logo/favicon.ico">


  </head>

<body class="layout-admin aside-sticky bg-lime header-sticky" data-s2t-class="btn-primary btn-sm bg-gradient-primary rounded-circle border-0">

    <div id="wrapper" class="d-flex align-items-stretch flex-column">


      <!--  header -->
      <header id="header" class="d-flex align-items-center shadow-xs">

        <!-- Navbar -->
        <div class="container-fluid position-relative">

          <nav class="navbar navbar-expand-lg navbar-light justify-content-between">

            <!-- logo, navigation toggler -->
            <div class="align-items-start">
              
              <!-- sidebar toggler -->
              <a href="#aside-main" class="btn-sidebar-toggle h-100 d-inline-block d-lg-none justify-content-center align-items-center p-2">
                <span>
                  <svg width="25" height="25" viewBox="0 0 20 20">
                    <path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
                    <path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
                    <path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
                    <path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
                  </svg>
                </span>
              </a>

              <!-- logo : mobile only -->
              <a class="navbar-brand d-inline-block d-lg-none mx-2" href="#">
                <img src="public/assets/images/logo/nis-logo.png" width="38" height="38" alt="...">
              </a>

            </div>

            <!-- navbar : navigation -->
            <div class="collapse navbar-collapse" id="navbarMainNav">

              <!-- navbar : mobile menu -->
              <div class="navbar-xs d-none">

                <!-- close button -->
                <button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                  <svg width="20" viewBox="0 0 20 20">
                    <path d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z"></path>
                  </svg>
                </button>

                <!-- logo -->
                <a class="navbar-brand" href="#">
                  <img src="public/assets/images/logo/nis-logo.jpg" width="110" height="38" alt="...">
                </a>

              </div>
              <!-- /navbar : mobile menu -->


              <!-- Dropdowns -->
              <ul class="navbar-nav align-items-center">

                <!-- Features -->
                <li class="nav-item ">

                  <a class="nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="mainNavPages">
                    Welcome, User
                  </a>
                </li>
              </ul>
            </div>

            <!-- options -->
            <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">
              <!-- account -->
              <li class="list-inline-item mx-1 dropdown">

                <!-- has avatar
                <a href="#" id="dropdownAccountOptions" class="btn btn-sm btn-icon btn-light dropdown-toggle rounded-circle shadow bg-cover" style="background-image:url()" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false" aria-haspopup="true" aria-label="Account options"></a>
                  -->
                <!-- no avatar -->
                
                <a href="#" id="dropdownAccountOptions" class="btn btn-sm btn-icon btn-default dropdown-toggle rounded-circle" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                  <span>
                      <div class="avatar bg-dark-soft text-dark">
                          <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">  
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>  
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
                            </svg>
                      </div>
                    </span>
                </a>
                

                <div aria-labelledby="dropdownAccountOptions" class="dropdown-menu dropdown-menu-clean dropdown-menu-navbar-autopos dropdown-menu-invert dropdown-fadeindown p-0 mt-2 w-300">
                  
                  <!-- user detail -->
                  <div class="dropdown-header bg-primary bg-gradient rounded rounded-bottom-0 text-white small p-4">
                    <span class="d-block fw-medium text-truncate">Username</span>
                    <span class="d-block smaller fw-medium text-truncate">user@mail.com</span>
                    <span class="d-block smaller"><b>Last Login:</b> time</span>
                  </div>

                  <div class="dropdown-divider mb-3"></div>

                  <a href="#" class="dropdown-item text-truncate">
                    <span class="fw-medium">My profile</span>
                    <small class="d-block text-muted smaller">view and edit your profile</small>
                  </a>
                  <div class="dropdown-divider mb-0 mt-3"></div>

                  <a href="#" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore fw-medium py-3 px-4">
                    <i class="fi fi-power float-start"></i>
                    Log Out
                  </a>
                </div>

              </li>

              <!-- navigation toggler (mobile) 
              <li class="list-inline-item d-inline-block d-lg-none">
                <button class="btn p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fi fi-bars m-0"></i>
                </button>
              </li>-->

            </ul>
            <!-- /options -->

          </nav>

        </div>
        <!-- /Navbar -->

      </header>
      <!-- /Header -->
        
      <!-- content -->
      <div id="wrapper_content" class="d-flex flex-fill">


        <!-- sidebar -->
        <aside id="aside-main" class="aside-start aside-hide-xs bg-white shadow-sm d-flex flex-column px-2 h-auto">


          <!-- sidebar : logo -->
          <div class="py-2 px-3 mb-3 mt-1">
            <a href="#">
              <img src="public/assets/images/logo/nis-logo.jpg" width="138" height="60" alt="...">
            </a>
          </div>
          <!-- /sidebar : logo -->


          <!-- sidebar : navigation -->
          <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

            <nav class="nav-deep nav-deep-sm nav-deep-light">
              <ul class="nav flex-column">

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">  
                      <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"></path>  
                      <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"></path>
                    </svg>
                    <span>Dashboard</span>
                  </a>
                </li>

                <li class="nav-item active">
                  <a class="nav-link" href="#">
                    <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path fill-rule="evenodd" d="M3 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z"></path>
                      <path d="M13 3V2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path>
                    </svg>
                    <span>My Account </span>
                    <span class="group-icon float-end">
                      <i class="fi fi-arrow-end"></i>
                      <i class="fi fi-arrow-down"></i>
                    </span>
                  </a>

                  <ul class="nav flex-column active">
                    <li class="nav-item">
                      <a class="nav-link" href="clearance">
                        <span class="group-icon float-end">
                        </span>
                        Profile
                      </a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="splash">
                        <span class="group-icon float-end"></span>
                        Clearance Form
                      </a>
                    </li>
                    </ul>
                </li>
                  <li class="nav-item ">
                      <a class="nav-link" href="#">
                  <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                      <path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"></path>
                      <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"></path>
                  </svg>
                          <span>FAQs</span>
                          <span class="group-icon float-end">
                            <i class="fi fi-arrow-end"></i>
                    </span></a>
                </ul>
            </nav>

          </div>
          <!-- /sidebar : navigation -->


          <!-- sidebar : footer -->
          <div class="d-flex align-self-baseline w-100 py-3 px-3 border-top border-light small">

            <p class="d-inline-grid gap-auto-3 mb-0">
              <svg class="text-gray-600" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.052 512.052" fill="currentColor">
                <path d="M208.026,16.026c-114.7,0-208,78.9-208,176c0,39.8,15.7,77.9,44.5,108.9l-39.8,39.8c-4.6,4.6-6,11.5-3.5,17.4c2.5,6,8.3,9.9,14.8,9.9h192c114.7,0,208-78.9,208-176S322.726,16.026,208.026,16.026z"></path>
                <path opacity="0.5" d="M467.526,428.926c28.8-30.9,44.5-69.1,44.5-108.9c0-49.8-24.6-94.9-64-126.9c-0.9,114.1-108.2,206.9-240,206.9h-89.2c34.5,56.9,104.6,96,185.2,96h192c6.5,0,12.3-3.9,14.8-9.9c2.5-6,1.1-12.9-3.5-17.4L467.526,428.926z"></path>
                <path fill="#ffffff" d="M304.026,144.026h-192c-8.8,0-16,7.2-16,16s7.2,16,16,16h192c8.8,0,16-7.2,16-16S312.826,144.026,304.026,144.026z"></path>
                <path fill="#ffffff" d="M240.026,208.026h-128c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S248.826,208.026,240.026,208.026z"></path>
              </svg>
              <a href="#" class="link-normal text-dashed">Need help?</a>
            </p>

          </div>
          <!-- /sidebar : footer -->


        </aside>
        <!-- /sidebar -->


