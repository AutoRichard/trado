@extends('layouts.app')

@section('content')

<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM3Q8C5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero v1 Section -->
    <div class="u-hero-v1">
        <!-- Hero Carousel Main -->
        <div id="heroNav" class="js-slick-carousel u-slick" data-autoplay="true" data-speed="10000"
            data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
            data-arrow-left-classes="fa fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
            data-arrow-right-classes="fa fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
            data-numbered-pagination="#slickPaging" data-nav-for="#heroNavThumb">
            <div class="js-slide">
                <!-- Slide #1 -->
                <div class="d-flex align-items-center u-hero-v1__main"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url(./img/home3.jpeg);">
                    <div class="container u-space-4-top u-space-5-top--md u-space-3-top--lg u-space-3-bottom">
                        <div class="row">
                            <div class="col-md-8 col-lg-6 position-relative">
                                <h4 class="text-white display-5 font-size-25--md-down mb-0"
                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                    <span class="font-weight-bold">Solutions For The Growing World</span>
                                </h4>
                                <span class="d-block h4 text-white font-weight-light mb-2"
                                    data-scs-animation-in="fadeInUp">
                                    Join our mission to create a better world in economy with sustainable agriculture
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide #1 -->
            </div>

            <div class="js-slide">
                <!-- Slide #2 -->
                <div class="d-flex align-items-center u-hero-v1__main"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url(./img/trads.jpg);">
                    <div class="container u-space-4-top u-space-5-top--md u-space-3-top--lg u-space-3-bottom">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                <h4 class="text-white display-5 font-size-25--md-down mb-0"
                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                    <span class="ft-weight-bold">
                                    Improving Farming Improving Life</span>
                                </h4>
                                <span class="d-block h4 text-white font-weight-light mb-2"
                                    data-scs-animation-in="fadeInUp">
                                    Be on our profitable investment framework
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide #2 -->
            </div>
            
            <div class="js-slide">
                <!-- Slide #1 -->
                <div class="d-flex align-items-center u-hero-v1__main"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url(./img/home2.jpeg);">
                    <div class="container u-space-4-top u-space-5-top--md u-space-3-top--lg u-space-3-bottom">
                        <div class="row">
                            <div class="col-md-8 col-lg-6 position-relative">
                                <h4 class="text-white display-5 font-size-25--md-down mb-0"
                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                    <span class="font-weight-bold">Agriculture full of possibilty</span>
                                </h4>
                                <span class="d-block h4 text-white font-weight-light mb-2"
                                    data-scs-animation-in="fadeInUp">
                                    BE a farmer why still on suit
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide #1 -->
            </div>

            <div class="js-slide">
                <!-- Slide #2 -->
                <div class="d-flex align-items-center u-hero-v1__main"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.7)), url(./img/home1.jpeg);">
                    <div class="container u-space-4-top u-space-5-top--md u-space-3-top--lg u-space-3-bottom">
                        <div class="row">
                            <div class="col-md-8 col-lg-6">
                                
                                <h4 class="text-white display-5 font-size-25--md-down mb-0"
                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="200">
                                    <span class="ft-weight-bold">
                                    Empowering Farmers</span>
                                </h4>
                                <span class="d-block h4 text-white font-weight-light mb-2"
                                    data-scs-animation-in="fadeInUp">
                                    Let farmer get what they truly deserve
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Slide #2 -->
            </div>
        </div>
        <!-- End Hero Carousel Main -->

        <!-- Slick Paging
        <div class="container position-relative">
            <div id="slickPaging" class="u-slick__paging-v1"></div>
        </div>
         End Slick Paging -->

        <!-- Hero Carousel Secondary -->
        <div id="heroNavThumb" class="js-slick-carousel u-slick" data-autoplay="true" data-speed="10000"
            data-is-thumbs="true" data-nav-for="#heroNav">
            <div class="js-slide">
                <!-- Slide #1 -->
                <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
                    <div class="container u-space-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="h5 text-muted">
                                    <span class="d-block text-trado">Food Provision</span>
                                </h3>
                                <p class="mb-0">Providing food for the teaming population</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 h-100 d-none d-lg-inline-block bg-trado u-hero-v1__last">
                        <div class="u-hero-v1__last-inner">
                            <h3 class="h5 text-white">
                                Secured Investment
                            </h3>
                            <p class="u-text-light mb-0">We help you multiply your money through our profitable agriculture investment framework</p>
                        </div>
                    </div>
                </div>
                <!-- End Slide #1 -->
            </div>

            <div class="js-slide">
                <!-- Slide #2 -->
                <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
                    <div class="container u-space-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="h5 text-muted">
                                    <span class="d-block text-trado">Strengthen food security</span>
                                </h3>
                                <p class="mb-0">With you we can feed the world</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 h-100 d-none d-lg-inline-block bg-trado u-hero-v1__last">
                        <div class="u-hero-v1__last-inner">
                            <h3 class="h5 text-white">
                                Building happy community
                            </h3>
                            <p class="u-text-light mb-0">You smile and we smile</p>
                        </div>
                    </div>
                </div>
                <!-- End Slide #2 -->
            </div>
            
            <div class="js-slide">
                <!-- Slide #1 -->
                <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
                    <div class="container u-space-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="h5 text-muted">
                                    <span class="d-block text-trado">Strengthen food security</span>
                                </h3>
                                <p class="mb-0">With you we can feed the world</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 h-100 d-none d-lg-inline-block bg-trado u-hero-v1__last">
                        <div class="u-hero-v1__last-inner">
                            <h3 class="h5 text-white">
                                Building happy community
                            </h3>
                            <p class="u-text-light mb-0">You smile and we smile</p>
                        </div>
                    </div>
                </div>
                <!-- End Slide #1 -->
            </div>

            <div class="js-slide">
                <!-- Slide #2 -->
                <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
                    <div class="container u-space-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3 class="h5 text-muted">
                                    <span class="d-block text-trado">Building happy community</span>
                                </h3>
                                <p class="mb-0">You smile and we smile</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-100 h-100 d-none d-lg-inline-block bg-trado u-hero-v1__last">
                        <div class="u-hero-v1__last-inner">
                            <h3 class="h5 text-white">
                                Mechanised Farming
                            </h3>
                            <p class="u-text-light mb-0">Use of agriculture machineries for our wide varieties of plantation to record excellent productivity</p>
                        </div>
                    </div>
                </div>
                <!-- End Slide #2 -->
            </div>
        </div>
        <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->
    <hr class="my-0">

    <!-- Plantation Section -->
    <div class="container">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
            <h2 class="text-trado font-weight-bold">Farm Shop</h2>
        </div>
        <!-- End Title -->
        
        @if(count($plantation) > 0)
        <div class="row justify-content-center">
            @foreach($plantation as $plant)
            <div class="col-md-6 col-lg-4 mb-7 mb-lg-0">
                <!-- Charts -->
                <article class="bg-white shadow-sm rounded">
                    <!-- Header -->
                    <header class="p-6"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="d-block text-muted">{{$plant->plantation}}</h5>
                        </div>
                        <!-- Statistics -->
                        <div class="media align-items-center">
                            <div class="d-flex mr-3">
                                <img class="img-fluid u-trado-avatar rounded-circle"
                            src="https://www.trado.ng/admin/storage/storage/{{$plant->image}}" alt="United States Flag">
                            </div>
                            <div class="media-body">

                                <h6>
                                    @if($plant->r_unit)
                                    <a class="btn btn-trado btn-trado-md transition-3d-hover" href="/shop_{{$plant->id}}">
                                        Invest
                                    </a>
                                    @else
                                    <a class="btn btn-trado btn-trado-md transition-3d-hover" href="/shop_{{$plant->id}}">
                                        Sold Out
                                    </a>
                                    @endif                            
                                </h6>
                                <a class="text-trado" href="#">
                                   {{$plant->percentage}}%<span class="fa fa-angle-up ml-2"></span>
                                </a>
                            </div>
                        </div>
                        
                            
                                
                        <!-- End Statistics -->
                    </header>
                    <!-- End Header -->
                    <div class="row"  style="margin-top: -70px;"><div class="offset-4"><span style="vertical-align: bottom;">Farm insured by</span> <img src="./img/ins.jpeg" style="width: 100px; height: 100px;" alt="" /></div>
                                    </div>

                    <hr class="my-0">

                    <!-- Charts Content -->
                    <div class="p-6">
                        <!-- Goal -->
                        <div class="row mb-4">
                            <div class="col-6">
                                <h4 class="small text-muted">
                                    Units: <strong class="text-secondary"><span>&#8358;</span>{{$plant->goals}}</strong>
                                </h4>
                                <?php 
                                $total_unit = $plant->unit;
                                $remain_unit = $plant->r_unit;

                                $diff = $total_unit - $remain_unit;
                                $percentage = ($diff /  $total_unit) * 100;                                
                                ?>
                            </div>
                            <div class="col-6">
                                <h4 class="small text-muted">
                                    Period: <strong class="text-secondary">{{$plant->duration}} Months</strong>
                                </h4>
                                <?php 
                                /*$month = $plant->duration;
                                $now = \Carbon\Carbon::now();
                                $plant_duration = $plant->created_at;
                                
                                $dif = $plant_duration->diffInMonths($now);

                                $percentage_ = ( $dif / $month ) * 100;*/
                                ?>
                                <!---<div class="js-hr-progress progress" style="height: 6px;">
                                    <div class="js-hr-progress-bar progress-bar bg-trado2" role="progressbar"
                                        style="width: 0%;" aria-valuenow="1" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>-->
                            </div>
                        </div>
                        <div class="js-hr-progress progress" style="height: 6px;">
                            <div class="js-hr-progress-bar progress-bar bg-trado" role="progressbar"
                                style="width: {{$percentage}}%;" aria-valuenow="1" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div><br/>

                        <div><span class="fa fa-map-marker text-trado"></span> &nbsp; <span class="text-trado1">{{$plant->location}}</span></div>
                        <br/>
                        <!--<div><span class="fa fa-clock text-trado"></span> &nbsp; <span class="text-trado1">Investment starts In</span></div>-->
                        <!-- Countdown
                        <div class="js-countdown row mb-5"
                   data-end-date="{{$plant->countdown}}"
                   data-month-format="%m"
                   data-days-format="%D"
                   data-hours-format="%H"
                   data-minutes-format="%M"
                   data-seconds-format="%S">
                <div class="col-3">
                  <strong class="js-cd-days h5 text-trado font-weight-semi-bold mb-0"></strong>
                  <span class="h6 font-weight-normal mb-0">Days</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-hours h5 text-trado font-weight-semi-bold mb-0"></strong>
                  <span class="h6 font-weight-normal mb-0">Hours</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-minutes h5 text-trado font-weight-semi-bold mb-0"></strong>
                  <span class="h6 font-weight-normal mb-0">Mins</span>
                </div>
                <div class="col-3">
                  <strong class="js-cd-seconds h5 text-trado font-weight-semi-bold mb-0"></strong>
                  <span class="h6 font-weight-normal mb-0">Secs</span>
                </div>
              </div>
              End Countdown -->
                        <!-- End Goal -->
                    </div>
                    <!-- End Charts Content -->
                </article>
                <!-- End Charts -->
            </div>
            @endforeach
        </div>
        <br/>
        <div class="w-md-80 w-lg-65 text-center mx-auto mb-9">
            <a href="/farmshop">
                <button type="submit" class="btn btn-sm btn-trado transition-3d-hover mr-1 text-center">View farmshop</button>
            </a>
        </div>
        <br/>
        @else
        <div class="w-md-80 w-lg-65 text-center mx-auto mb-9">
            <a href="/farmshop">
                <button type="submit" class="btn btn-sm btn-trado transition-3d-hover mr-1 text-center">Empty Farmshop</button>
            </a>
        </div>
        <br/>
        @endif
    </div>
    <!-- End Plantation Section -->
 
    
    <!-- Mockup Block -->
    <div class="container">
      <div class="row align-items-lg-center">
        <div class="col-lg-4 mb-7 mb-lg-0">
          <!-- Title -->
          <div class="pr-lg-4">
            <h2 class="h4 text-trado1"><strong>Secured And Insured</strong></h2>
            <p class="mb-0">We partnered with <b>Nigeria Agriculture Insurance Corporation</b> to insure all existing farm projects.</p>
            <p>Our Payment gateway by Paystack.
 Simple and Secure.</p>
            <br/>
            <p>At Trado we give you the best!</p>
          </div>
          <!-- End Title -->
        </div>
        <div class="col-lg-1 mb-1 mb-lg-0">
        </div>

        <div class="col-lg-6 mb-7 mb-lg-0 ">
          <!-- SVG Icon -->
          <img src="./img/insurance.png" alt="">
          <br/>
          <!-- End SVG Icon -->
          <img src="./img/paystack.png" class="logo center" alt="Logo" style="width: 220px; height: 220px; margin-left: auto; margin-right: auto; display: block;">
        </div>
      </div>
    </div>
    <!-- End Mockup Block -->
    
    <div class="container u-space-1">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
        <h2 class="text-trado">How it works</h2>
      </div>
      <!-- End Title -->

      <div class="row">
        <div class="col-md-6 mb-7">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <span class="u-icon u-icon-danger--air u-icon--xl rounded-circle mb-7">
              <span class="fa fa-user-plus u-icon__inner u-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Register</h3>
            <p class="mb-md-0">Investors sign up on our website to create their own personalized Trado profile.</p>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 mb-7">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <span class="u-icon u-icon-primary--air u-icon--xl rounded-circle mb-7">
              <span class="fa fa-money-bill-alt u-icon__inner u-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Invest</h3>
            <p class="mb-md-0">Investors surf through our platform, subscribe for a crop investment of choice and number of units to fund, then proceed to securely remit funds.</p>
          </div>
          <!-- End Icon Blocks -->
        </div>

        <div class="col-md-6 mb-7">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <span class="u-icon u-icon-danger--air u-icon--xl rounded-circle mb-7">
              <span class="fa fa-clock u-icon__inner u-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Monitor</h3>
            <p class="mb-md-0">Monitor his investment as it's being used on the subscribed plan.</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
        
        <div class="col-md-6 mb-7">
          <!-- Icon Blocks -->
          <div class="text-center px-lg-3">
            <span class="u-icon u-icon-primary--air u-icon--xl rounded-circle mb-7">
              <span class="fa fa-money-check u-icon__inner u-icon__inner-bottom-minus"></span>
            </span>
            <h3 class="h5">Get Paid</h3>
            <p class="mb-md-0">At the end of the farm cycle, investors gets his invested capital plus the specified return on investment ROI credited to his account.</p>
          </div>
          <!-- End Icon Blocks -->
        </div>
      </div>

    <!-- Team Section 
    <div class="container  u-space-1">
        <!-- Title 
        <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
            <h2 class="text-trado">Trust the <span class="font-weight-bold">professionals</span></h2>
            <p>Our top professionals are ready to help with your business</p>
        </div>
        <!-- End Title -->

        <!-- Slick Carousel
        <div class="js-slick-carousel u-slick u-slick--gutters-3" data-slides-show="2" data-slides-scroll="1"
            data-pagi-classes="text-center u-slick__pagination mt-7 mb-0" data-responsive='[{
           "breakpoint": 992,
           "settings": {
             "slidesToShow": 1
           }
         }, {
           "breakpoint": 768,
           "settings": {
             "slidesToShow": 1
           }
         }, {
           "breakpoint": 554,
           "settings": {
             "slidesToShow": 1
           }
         }]'>
            <div class="js-slide px-3">
                <!-- Team 
                <div class="row">
                    <div
                        class="col-sm-6 d-sm-flex align-items-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
                        <h3 class="h5 mb-4">Maria Muszynska</h3>
                        <span class="badge u-badge-primary badge-pill u-badge-bigger mb-3">#maria</span>
                        <p class="font-size-14">I am an ambitious workaholic, but apart from that, pretty simple
                            person.</p>

                        <!-- Social Networks
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-facebook-f u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-google u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-twitter u-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded mx-auto" src="./assets/img/350x400/img1.jpg"
                            alt="Image Description">
                    </div>
                </div>
                <!-- End Tea
            </div>

            <div class="js-slide px-3">
                <!-- Team 
                <div class="row">
                    <div
                        class="col-sm-6 d-sm-flex align-items-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
                        <h3 class="h5 mb-4">Jack Wayley</h3>
                        <span class="badge u-badge-primary badge-pill u-badge-bigger mb-3">#jack</span>
                        <p class="font-size-14">I am an ambitious workaholic, but apart from that, pretty simple
                            person.</p>

                        <!-- Social Networks 
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-facebook-f u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-google u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-twitter u-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded mx-auto" src="./assets/img/350x400/img2.jpg"
                            alt="Image Description">
                    </div>
                </div>
                <!-- End Team 
            </div>

            <div class="js-slide px-3">
                <!-- Team 
                <div class="row">
                    <div
                        class="col-sm-6 d-sm-flex align-items-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
                        <h3 class="h5 mb-4">Emmely Jackson</h3>
                        <span class="badge u-badge-primary badge-pill u-badge-bigger mb-3">#emmely</span>
                        <p class="font-size-14">I am an ambitious workaholic, but apart from that, pretty simple
                            person.</p>

                        <!-- Social Networks
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-facebook-f u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-google u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-twitter u-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks 
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded mx-auto" src="./assets/img/350x400/img3.jpg"
                            alt="Image Description">
                    </div>
                </div>
                <!-- End Team
            </div>

            <div class="js-slide px-3">
                <!-- Team
                <div class="row">
                    <div
                        class="col-sm-6 d-sm-flex align-items-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
                        <h3 class="h5 mb-4">Mark McManus</h3>
                        <span class="badge u-badge-primary badge-pill u-badge-bigger mb-3">#mark</span>
                        <p class="font-size-14">I am an ambitious workaholic, but apart from that, pretty simple
                            person.</p>

                        <!-- Social Networks
                        <ul class="list-inline mt-auto mb-0">
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-facebook-f u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-google u-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mx-0">
                                <a class="u-icon u-icon--sm u-icon-secondary--air" href="#">
                                    <span class="fab fa-twitter u-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Social Networks 
                    </div>
                    <div class="col-sm-6">
                        <img class="img-fluid rounded mx-auto" src="./assets/img/350x400/img4.jpg"
                            alt="Image Description">
                    </div>
                </div>
                <!-- End Team 
            </div>
        </div>
        <!-- End Slick Carousel
    </div>
    <!-- End Team Section -->

    

    <!-- Subscribe Section -->
    <div class="">
        <div class="container">
            <!-- Title -->
            <div class="text-center w-md-60 mx-auto mb-7">
                <h2 class="text-trado"><span class="font-weight-bold">Stay</span> in the know</h2>
                <p>Subscribe for newsletters</p>
            </div>
            <!-- End Title -->

            <!-- Input -->
            <div class="w-md-50 w-lg-40 mx-auto">
                <form class="js-validate js-form-message" method="post" action="/subscribe">
                    {{ csrf_field() }}
                    <div
                        class="js-focus-state input-group input-group-lg u-form u-form--lg u-form--pill u-form--no-brd u-form--no-addon-brd">
                        <input type="email" class="form-control u-form__input" name="email" required
                            placeholder="Enter your email address" aria-label="Enter your email address">
                        <span class="input-group-append u-form__append">
                            <button type="submit" class="btn text-trado u-btn-white">
                                <span class="fas fa-paper-plane"></span>
                            </button>
                        </span>
                        
                    </div>
                </form>
                @if ($errors->has('email'))
                             <span class="text-trado small" id="update">
                              <strong>{{ $errors->first('email') }}</strong>
                             </span>
                        @endif
                        @if (session('subscribe'))
                        <span class="text-trado1" id="update">
                          <strong>{{ session('subscribe') }}</strong>
                        </span>
                        @endif
                <script>
                    $(function(){
                        function hide(){
                            $('span#update').hide();
                        }
                       setTimeout(hide, 5000); 
                    });
                </script>
            </div>
            <!-- End Input -->
        </div>
    </div>
    <!-- End Subscribe Section -->

</main>
<!-- ========== END MAIN ========== -->
@endsection
