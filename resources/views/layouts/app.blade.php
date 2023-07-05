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

<body
  class="home page-template page-template-page-home page-template-page-home-php page page-id-2 user-registration-page wpb-js-composer js-comp-ver-6.10.0 vc_responsive">

  <!-- search box -->
      @include('partials.header')

      
  <!-- end slider -->

      @include('partials.main')

     @include('partials.footer')

  <script>
    (function () {
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
