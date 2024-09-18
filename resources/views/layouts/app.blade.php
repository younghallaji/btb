<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset("assets/logo/favicon.png")}}" />


    <!-- Include Styles -->
    <!-- $isFront is used to append the front layout styles only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Theme CSS-->
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/fonts/flag-iconsa536.css?id=64c88d2dd3933784a36ff69032119fde') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core6906.css?id=c3e02a88be1a1fd55969cac55ff801ba') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/css/rtl/theme-default4cbf.css?id=6bbe48ef31287ddab6fba54a09a61b7a') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo4c11.css?id=333c432ea361867d487b614f3cf0acde') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbarc93c.css?id=53cacc4fc4167217188dae059f8812c2') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/typeahead-js/typeahead7d44.css?id=2ff0314e298854fd9ac99bab7cf20e36') }}" />

    <!-- Vendor Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}" />


    <!-- Page Styles -->

    <!-- Include Scripts for customizer, helper, analytics, config -->
    <!-- $isFront is used to append the front layout scriptsIncludes only on the front layout otherwise the variable will be blank -->
    <!-- laravel style -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>
    <!-- beautify ignore:start -->
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="{{ asset('assets/vendor/js/template-customizer.js') }}"></script>

  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="{{ asset('assets/js/config.js') }}"></script>

  <script>
    window.templateCustomizer = new TemplateCustomizer({
      cssPath: '',
      themesPath: '',
      defaultStyle: "dark",
      defaultShowDropdownOnHover: "true", // true/false (for horizontal layout only)
      displayCustomizer: "true",
      lang: 'en',
      pathResolver: function(path) {
        var resolvedPaths = {
          // Core stylesheets
            'core.css': '{{ asset('assets/vendor/css/rtl/core.css') }}',
            'core-dark.css': '{{ asset('assets/vendor/css/rtl/core-dark.css') }}',
    
    // Themes
            'theme-default.css': '{{ asset('assets/vendor/css/rtl/theme-default.css') }}',
            'theme-default-dark.css': '{{ asset('assets/vendor/css/rtl/theme-default-dark.css') }}',
            'theme-bordered.css': '{{ asset('assets/vendor/css/rtl/theme-bordered.css') }}',
            'theme-bordered-dark.css': '{{ asset('assets/vendor/css/rtl/theme-bordered-dark.css') }}',
            'theme-semi-dark.css': '{{ asset('assets/vendor/css/rtl/theme-semi-dark.css') }}',
            'theme-semi-dark-dark.css':'{{ asset('assets/vendor/css/rtl/theme-semi-dark-dark.css') }}',
        }
        return resolvedPaths[path] || path;
      },
      'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
    });
  </script>
  
</head>

<body>

  <!-- Layout Content -->
  <div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
    <div class="app-brand demo">
    <a href="{{route('dashboard')}}" class="app-brand-link">
      <img src="{{asset("assets/logo/logo-white.png")}}" class="img-responsive " width="30px" height="30px">
      <span class="app-brand-text demo menu-text fw-bold ms-2" >Block Toolbox</span>
    </a>

    
  </div>
  
  <!-- ! Hide menu divider if navbar-full -->
    <div class="menu-divider mt-0 ">
  </div>
  
  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    
    

    
    
    
    
    
    <li class="menu-item active ">
      <a href="{{route('dashboard')}}" class="menu-link " >
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div class="text-truncate">Dashboards</div>
        </a>
    </li>   
    
    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
        <i class="menu-icon tf-icons bx bx-credit-card"></i>
        <div class="text-truncate">My BTB</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('deposits.option')}}" class="menu-link" >
            <div>Buy BTB</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="{{route('deposits.history')}}" class="menu-link" >
            <div>History</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item ">
      <a href="javascript:void(0);" class="menu-link menu-toggle" >
        <i class="menu-icon tf-icons bx bx-mail-send"></i>
        <div class="text-truncate">Send Mail</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item ">
          <a href="{{route('mail.single')}}" class="menu-link" >
            <div>Single Mail</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="{{route('mail.multiple')}}" class="menu-link" >
            <div>Bulk Mailing</div>
          </a>
        </li>
        <li class="menu-item ">
          <a href="{{route('mail.logs')}}" class="menu-link" >
            <div>Mail History</div>
          </a>
        </li>
      </ul>
    </li>
        
    

    
        <li class="menu-header small fw-medium">
      <span class="menu-header-text">Apps &amp; Pages</span>
    </li>
 
        
        </aside>
    

    <!-- Layout page -->
    <div class="layout-page">

      
      

      <!-- BEGIN: Navbar-->
            <!-- Navbar -->
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
  <div class="container-xxl">

    <!--  Brand demo (display only for navbar-full and hide on below xl) -->
    
    <!-- ! Not required for layout-without-menu -->
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0  d-xl-none ">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

            <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item navbar-search-wrapper mb-0">
          <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
            <i class="bx bx-search-alt bx-sm"></i>
            <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
          </a>
        </div>
      </div>
      <!-- /Search -->
      
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Notification -->
        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <i class="bx bx-bell bx-sm"></i>
            <span class="badge bg-danger rounded-pill badge-notifications">5</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end py-0">
            <li class="dropdown-menu-header border-bottom">
              <div class="dropdown-header d-flex align-items-center py-3">
                <h5 class="text-body mb-0 me-auto">Notification</h5>
                <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
              </div>
            </li>
            <li class="dropdown-notifications-list scrollable-container">
              <ul class="list-group list-group-flush">
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img src={{ asset('assets/img/avatars/1.png') }} alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                      <p class="mb-0">Won the monthly best seller gold badge</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <span class="avatar-initial rounded-circle bg-label-danger">CF</span>
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">Charles Franklin</h6>
                      <p class="mb-0">Accepted your connection</p>
                      <small class="text-muted">12hr ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar">
                        <img {{ asset('assets/img/avatars/2.png') }} alt class="w-px-40 h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <h6 class="mb-1">New Message ✉️</h6>
                      <p class="mb-0">You have new message from Natalie</p>
                      <small class="text-muted">1h ago</small>
                    </div>
                    <div class="flex-shrink-0 dropdown-notifications-actions">
                      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown-menu-footer border-top">
              <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                View all notifications
              </a>
            </li>
          </ul>
        </li>
        <!--/ Notification -->

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img scr={{ asset('assets/img/avatars/1.png') }} alt class="rounded-circle">
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="pages/profile-user.html">
                <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                    <div class="avatar avatar-online">
                      <img src={{ asset('assets/img/avatars/1.png') }} alt class="rounded-circle">
                    </div>
                  </div>
                  <div class="flex-grow-1">
                    <span class="fw-medium d-block">
                        {{ Auth::user()->name }}
                                          </span>
                    <small class="text-muted">Admin</small>
                  </div>
                </div>
              </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
            <li>
              <a class="dropdown-item" href="{{route('profile.edit')}}">
                <i class="bx bx-user me-2"></i>
                <span class="align-middle">My Profile</span>
              </a>
            </li>
                        <li>
              <div class="dropdown-divider"></div>
            </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
              <a class="dropdown-item" href="{{route('logout')}}"
              onclick="event.preventDefault();
                          this.closest('form').submit();">
                <i class='bx bx-log-in me-2'></i>
                <span class="align-middle">Logout</span>
              </a>
            </form>
            </li>
                      </ul>
        </li>
        <!--/ User -->
      </ul>
    </div>

    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
      <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
      <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>
  </div>
</nav>
<!-- / Navbar -->
            <!-- END: Navbar-->


      <!-- Content wrapper -->
      <div class="content-wrapper">


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>
                    Block Tool Box
                  </div>
                  
                </div>
              </footer>
              <!--/ Footer-->
                                  <!-- / Footer -->
                        <div class="content-backdrop fade"></div>
                      </div>
                      <!--/ Content wrapper -->
                    </div>
                    <!-- / Layout page -->
                  </div>
              
                      <!-- Overlay -->
                  <div class="layout-overlay layout-menu-toggle"></div>
                      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                  <div class="drag-target"></div>
                </div>
                <!-- / Layout wrapper -->
                  <!--/ Layout Content -->
              
              <script src={{ asset('assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}></script>
              <script src={{ asset('assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c') }}></script>
              <script src={{ asset('assets/vendor/js/bootstrapc7b4.js?id=ed421744bd6d91d4ff92284ba4e3577b') }}></script>
              <script
                  src={{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}>
              </script>
              <script src={{ asset('assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8') }}></script>
              <script src={{ asset('assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}>
              </script>
              <script src={{ asset('assets/vendor/js/menu5ee0.js?id=dc983b06bee817c5eb2314a4177537b5') }}></script>
              <script src={{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}></script>
              <!-- END: Page Vendor JS-->
              <!-- BEGIN: Theme JS-->
              <script src={{ asset('assets/js/mainbb17.js?id=51f11c4fe8215e76c5b4a4085364f176') }}></script>
              
              <script src={{ asset('assets/js/dashboards-analytics.js') }}></script>
              <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
              <script src="{{ asset('assets/js/tables-datatables-advanced.js') }}"></script>
              <!-- END: Page JS-->
              @stack('scripts')
              <script>
                $(document).ready(function () {
                    $('#number_of_emails').on('change', function() {
                        console.log('changed');
                        var numEmails = parseInt($(this).val());
                        var $emailInput = $('#recipient_emails');
                        
                        
                        $emailInput.attr('placeholder', "Enter " + numEmails + " email addresses, separated by commas");
            
                        
                        $emailInput.on('input', function() {
                            var emailCount = $(this).val().split(',').filter(function(email) {
                                return $.trim(email) !== ''; // Filter out any empty email addresses
                            }).length;
                            
                            // Custom validation message based on the number of emails
                            if (emailCount !== numEmails) {
                                this.setCustomValidity("Please enter exactly " + numEmails + " email addresses.");
                            } else {
                                this.setCustomValidity("");
                            }
                        });
                    });
            
                    $('#view-template').on('click', function (e) {
                        e.preventDefault();
                        
                        // Get the selected template ID
                        var templateId = $('#template').val();
            
                        // Make an AJAX request to get the template body
                        $.ajax({
                            url: '/email-template/' + templateId,
                            method: 'GET',
                            success: function (response) {
                                // Insert the template body into the modal
                                $('#template-body-content').html(response.body);
                            },
                            error: function () {
                                alert('Unable to load template. Please try again.');
                            }
                        });
                    });
                });
            </script>
              
          </body>          
    </html>
              
