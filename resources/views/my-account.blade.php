<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
        Dflix | free Movie Streaming
    </title>



    <link rel="stylesheet" id="sweetalert2-css" href="{{asset('css/sweetalert2.css')}}" media="all" />
    <link rel="stylesheet" id="user-registration-general-css" href="{{asset('css/user-registration-general.css')}}" media="all" />
    <link rel="stylesheet" id="user-registration-smallscreen-css" href="{{asset('css/user-registration-smallscreen')}}" media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" id="user-registration-my-account-layout-css" href="{{asset('css/user-registration-my-account-layout.css')}}" media="all" />
    <link rel="stylesheet" id="dashicons-css" href="{{asset('css/dashicons.css')}}" media="all" />
    <link rel="stylesheet" id="wp-block-library-css" href="{{asset('css/wp-block-library.css')}}" media="all" />
    <link rel="stylesheet" id="classic-theme-styles-css" href="{{asset('css/classic-theme-styles.css')}}" media="all" />

    <link rel="stylesheet" id="contact-form-7-css" href="{{asset('css/contact-form-7.css')}}" media="all" />
    <link rel="stylesheet" id="pld-font-awesome-css" href="{{asset('css/pld-font-awesome.css')}}" media="all" />
    <link rel="stylesheet" id="pld-frontend-css" href="{{asset('css/pld-frontend.css')}}" media="all" />
    <link rel="stylesheet" id="ppress-frontend-css" href="{{asset('css/ppress-frontend.css')}}" media="all" />
    <link rel="stylesheet" id="ppress-flatpickr-css" href="{{asset('css/ppress-flatpickr.css')}}" media="all" />
    <link rel="stylesheet" id="ppress-select2-css" href="{{asset('css/ppress-select2.css')}}" media="all" />
    <link rel="stylesheet" id="lineicons-css" href="{{asset('css/lineicons.css')}}" media="all" />
    <link rel="stylesheet" id="fancybox-css" href="{{asset('css/fancybox.css')}}" media="all" />
    <link rel="stylesheet" id="swiper-css" href="{{asset('css/swiper.css')}}" media="all" />
    <link rel="stylesheet" id="bootstrap-css" href="{{asset('css/bootstrap.css')}}" media="all" />
    <link rel="stylesheet" id="digiflex-main-style-css" href="{{asset('css/digiflex-main-style.css')}}" media="all" />
    <link rel="stylesheet" id="digiflex-stylesheet-css" href="{{asset('css/digiflex-stylesheet.css')}}" media="all" />
    <link rel="stylesheet" id="simple-favorites-css" href="{{asset('css/simple-favorites.css')}}" media="all" />
    <link rel="stylesheet" id="js_composer_front-css" href="{{asset('css/js_composer_front.css')}}" media="all" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />


    <script src="{{asset('js/jquery-core.js')}}" id="jquery-core-js"></script>
    <script src="{{asset('js/jquery-migrate.js')}}" id="jquery-migrate-js"></script>


    <script src="{{ asset('js/pld-frontend.js') }}" id="pld-frontend-js"></script>
    <script src="{{ asset('js/ppress-flatpickr.js') }}" id="ppress-flatpickr-js"></script>
    <script src="{{ asset('js/ppress-select2.js') }}" id="ppress-select2-js"></script>
    <script src="{{asset('js/comments.js')}}" id="comments-js"></script>

    <script src="{{asset('js/favorites.js')}}" id="favorites-js"></script>



    <link rel="icon" href="{{ asset('img/icons/cropped-apple-touch-icon-144-precomposed-32x32.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('img/icons/cropped-apple-touch-icon-144-precomposed-192x192.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('img/icons/cropped-apple-touch-icon-144-precomposed-180x180.png') }}" />
    <meta name="msapplication-TileImage" content="{{asset('img/icons/cropped-apple-touch-icon-144-precomposed-270x270.png')}}" />

</head>

<body class="home page-template page-template-page-home page-template-page-home-php page page-id-2 user-registration-page wpb-js-composer js-comp-ver-6.10.0 vc_responsive">

    <!-- search box -->
    <div class="search-box">
        <div class="container">
            <form role="search" action="#" method="get" id="searchform">
                <select name="post_type">
                    <option value="movie">Movie</option>
                    <option value="tv_show">TV Show</option>
                </select>
                <input type="search" name="s" placeholder="Search here" />
                <input type="submit" value="FIND" />
            </form>
        </div>
        <!-- end container -->
    </div>
    <!-- end search-box -->
    <nav class="mobile-menu">
        <div class="inner">
            <div class="mobile-search">
                <form role="search" action="#" method="get" id="searchform2">
                    <select name="post_type">
                        <option value="movie">Movie</option>
                        <option value="tv_show">TV Show</option>
                    </select>
                    <input type="search" name="s" placeholder="Search here" />
                    <input type="submit" value="FIND" />
                </form>
            </div>
            <!-- end mobile-search -->
            <a href="{{url('/my-account')}}" class="button-account"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                </svg> ACCOUNT
            </a>
            <!-- end button-account -->
            <div class="site-menu">
                <div class="menu-main-menu-container">
                    <ul id="menu-main-menu" class="menu-horizontal">
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-51" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active menu-item-51 nav-item">
                            <a title="HOME" href="{{url('/')}}" class="nav-link" aria-current="page">HOME</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-52" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item">
                            <a title="MOVIES" href="{{url('/movies')}}" class="nav-link">MOVIES</a><i></i>
                        </li>
                        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item">
                            <a title="TV SHOWS" href="{{url('/tvseries')}}" class="nav-link">TV SHOWS</a><i></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- end site-menu -->
        </div>
        <!-- end inner -->
    </nav>
    <!-- end mobile-menu -->

    <nav class="navbar">
        <div class="logo">
            <a href="{{url('/')}}"><img src="{{asset('img/icons/logo.png')}}" srcset="{{asset('img/icons/logo@2x.png')}}" alt="Dflex | Free Movie Streaming Website" /></a>
        </div>
        <div class="site-menu">
            <div class="menu-main-menu-container">
                <ul id="menu-main-menu-1" class="menu-horizontal">
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item active menu-item-51 nav-item">
                        <a title="HOME" href="{{url('/')}}" class="nav-link" aria-current="page">HOME</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-52 nav-item">
                        <a title="MOVIES" href="{{url('/movies')}}" class="nav-link">MOVIES</a><i></i>
                    </li>
                    <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53 nav-item">
                        <a title="TV SHOWS" href="{{url('/tvseries')}}" class="nav-link">TV SHOWS</a><i></i>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end site-menu -->

        <div class="user-menu">
            <div class="navbar-search"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                </svg></div>
            <!-- end navbar-search -->
            <div class="navbar-account">
                <a href="{{url('/my-account')}}">ACCOUNT <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" style="fill: rgb(228, 213, 213);" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                    </svg>
                </a>
            </div>
            <!-- end navbar-account -->
        </div>
        <!-- end user-menu -->

        <div class="hamburger-menu">
            <button class="hamburger">
                <svg width="45" height="45" viewBox="0 0 100 100">
                    <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
        <!-- end hamburger-menu -->
    </nav>

    <header class="page-header" style="
        background-image: url(http://digiflex.themezinho.net/wp-content/uploads/2020/12/page-header-bg.jpg);
      ">
        <div class="container">
            <h1>Account</h1>
        </div>
    </header>
    <!-- end page-header -->
    <main>
        <section class="wpb-content-wrapper">
            <section class="content-section bg-image" style="background: url(http://digiflex.themezinho.net/wp-content/uploads/2020/11/section-pattern01.png) center no-repeat; ">
                <div class="container">
                    <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-7">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="text-box">
                                        <h2><strong>DFlix Membership</strong></h2>

                                    </div>

                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>Click here to <a href="/registration/">register</a></p>

                                        </div>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <div id="user-registration" class="user-registration">


                                                <div class="ur-frontend-form login " id="ur-frontend-form">

                                                    <form class="user-registration-form user-registration-form-login login" method="post">
                                                        <div class="ur-form-row">
                                                            <div class="ur-form-grid">
                                                                <p class="user-registration-form-row user-registration-form-row--wide form-row form-row-wide">
                                                                    <label for="username">Username or Email Address <span class="required">*</span></label> <span class="input-wrapper">
                                                                        <input placeholder="" type="text" class="user-registration-Input user-registration-Input--text input-text" name="username" id="username" value="" style="" />
                                                                    </span>
                                                                </p>
                                                                <p class="user-registration-form-row user-registration-form-row--wide form-row form-row-wide">
                                                                    <label for="password">Password <span class="required">*</span></label> <span class="input-wrapper">
                                                                        <span class="password-input-group">
                                                                            <input placeholder="" class="user-registration-Input user-registration-Input--text input-text" type="password" name="password" id="password" style="" />

                                                                        </span>
                                                                </p>


                                                                <p class="form-row">
                                                                    <input type="hidden" id="user-registration-login-nonce" name="user-registration-login-nonce" value="59333f7a1f" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />
                                                                <div>
                                                                    <input type="submit" class="user-registration-Button button " name="login" value="Login" />
                                                                </div>
                                                                <input type="hidden" name="redirect" value="" />
                                                                <label class="user-registration-form__label user-registration-form__label-for-checkbox inline">
                                                                    <input class="user-registration-form__input user-registration-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember Me</span>
                                                                </label>
                                                                </p>

                                                                <p class="user-registration-LostPassword lost_password">
                                                                    <a href="http://digiflex.themezinho.net/my-account/lost-password/">Lost your password?</a>
                                                                </p>

                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-5">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <figure class="side-image  ">

                                        <img src="http://digiflex.themezinho.net/wp-content/uploads/2020/12/side-image02.png" alt="Image">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </main>
    <footer class="footer" style="background-color: #111111">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget_text widget footer-widget">
                        <div class="textwidget custom-html-widget">
                            <h5 class="call-us">
                                Questions? <strong>Mail -> hr665102@gmail.com</strong>
                            </h5>
                            <p>
                                Format for custom post types that are not book or you can use
                                else if to <u>specify a second</u> post type the same way as
                                above.
                            </p>
                            <div class="language">
                                <i class="lni lni-world"></i>
                                <select>
                                    <option>English</option>
                                </select>
                            </div>
                            <!-- end language -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-4">
                    <div class="widget footer-widget">
                        <h6 class="widget-title">DFLIX</h6>
                        <div class="menu-digiflex-container">
                            <ul id="menu-digiflex" class="menu">
                                <li id="menu-item-287" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-287">
                                    <a href="#">Dflix</a>
                                </li>

                                <li id="menu-item-303" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303">
                                    <a href="#">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget footer-widget">
                        <h6 class="widget-title">SUPPORT</h6>
                        <div class="menu-support-container">
                            <ul id="menu-support" class="menu">
                                <li id="menu-item-329" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-329">
                                    <a href="#">FAQ</a>
                                </li>


                                <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-330">
                                    <a href="#">Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
        <div class="bottom-bar">
            <div class="container">
                <span>&copy; 2023 © 2021 Dflix | Free Movie Streaming</span>

            </div>
            <!-- end container -->
        </div>
        <!-- end footer-bottom -->
    </footer>
    <script>
        (function() {
            function maybePrefixUrlField() {
                const value = this.value.trim();
                if (value !== "" && value.indexOf("http") !== 0) {
                    this.value = "http://" + value;
                }
            }

            const urlFields = document.querySelectorAll(
                '.mc4wp-form input[type="url"]'
            );
            for (let j = 0; j < urlFields.length; j++) {
                urlFields[j].addEventListener("blur", maybePrefixUrlField);
            }
        })();
    </script>
    <script type="text/html" id="wpb-modifications"></script>
    <script src="{{ asset('js/swv.js') }}" id="swv-js"></script>

    <script id="contact-form-7-js-extra">
        var wpcf7 = {
            api: {
                root: "http:\/\/digiflex.themezinho.net\/wp-json\/",
                namespace: "contact-form-7\/v1",
            },
        };
    </script>
    <script src="{{ asset('js/contact-form7.js') }}" id="contact-form-7-js"></script>

    <script id="ppress-frontend-script-js-extra">
        var pp_ajax_form = {
            ajaxurl: "http:\/\/digiflex.themezinho.net\/wp-admin\/admin-ajax.php",
            confirm_delete: "Are you sure?",
            deleting_text: "Deleting...",
            deleting_error: "An error occurred. Please try again.",
            nonce: "a56f8d0530",
            disable_ajax_form: "false",
            is_checkout: "0",
            is_checkout_tax_enabled: "0",
        };
    </script>
    <script src="{{ asset('js/ppress-frontend-script.js') }}" id="ppress-frontend-script-js"></script>
    <script src="{{ asset('js/bootstrap.js') }}" id="bootstrap-js"></script>
    <script src="{{ asset('js/fancybox.js') }}" id="fancybox-js"></script>
    <script src="{{ asset('js/swiper.js') }}" id="swiper-js"></script>
    <script src="{{ asset('js/digiflex-scripts.js') }}" id="digiflex-scripts-js"></script>
    <script src="{{ asset('js/wpb_composer_front_js.js') }}" id="wpb_composer_front_js-js"></script>
    <script defer src="{{ asset('js/mc4wp-forms-api.js') }}" id="mc4wp-forms-api-js"></script>

</body>

</html>
