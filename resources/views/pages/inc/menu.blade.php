<!-- Breadcrumb Section -->
<div class="bg-trado">
    <div class="container space-top-1 pb-3">
        <div class="row">
            <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
                <div
                    class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
                    <!-- Breadcrumb -->
                    <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                        <li class="breadcrumb-item"><a class="breadcrumb-link"
                                href="/">Home</a>
                        </li>
                        @if(Request::segment(1) == 'edit')
                        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        @elseif(Request::segment(1) == 'password')
                        <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                        @else                        
                        <li class="breadcrumb-item active" aria-current="page">{{ucfirst(Request::segment(1))}}</li>
                        @endif
                    </ol>
                    <!-- End Breadcrumb -->

                    <!-- Breadcrumb Nav Toggle Button -->
                    <div class="d-lg-none">
                        <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                            aria-label="Toggle navigation" aria-expanded="false"
                            aria-controls="breadcrumbNavBar" data-toggle="collapse"
                            data-target="#breadcrumbNavBar">
                            <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                                <span class="u-hamburger__inner"></span>
                            </span>
                        </button>
                    </div>
                    <!-- End Breadcrumb Nav Toggle Button -->
                </div>
            </div>

            <div class="col-lg-7 order-lg-1">
                <!-- User Info -->
                <div class="media d-block d-sm-flex align-items-sm-center">
                    <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                        <img class="img-fluid rounded-circle" id="profile" src="./storage/{{auth::user()->profile_image}}"
                            alt="Image Description">
                        <span
                            class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                            <span class="fas fa-check"></span>
                        </span>
                    </div>
                    <div class="media-body">
                        <h1 class="h3 text-white font-weight-medium mb-1">{{auth::user()->name}}</h1>
                        <span class="d-block text-white">{{auth::user()->email}}</span>
                    </div>
                </div>
                <!-- End User Info -->
            </div>
        </div>
    </div>

    <div class="container space-bottom-1 space-bottom-lg-0">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
            <!-- Navbar -->
            <div
                class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
                <div class="u-header__section bg-transparent">
                    <nav
                        class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                        <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            <ul class="navbar-nav u-header__navbar-nav">
                                <!-- General -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                    data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="generalDropdown"
                                        class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="generalDropdownMenu">
                                        General
                                    </a>

                                    <ul id="generalDropdownMenu"
                                        class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                        style="min-width: 230px;" aria-labelledby="generalDropdown">
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="/dashboard">Dashboard</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="/farmshop">Farm Shop</a></li>
                                    </ul>
                                </li>
                                <!-- General -->

                                <!-- Account Settings -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                    data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="accountSettingsDropdown"
                                        class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="accountSettingsDropdownMenu">
                                        Account settings
                                    </a>

                                    <ul id="accountSettingsDropdownMenu"
                                        class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                        style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="/edit">Edit profile</a></li>
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="/password">Change password</a></li>
                                        <!--<li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="notifications.html">Notifications</a></li>-->
                                    </ul>
                                </li>
                                <!-- Account Settings -->

                                <!-- Billing -->
                                <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                    data-animation-in="slideInUp" data-animation-out="fadeOut">
                                    <a id="billingDropdown"
                                        class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="billingDropdownMenu">
                                        Transaction
                                    </a>

                                    <ul id="billingDropdownMenu"
                                        class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                        style="min-width: 230px;" aria-labelledby="billingDropdown">
                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                href="/activity">Activity</a></li>
                                    </ul>
                                </li>
                                <!-- Billing -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navbar -->

            <div class="ml-lg-auto">
                <!-- Button -->
                <!--<a class="btn btn-sm btn-soft-white text-nowrap transition-3d-hover" href="#requestPaymentModal"
                    data-modal-target="#requestPaymentModal">
                    <span class="fas fa-plus small mr-2"></span>
                    Request a Payment
                </a>-->
                <!-- End Button -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->