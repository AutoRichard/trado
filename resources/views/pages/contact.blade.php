@extends('layouts.app')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Hero Section -->
    <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll"
        data-options='{direction: "normal"}'>
        <!-- Apply your Parallax background image here -->
        <div class="divimage dzsparallaxer--target"
            style="height: 120%; background-image: url(./img/trad.jpg);"></div>

        <!-- Content -->
        <div class="container position-relative u-space-5-top u-space-3-bottom z-index-2">
            <div class="w-lg-80 text-center mx-auto">
                <h1 class="display-3 font-size-48--md-down text-white font-weight-bold">Got a question?</h1>
                <p class="lead text-white">We'd love to talk about how we can help you.</p>
            </div>
        </div>
        <!-- End Content -->
    </div>
    <!-- End Hero Section -->

    <!-- Contacts Info Section -->
    <div class="clearfix">
        <div class="row">
            <div class="col-sm-6 col-lg-4 u-ver-divider u-ver-divider--none-lg">
                <!-- Contacts Info -->
                <div class="text-center py-5">
                    <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-4">
                        <span class="fa fa-map-marker-alt u-icon__inner"></span>
                    </span>
                    <h2 class="h6 mb-0">Address</h2>
                    <p class="mb-0">NO. 10 Obafemi Awolowo Way, Treasure Plaza Igbona, Oshogbo, Osun State</p>
                </div>
                <!-- End Contacts Info -->
            </div>

            <div class="col-sm-6 col-lg-4 u-ver-divider u-ver-divider--none-lg">
                <!-- Contacts Info -->
                <div class="text-center py-5">
                    <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-4">
                        <span class="fa fa-envelope u-icon__inner"></span>
                    </span>
                    <h3 class="h6 mb-0">Email</h3>
                    <p class="mb-0">info@trado.ng</p>
                </div>
                <!-- End Contacts Info -->
            </div>

            <div class="col-sm-12 col-lg-4 u-ver-divider u-ver-divider--none-lg">
                <!-- Contacts Info -->
                <div class="text-center py-5">
                    <span class="u-icon u-icon-primary--air u-icon--lg rounded-circle mb-4">
                        <span class="fa fa-phone u-icon__inner"></span>
                    </span>
                    <h3 class="h6 mb-0">Phone Number</h3>
                    <p class="mb-0">+234 814 6365 191</p>
                </div>
                <!-- End Contacts Info -->
            </div>
        </div>
    </div>
    <!-- End Contacts Info Section -->

    <!-- Contact Form Section -->
    <div class="container">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-auto mb-9">
            <h2 class="text-trado1 font-weight-normal">Contact <span class="font-weight-bold">Us</span>
            </h2>
            <p>Whether you have questions or you would just like to say hello, contact us.</p>
            @if(session('status'))
            <span class="text-trado1" id="status">{{session('status')}}</span>
            <script>
            $(function(){
                $('#status').hide(50000);
            });
            </script>    
            @endif        
        </div>
        <!-- End Title -->

        <div class="w-lg-80 mx-auto">
            <!-- Contacts Form -->
            <form class="js-validate" method="post" action="/contact">
                {{csrf_field()}}
                <div class="row">
                    <!-- Input -->
                    <div class="col-sm-6 mb-6">
                        <div class="js-form-message">
                            <label class="h6 small d-block text-uppercase">
                                Your name
                                <span class="text-danger">*</span>&nbsp;
                                @if ($errors->has('name'))
                                  <span class="text-danger small">
                                    <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                                 @endif
                            </label>

                            <div class="js-focus-state input-group u-form">
                                <input class="form-control u-form__input" type="text" name="name" required
                                    placeholder="Name" aria-label="Name"
                                    data-msg="Please enter your name." data-error-class="u-has-error"
                                    data-success-class="u-has-success" value="{{old('name')}}">
                            </div>
                        </div>
                    </div>
                    <!-- End Input -->

                    <!-- Input -->
                    <div class="col-sm-6 mb-6">
                        <div class="js-form-message">
                            <label class="h6 small d-block text-uppercase">
                                Your email address
                                <span class="text-danger">*</span>&nbsp;
                                @if ($errors->has('email'))
                                <span class="text-danger small">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            </label>

                            <div class="js-focus-state input-group u-form">
                                <input class="form-control u-form__input" type="email" name="email" required
                                    placeholder="name@mail.com" aria-label="name@mail.com"
                                    data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                    data-success-class="u-has-success" value="{{old('email')}}">
                            </div>
                        </div>
                    </div>
                    <!-- End Input -->

                    <div class="w-100"></div>

                    <!-- Input -->
                    <div class="col-sm-6 mb-6">
                        <div class="js-form-message">
                            <label class="h6 small d-block text-uppercase">
                                Your Phone Number
                                <span class="text-danger">*</span>
                                @if ($errors->has('number'))
                                <span class="text-danger small">
                                    <strong>{{ $errors->first('number') }}</strong>
                                </span>
                            @endif
                            </label>

                            <div class="js-focus-state input-group u-form">
                                <input class="form-control u-form__input" type="number" name="number" required
                                    placeholder="+234 803 0000 000" aria-label="1-800-643-4500"
                                    data-msg="Please enter a valid phone number." data-error-class="u-has-error"
                                    data-success-class="u-has-success" value="{{old('number')}}">
                            </div>
                        </div>
                    </div>
                    <!-- End Input -->
                </div>

                <!-- Input -->
                <div class="js-form-message mb-9">
                    <label class="h6 small d-block text-uppercase">
                        How can we help you?
                        <span class="text-danger">*</span>
                        @if ($errors->has('content'))
                                <span class="text-danger small">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                    </label>

                    <div class="js-focus-state input-group u-form">
                        <textarea class="form-control u-form__input" rows="4" name="content" required
                            placeholder="Hi there, I would like to ..." aria-label="Hi there, I would like to ..."
                            data-msg="Please enter a reason." data-error-class="u-has-error"
                            data-success-class="u-has-success">{{old('content')}}</textarea>
                    </div>
                </div>
                <!-- End Input -->

                <div class="text-center">
                    <button type="submit"
                        class="btn btn-trado u-btn-primary u-btn-wide transition-3d-hover mb-4">Submit</button>
                    <p class="small">We'll get back to you as soon as possible</p>
                </div>
            </form>
            <!-- End Contacts Form -->
        </div>
    </div>
    <!-- End Contact Form Section -->
</main>
<!-- ========== END MAIN ========== -->
@endsection