


<header id="header" class=" " data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">

                                <img class="header_logo" alt="logo" width="auto" height="35" src="{{ asset('frontend/image/klimatyzacjax.png') }}">

                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-line header-nav-bottom-line header-nav-bottom-line-active-text-light header-nav-dropdowns-dark header-nav-light-text">
                            <div class="header-nav-main header-nav-main-text-capitalize header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link" href="{{ route('frontend_index') }}">
                                                START
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('klienci') }}">
                                                KLIENCI
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{  route('serwis')}}">
                                                SERWIS
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('oferta') }}">
                                                KLIMATYZACJA
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('kontakt') }}">
                                                KONTAKT
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('wazne')}}">
                                                WAŻNE INFORMACJE
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{route('login')}}">
                                                LOGIN
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>


                        <button class="btn header-btn-collapse-nav ms-3 ms-sm-4" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-features header-nav-features-no-border p-static">
        <div class="header-nav-feature header-nav-features-search header-nav-features-search-reveal header-nav-features-search-reveal-big-search header-nav-features-search-reveal-big-search-full">
            <div class="container">
                <div class="row h-100 d-flex">
                    <div class="col h-100 d-flex">
                        <form role="search" class="d-flex h-100 w-100" action="page-search-results.html" method="get">
                            <div class="big-search-header input-group">
                                <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Type and hit enter...">
                                <a href="#" class="header-nav-features-search-hide-icon"><i class="fas fa-times header-nav-top-icon"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
