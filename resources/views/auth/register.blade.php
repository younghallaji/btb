<!DOCTYPE html>

<html lang="en" class="dark-style   layout-menu-fixed     customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/"
    data-base-url="https://demos.pixinvent.com/frest-html-laravel-admin-template/demo-4" data-framework="laravel"
    data-template="blank-menu-theme-default-dark">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Register | Black Tool Box</title>
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- laravel CRUD token -->
    <meta name="csrf-token" content="9sI2bKHI87quSvkkILkukaLktXNgO4FTFsuWlyPi">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/frest_admin">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/img/favicon/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=1e255bad2869e0362eec31ccfdaf87ae" class="template-customizer-core-css">
    <link rel="stylesheet" type="text/css" href="https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=c43a588cdca25ced7f2fb03dc3f7a5f8" class="template-customizer-theme-css">


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
                            'core.css': 'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/core.css?id=c3e02a88be1a1fd55969cac55ff801ba',
                    'core-dark.css': 'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/core-dark.css?id=1e255bad2869e0362eec31ccfdaf87ae',
                  
                  // Themes
                            'theme-default.css': 'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default.css?id=6bbe48ef31287ddab6fba54a09a61b7a',
                    'theme-default-dark.css':
                    'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-default-dark.css?id=c43a588cdca25ced7f2fb03dc3f7a5f8',
                            'theme-bordered.css': 'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered.css?id=88f119e2bc5ff2140e6d6143cdf27135',
                    'theme-bordered-dark.css':
                    'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-bordered-dark.css?id=babb9f077136cd902e3ec4b444bbad36',
                            'theme-semi-dark.css': 'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark.css?id=f623f725bac6efe194367e617a9c3d5d',
                    'theme-semi-dark-dark.css':
                    'https://demos.pixinvent.com/frest-html-laravel-admin-template/demo/assets/vendor/css/rtl/theme-semi-dark-dark.css?id=642cbf5f22317d363b4c2856dc2638a1',
                        }
                return resolvedPaths[path] || path;
              },
              'controls': ["rtl","style","headerType","contentLayout","layoutCollapsed","layoutNavbarOptions","themes"],
            });
          </script>

    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href={{ asset('/assets/vendor/fonts/boxiconsc4a7.css?id=87122b3a3900320673311cebdeb618da') }} />
    <link rel="stylesheet"
        href={{ asset('/assets/vendor/fonts/fontawesome8a69.css?id=a2997cb6a1c98cc3c85f4c99cdea95b5') }} />
    <link rel="stylesheet"
        href={{ asset('/assets/vendor/fonts/flag-iconsa536.css?id=64c88d2dd3933784a36ff69032119fde') }} />
    <!-- Core CSS -->
    <link rel="stylesheet" href={{ asset('/assets/vendor/css/rtl/core6906.css?id=c3e02a88be1a1fd55969cac55ff801ba') }}
        class="template-customizer-core-css" />
    <link rel="stylesheet"
        href={{ asset('/assets/vendor/css/rtl/theme-default4cbf.css?id=6bbe48ef31287ddab6fba54a09a61b7a') }}
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href={{ asset('/assets/css/demo4c11.css?id=333c432ea361867d487b614f3cf0acde') }} />
    <!-- Vendors CSS -->
    <link rel="stylesheet"
        href={{ asset('/assets/vendor/libs/perfect-scrollbar/perfect-scrollbarc93c.css?id=53cacc4fc4167217188dae059f8812c2') }} />
    <link rel="stylesheet"
        href={{ asset('/assets/vendor/libs/typeahead-js/typeahead7d44.css?id=2ff0314e298854fd9ac99bab7cf20e36') }} />

    <!-- Vendor Styles -->
    <!-- Vendor -->
    <link rel="stylesheet" href={{ asset('/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }} />


    <!-- Page Styles -->
    <!-- Page -->
    <link rel="stylesheet" href={{ asset('/assets/vendor/css/pages/page-auth.css') }}>
    <script src={{ asset('/assets/vendor/js/helpers.js') }}></script>
    <script src={{ asset('/assets/vendor/js/template-customizer.js') }}></script>
    <script src={{ asset('/assets/js/config.js') }}></script>


</head>

<body>


    <!-- Content -->
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                    <img src={{ asset('/assets/img/pages/login-dark.png') }} alt="Auth Cover Bg color" width="520"
                        class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png"
                        data-app-dark-img="pages/login-dark.html">
                    <div class="mx-auto">

                    </div>
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="#"
                            class="app-brand-link gap-2 mb-2">
                            <span class="app-brand-logo demo"><svg width="26px" height="26px" viewBox="0 0 26 26"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <title>icon</title>
                                    <defs>
                                        <linearGradient x1="50%" y1="0%" x2="50%" y2="100%"
                                            id="linearGradient-1">
                                            <stop stop-color="#6119b8" offset="0%"></stop>
                                            <stop stop-color="#699AF9" offset="100%"></stop>
                                        </linearGradient>
                                        <linearGradient x1="0%" y1="0%" x2="100%" y2="100%"
                                            id="linearGradient-2">
                                            <stop stop-color="#FDAC41" offset="0%"></stop>
                                            <stop stop-color="#E38100" offset="100%"></stop>
                                        </linearGradient>
                                    </defs>
                                    <g id="Pages" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Login---V2" transform="translate(-667.000000, -290.000000)">
                                            <g id="Login" transform="translate(519.000000, 244.000000)">
                                                <g id="Logo" transform="translate(148.000000, 42.000000)">
                                                    <g id="icon" transform="translate(0.000000, 4.000000)">
                                                        <path
                                                            d="M13.8863636,4.72727273 C18.9447899,4.72727273 23.0454545,8.82793741 23.0454545,13.8863636 C23.0454545,18.9447899 18.9447899,23.0454545 13.8863636,23.0454545 C8.82793741,23.0454545 4.72727273,18.9447899 4.72727273,13.8863636 C4.72727273,13.5423509 4.74623858,13.2027679 4.78318172,12.8686032 L8.54810407,12.8689442 C8.48567157,13.19852 8.45300462,13.5386269 8.45300462,13.8863636 C8.45300462,16.887125 10.8856023,19.3197227 13.8863636,19.3197227 C16.887125,19.3197227 19.3197227,16.887125 19.3197227,13.8863636 C19.3197227,10.8856023 16.887125,8.45300462 13.8863636,8.45300462 C13.5386269,8.45300462 13.19852,8.48567157 12.8689442,8.54810407 L12.8686032,4.78318172 C13.2027679,4.74623858 13.5423509,4.72727273 13.8863636,4.72727273 Z"
                                                            id="Combined-Shape" fill="#4880EA"></path>
                                                        <path
                                                            d="M13.5909091,1.77272727 C20.4442608,1.77272727 26,7.19618701 26,13.8863636 C26,20.5765403 20.4442608,26 13.5909091,26 C6.73755742,26 1.18181818,20.5765403 1.18181818,13.8863636 C1.18181818,13.540626 1.19665566,13.1982714 1.22574292,12.8598734 L6.30410592,12.859962 C6.25499466,13.1951893 6.22958398,13.5378796 6.22958398,13.8863636 C6.22958398,17.8551125 9.52536149,21.0724191 13.5909091,21.0724191 C17.6564567,21.0724191 20.9522342,17.8551125 20.9522342,13.8863636 C20.9522342,9.91761479 17.6564567,6.70030817 13.5909091,6.70030817 C13.2336969,6.70030817 12.8824272,6.72514561 12.5388136,6.77314791 L12.5392575,1.81561642 C12.8859498,1.78721495 13.2366963,1.77272727 13.5909091,1.77272727 Z"
                                                            id="Combined-Shape2" fill="url(#linearGradient-1)"></path>
                                                        <rect id="Rectangle" fill="url(#linearGradient-2)" x="0" y="0"
                                                            width="7.68181818" height="7.68181818"></rect>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <span class="app-brand-text demo h3 mb-0 fw-bold">BTB</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome to Black ToolBox! 👋</h4>
                    <p class="mb-4">Please sign-in to your account and start the adventure</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Fullname </label>
                            <input type="text" class="form-control" id="name" name="name"  value="{{old('name')}}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email </label>
                            <input type="text" class="form-control" id="email" name="email" >
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username </label>
                            <input type="text" class="form-control" id="username" name="username"  value="{{old('username')}}">
                                <x-input-error :messages="$errors->get('username')" class="mt-2" />
                        </div>                        


                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>                            
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password_confirmation">Confirm Password</label>                            
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                        
                        <button class="btn btn-primary d-grid w-100">
                            Sign Up
                        </button>
                    </form>

                    <p class="text-center">
                        <span>Already have an account?</span>
                        <a href="{{ route('login') }}">
                            <span>Login</span>
                        </a>
                    </p>


                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>
    <!--/ Content -->



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
</html>

