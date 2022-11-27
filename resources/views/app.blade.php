<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="/agent/assets/images/logo-sm.png" rel="apple-touch-icon-precomposed">
    <link href="/agent/assets/images/logo-sm.png" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- site favicon -->
    <link rel="icon" type="image/png" href="img/favicon.ico" sizes="16x16" />
    <!-- bootstrap 4  -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <!-- fontawesome 5  -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- line-awesome webfont -->
    <link rel="stylesheet" href="css/line-awesome.min.css" />
    <!-- custom select css -->
    <link rel="stylesheet" href="css/vendor/nice-select.css" />
    <!-- animate css  -->
    <link rel="stylesheet" href="css/vendor/animate.min.css" />
    <!-- lightcase css -->
    <link rel="stylesheet" href="css/vendor/lightcase.css" />
    <!-- slick slider css -->
    <link rel="stylesheet" href="css/vendor/slick.css" />
    <!-- jquery ui css -->
    <link rel="stylesheet" href="css/vendor/jquery-ui.min.css" />
    <!-- datepicker css -->
    <link rel="stylesheet" href="css/vendor/datepicker.min.css" />
    <!-- style main css -->
    <link rel="stylesheet" href="css/main.css" />


    <title inertia>WestEnd Gaming Limited</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->

    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Westend Gaming Limited</title>
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/fonts/Linearicons/Font/demo-files/demo.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&amp;display=swap&amp;ver=1607580870">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/lightGallery/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/plugins/noUiSlider/nouislider.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{url('/')}}/assets/css/home-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.9.96/css/materialdesignicons.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/agent/assets/images/logo-sm.png">
    <!-- Icons Css -->
    <link href="{{url('/')}}/agent/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{url('/')}}/agent/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <script>
        window.ticket = "{{ $ticket ?? '' }}"
    </script>

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    @inertiaHead

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N0LCN0CLBQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-N0LCN0CLBQ');
    </script>

    <style>
        .section-title, .title, .hero__title, .play-card__title{
            color: white !important;
        }
    </style>
</head>

<body class="font-sans antialiased" style="height:100vh;">

    {{-- <div class="preloader">
        <svg
          class="mainSVG"
          viewBox="0 0 800 600"
          xmlns="http://www.w3.org/2000/svg"
        >
          <defs>
            <path
              id="puff"
              d="M4.5,8.3C6,8.4,6.5,7,6.5,7s2,0.7,2.9-0.1C10,6.4,10.3,4.1,9.1,4c2-0.5,1.5-2.4-0.1-2.9c-1.1-0.3-1.8,0-1.8,0
          s-1.5-1.6-3.4-1C2.5,0.5,2.1,2.3,2.1,2.3S0,2.3,0,4.4c0,1.1,1,2.1,2.2,2.1C2.2,7.9,3.5,8.2,4.5,8.3z"
              fill="#fff"
            />
            <circle id="dot" cx="0" cy="0" r="5" fill="#fff" />
          </defs>

          <circle
            id="mainCircle"
            fill="none"
            stroke="none"
            stroke-width="2"
            stroke-miterlimit="10"
            cx="400"
            cy="300"
            r="130"
          />
          <circle
            id="circlePath"
            fill="none"
            stroke="none"
            stroke-width="2"
            stroke-miterlimit="10"
            cx="400"
            cy="300"
            r="80"
          />

          <g id="mainContainer">
            <g id="car">
              <path
                id="carRot"
                fill="#FFF"
                d="M45.6,16.9l0-11.4c0-3-1.5-5.5-4.5-5.5L3.5,0C0.5,0,0,1.5,0,4.5l0,13.4c0,3,0.5,4.5,3.5,4.5l37.6,0
        C44.1,22.4,45.6,19.9,45.6,16.9z M31.9,21.4l-23.3,0l2.2-2.6l14.1,0L31.9,21.4z M34.2,21c-3.8-1-7.3-3.1-7.3-3.1l0-13.4l7.3-3.1
        C34.2,1.4,37.1,11.9,34.2,21z M6.9,1.5c0-0.9,2.3,3.1,2.3,3.1l0,13.4c0,0-0.7,1.5-2.3,3.1C5.8,19.3,5.1,5.8,6.9,1.5z M24.9,3.9
        l-14.1,0L8.6,1.3l23.3,0L24.9,3.9z"
              />
            </g>
          </g>
        </svg>
    </div> --}}

    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
        <span class="scroll-icon">
            <i class="las la-arrow-up"></i>
        </span>
    </div>
    <!-- scroll-to-top end -->

    @inertia

    @if(!empty($_COOKIE['funding_success']))
    <input type="hidden" value="{{$_COOKIE['funding_success']}}" class="errorBags">
    @else
    <input type="hidden" value="" class="errorBags">

    @endif



    @if(!empty($_COOKIE['ticket-played']))
    <input type="hidden" value="{{$_COOKIE['ticket-played']}}" class="ticketBags">
    @else
    <input type="hidden" value="" class="ticketBags">

    @endif

    @env ('local')
    <script src="http://localhost:3000/browser-sync/browser-sync-client.js"></script>
    @endenv

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/jquery.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/popper.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/bootstrap4/js/bootstrap.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/select2/dist/js/select2.full.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/lightGallery/dist/js/lightgallery-all.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/slick/slick/slick.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/noUiSlider/nouislider.min.js"></script>
    <!-- custom code-->
    <script src="{{url('/')}}/assets/js/main.js"></script>
    <script src="{{url('/')}}/agent/assets/libs/jquery/jquery.min.js"></script>
    <script src="{{url('/')}}/assets/plugins/jquery.min.js"></script>


    <script src="{{url('/')}}/agent/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/agent/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/agent/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="{{url('/')}}/agent/assets/libs/node-waves/waves.min.js"></script>
    <script src="{{url('/')}}/agent/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="{{url('/')}}/agent/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
{{--
    <script src="{{url('/')}}/agent/assets/js/pages/dashboard.init.js"></script> --}}
    <script src="https://checkout.flutterwave.com/v3.js"></script>

    <!-- App js -->
    <script src="{{url('/')}}/assets/plugins/jquery.min.js"></script>

    <script src="{{url('/')}}/agent/assets/js/app.js"></script>

    <!-- page-wrapper end -->
    <!-- jQuery library -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <!-- custom select js -->
    <script src="js/vendor/jquery.nice-select.min.js"></script>
    <!-- lightcase js -->
    <script src="js/vendor/lightcase.js"></script>
    <!-- wow js -->
    <script src="js/vendor/wow.min.js"></script>
    <!-- slick slider js -->
    <script src="js/vendor/slick.min.js"></script>
    <!-- countdown js -->
    <script src="js/vendor/jquery.countdown.js"></script>
    <!-- jquery ui js -->
    <script src="js/vendor/jquery-ui.min.js"></script>
    <!-- datepicker js -->
    <script src="js/vendor/datepicker.min.js"></script>
    <script src="js/vendor/datepicker.en.js"></script>
    <!-- preloader -->
    <script src="js/vendor/TweenMax.min.js"></script>
    <script src="js/vendor/MorphSVGPlugin.min.js"></script>
    <script src="js/preloader.js"></script>
    <!-- contact js -->
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/mine.js"></script>




    <script>
        var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?50052';
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url;
        var options = {
            "enabled": true,
            "chatButtonSetting": {
                "backgroundColor": "#4dc247",
                "ctaText": "",
                "borderRadius": "25",
                "marginLeft": "0",
                "marginBottom": "50",
                "marginRight": "50",
                "position": "right"
            },
            "brandSetting": {
                "brandName": "WESTEND",
                "brandSubTitle": "Typically replies almost immediately",
                "brandImg": "https://demo.westendnig.com/assets/img/favicon.png",
                "welcomeText": "Hi there!\nHow can I help you?",
                "messageText": "Hello, I have a question about Westend",
                "backgroundColor": "#0a5f54",
                "ctaText": "Start Chat",
                "borderRadius": "25",
                "autoShow": false,
                "phoneNumber": "2348100806265"
            }
        };
        s.onload = function() {
            CreateWhatsappChatWidget(options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    </script>
</body>

</html>
