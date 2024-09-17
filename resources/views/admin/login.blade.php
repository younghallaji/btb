<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

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
<link rel="stylesheet" href="{{ asset('/assets/vendor/css/pages/page-auth.css') }}">
<script src="{{ asset('/assets/vendor/js/helpers.js') }}"></script>
<script src="{{ asset('/assets/vendor/js/template-customizer.js') }}"></script>
<script src="{{ asset('/assets/js/config.js') }}"></script>
</head>

<body>

    <!-- Layout Content -->
  
<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner py-4">
  
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <img src="{{asset("assets/logo/logo.png")}}" class="img-responsive" width="100px" height="100px">
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to Admin! 👋</h4>
            <p class="mb-4">Please sign-in to your account and start the adventure</p>
  
            <form id="formAuthentication" class="mb-3" action="{{ route('admin.login') }}" method="POST">
                @csrf
              <div class="mb-3">
                <label for="email" class="form-label">Email or Username</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email or username" autofocus>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                  
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Remember Me
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
              </div>
            </form>            
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>
  <!--/ Content -->
  
    <!--/ Layout Content -->

    <script src={{ asset('/assets/vendor/libs/jquery/jquery1e84.js?id=0f7eb1f3a93e3e19e8505fd8c175925a') }}></script>
    <script src={{ asset('/assets/vendor/libs/popper/popper0a73.js?id=baf82d96b7771efbcc05c3b77135d24c') }}></script>
    <script src={{ asset('/assets/vendor/js/bootstrapc7b4.js?id=ed421744bd6d91d4ff92284ba4e3577b') }}></script>
    <script
        src={{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar6188.js?id=44b8e955848dc0c56597c09f6aebf89a') }}>
    </script>
    <script src={{ asset('/assets/vendor/libs/hammer/hammer2de0.js?id=0a520e103384b609e3c9eb3b732d1be8') }}></script>
    <script src={{ asset('/assets/vendor/libs/typeahead-js/typeahead60e7.js?id=f6bda588c16867a6cc4158cb4ed37ec6') }}>
    </script>
    <script src={{ asset('/assets/vendor/js/menu5ee0.js?id=dc983b06bee817c5eb2314a4177537b5') }}></script>
    <script src={{ asset('/assets/vendor/libs/%40form-validation/umd/bundle/popular.min.js') }}></script>
    <script src={{ asset('/assets/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js') }}></script>
    <script src={{ asset('/assets/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js') }}></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src={{ asset('/assets/js/mainbb17.js?id=51f11c4fe8215e76c5b4a4085364f176') }}></script>

    <script src={{ asset('/assets/js/pages-auth.js') }}></script>


</body>


<!-- Mirrored from demos.pixinvent.com/frest-html-laravel-admin-template/demo-4/auth/login-cover by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2024 07:25:34 GMT -->

</html>