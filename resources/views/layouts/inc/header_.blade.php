<!-- ========== HEADER ========== -->
<header id="header" class="u-header"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="u-header__section">
        <div id="logoAndNav" class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                <div class="d-flex col-lg-2 justify-content-between pl-0">
                    <!-- Logo -->
                    <a class="navbar-brand u-header__navbar-brand" href="/" aria-label="Front">
                        <img src="https://tradoapp.herokuapp.com/img/trado.png" class="logo" alt="Logo">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation"
                        aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger" class="u-hamburger__box">
                            <span class="u-hamburger__inner"></span>
                        </span>
                    </button>
                </div>

                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
                    <ul class="navbar-nav u-header__navbar-nav mx-lg-auto">
                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                            data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="/"
                                aria-labelledby="pagesSubMenu">
                                Home
                            </a>
                        </li>
                        <!-- End Pages -->

                        @if(Auth::check())
                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                            data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="/dashboard"
                                aria-labelledby="pagesSubMenu">
                                Dashboard
                            </a>
                        </li>
                        <!-- End Pages -->
                        @endif

                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                            data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="/about"
                                aria-labelledby="pagesSubMenu">
                                About Us
                            </a>
                        </li>
                        <!-- End Pages -->

                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item" data-event="hover" data-animation-in="slideInUp"
                            data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="/contact"
                                aria-labelledby="pagesSubMenu">
                                Contact Us
                            </a>
                        </li>
                        @if(Auth::check() == false)
                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item authenticate-link" data-event="hover"
                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="nav-link u-header__nav-link" href="/login"
                                aria-labelledby="pagesSubMenu">
                                Log in
                            </a>
                        </li>
                        <!-- End Pages -->

                        <!-- Pages -->
                        <li class="nav-item u-header__nav-item authenticate-link" data-event="hover"
                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="btn btn-sm btn-primary u-btn-primary transition-3d-hover"
                                href="/register" aria-labelledby="pagesSubMenu"
                                style="background-color: #4a6f1b; border-color: #4a6f1b;">
                                Register
                            </a>
                        </li>
                        <!-- End Pages -->
                        @else
                        <li class="nav-item u-header__nav-item authenticate-link" data-event="hover"
                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                            <a id="pagesMegaMenu" class="btn btn-sm btn-primary u-btn-primary transition-3d-hover"
                                href="/logout" aria-labelledby="pagesSubMenu"
                                style="background-color: #4a6f1b; border-color: #4a6f1b;">
                                Log Out
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
                <!-- End Navigation -->

                <!-- Button -->
                <div class="col-md-4 col-lg-3 nav-item d-none d-md-inline-block pr-0 text-md-right">
                    @if(Auth::check())
                    <a class="btn btn-sm btn-primary u-btn-primary transition-3d-hover" href="/logout"
                        style="background-color: #4a6f1b; border-color: #4a6f1b;">
                        Log out
                    </a>
                    @else
                    <a class="btn btn-sm btn-primary u-btn-primary transition-3d-hover" href="/login"
                        style="background-color: transparent; border-color: #4a6f1b; color: #4a6f1b;">
                        Log In
                    </a>
                    <a class="btn btn-sm btn-primary u-btn-primary transition-3d-hover" href="/register"
                        style="background-color: #4a6f1b; border-color: #4a6f1b;">
                        Register
                    </a>
                    @endif
                </div>
                <!-- End Button -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->