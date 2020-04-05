<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158265923-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-158265923-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
            'gtm.start':
                new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TM3Q8C5');</script>
    <!-- End Google Tag Manager -->
    <meta name="google-site-verification" content="ARjr6w0ykPvORNVdLGRAGNJuK-hvfmiKjisnwV3-4go" />
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    

    
    
    <!-- Title -->
    <title>Trado | Nigeria's Leading Digital Agriculture Investment Platform
        Helpline:</title>

    <!-- Required Meta Tags Always Come First -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Trado Global Limited, Nigeria's Leading Digital Agriculture Platform is a wealth creation idea working majorly on agriculture and industrial importation. We aimed at offering a profitable investment framework" />
  <meta name=" Keywords" content=" Trado,Nigeria,Agriculture,digital agriculture,farming,farmcrowdy,investment,farm in nigeria,investment in nigeria,pineapple farm,pepper farm,okra farm" />

  <!--t -->
  <meta name=" twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Tradoglobal" />
    <meta name="twitter:creator" content="@tradoglobal" />
    <meta name="twitter:title" content="trado.ng" />
    <meta name="twitter:description"
        content="Trado Global Limited, Nigeria's Leading Digital Agriculture Platform is a wealth creation idea working majorly on agriculture and industrial importation. We aimed at offering a profitable investment framework" />
    <meta name="twitter:image" content="" />

    <meta name="twitter:app:country" content="NG" />
    <meta name="twitter:app:name:googleplay" content="Trado" />
    <meta name="twitter:app:id:googleplay" content="" />
    <meta name="twitter:app:url:googleplay" content="" />

    <!--w -->
    <meta property="og:site_name" content="Trado.ng" />
    <meta property="og:title" content="Trado" />
    <meta property="og:description"
        content="Trado Global Limited, Nigeria's Leading Digital Agriculture Platform is a wealth creation idea working majorly on agriculture and industrial importation. We aimed at offering a profitable investment framework" />
    <meta property="og:image" itemprop="image" content="" />
    <meta property="og:type" content="website" />
    
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="./favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/bootstrap/css/bootstrap.css')}}">

    <!-- CSS Implementing Plugins -->
    @if(Request::is('/') || Request::is('about') || Request::is('contact') || Request::is('login') || Request::is('register') || Request::is('terms') || Request::is('faq'))
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/fancybox/jquery.fancybox.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/assets/vendor/slick-carousel/slick/slick.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/cubeportfolio/css/cubeportfolio.min.css')}}">  
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/dzsparallaxer/dzsparallaxer.css')}}">
    @else
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/custombox/dist/custombox.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/animate.css/animate.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/assets/vendor/flatpickr/dist/flatpickr.min.css')}}">
    @endif

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{URL::asset('/assets/css/front.css')}}">
    <script src="{{URL::asset('/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
</head>

<body>
    
    @if(Request::is('/'))
       @include('layouts.inc.header')
       @else
       @include('layouts.inc.header_')
    @endif



    @yield('content')



    @include('layouts.inc.footer')


    <!-- JS Global Compulsory -->
    <script src="{{URL::asset('/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

    @if(Request::is('/') || Request::is('about') || Request::is('contact') || Request::is('login') || Request::is('register') || Request::is('terms') || Request::is('faq'))    
    <!-- JS Implementing Plugins -->
    <script src="{{URL::asset('/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>    
    <script src="{{URL::asset('.././assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/dzsparallaxer/dzsparallaxer.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/gmaps/gmaps.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/jquery.countdown.min.js')}}"></script>


    <!-- JS Front -->
    <script src="{{URL::asset('/assets/js/hs.core.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.header.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.unfold.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.fancybox.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.slick-carousel.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.validation.js')}}"></script>
    
  <script src="{{URL::asset('/assets/js/components/hs.countdown.js')}}"></script>
    
    <script src="{{URL::asset('.././assets/js/components/hs.malihu-scrollbar.js')}}"></script>
    <script src="{{URL::asset('/assets/js/helpers/hs.focus-state.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.cubeportfolio.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.go-to.js')}}"></script>
    
  <script src="{{URL::asset('/assets/js/components/hs.sticky-block.js')}}"></script>


    @else
    <script src="{{URL::asset('/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/custombox/dist/custombox.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/custombox/dist/custombox.legacy.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/appear.js')}}"></script>
    <script src="{{URL::asset('/assets/vendor/circles/circles.min.js')}}"></script>
    
    <script src="{{URL::asset('/assets/vendor/jquery.countdown.min.js')}}"></script>

    <!-- JS Front -->
    <script src="{{URL::asset('/assets/js/hs.core.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.header.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.unfold.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.malihu-scrollbar.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.focus-state.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.validation.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.modal-window.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.step-form.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.show-animation.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.range-datepicker.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.chart-pie.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.progress-bar.js')}}"></script>
    
  <script src="{{URL::asset('/assets/js/components/hs.countdown.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.svg-injector.js')}}"></script>
    <script src="{{URL::asset('/assets/js/components/hs.go-to.js')}}"></script>
    @endif

    

    
    @if(Request::is('/') || Request::is('about') || Request::is('contact') || Request::is('login') || Request::is('register') || Request::is('terms') || Request::is('faq'))
    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 768,
                hideTimeOut: 0
            });
             var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });
        });

        $(document).on('ready', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

            // initialization of fancybox
            $.HSCore.components.HSFancyBox.init('.js-fancybox');

            // initialization of slick carousel
            $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate');

            // initialization of forms
            $.HSCore.helpers.HSFocusState.init();

            // initialization of cubeportfolio
            $.HSCore.components.HSCubeportfolio.init('.cbp');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
            
            // initialization of sticky blocks
            $.HSCore.components.HSStickyBlock.init('.js-sticky-block');

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));
        });
    </script>
    @else
    <script>
        $(window).on('load', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of HSMegaMenu component
            $('.js-breadcrumb-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991.98,
                hideTimeOut: 0
            });
            
            var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                yearsElSelector: '.js-cd-years',
                daysElSelector: '.js-cd-days',
                hoursElSelector: '.js-cd-hours',
                minutesElSelector: '.js-cd-minutes',
                secondsElSelector: '.js-cd-seconds'
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function () {
            //let it = $($($(el).data('unfold-target')).children());


            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function () {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate');

            // initialization of autonomous popups
            $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
                autonomous: true
            });

            // initialization of step form
            $.HSCore.components.HSStepForm.init('.js-step-form');

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of range datepicker
            $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

            // initialization of chart pies
            var items = $.HSCore.components.HSChartPie.init('.js-pie');

            // initialization of horizontal progress bars
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar'
            });

            var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress', {
                direction: 'vertical',
                indicatorSelector: '.js-vr-progress-bar'
            });

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });
    </script>
    @endif

</body>

</html>