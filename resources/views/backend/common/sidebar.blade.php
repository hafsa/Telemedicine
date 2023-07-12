<div class="left-sidebar">
    <!-- LOGO -->
    <div class="brand">
        <a href="{{ route('doctor.dashboard') }}" class="logo">
            <span>
                <img src=" {{ url('doctor/assets/images/logo-sm.png') }}" alt="logo-small" class="logo-sm">
            </span>
            <span>
                <img src=" {{ url('doctor/assets/images/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                <img src=" {{ url('doctor/assets/images/logo-dark.png') }}" alt="logo-large" class="logo-lg logo-dark">
            </span>
        </a>
    </div>
    <div class="sidebar-user-pro media border-end">                    
        <div class="position-relative mx-auto">
            <img src=" {{ url('doctor/assets/images/users/user-4.jpg') }}" alt="user" class="rounded-circle thumb-md">
            <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
        </div>
        <div class="media-body ms-2 user-detail align-self-center">
            <h5 class="font-14 m-0 fw-bold">{{ Auth::User()->name ?? null }} </h5>  
            <p class="opacity-50 mb-0">{{ Auth::User()->email ?? null }}</p>          
        </div>                    
    </div>
    
    <!-- Tab panes -->

    <!--end logo-->
    <div class="menu-content h-100" data-simplebar>
        <div class="menu-body navbar-vertical">
            <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                    @if(Auth::guard('superadmin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="#admindashboard" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="admindashboard">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                        <div class="collapse" id="admindashboard">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.dashboard') }}">Dashboard</a>
                                        </li>
                                </li>
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#admindoctors" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="admindoctors">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Users</span>
                        </a>
                        <div class="collapse" id="admindoctors">
                            <ul class="nav flex-column">
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.userslist') }}" class="nav-link ">Patients</a>
                                </li><!--end nav-item-->
                            </ul>
                            <ul class="nav flex-column">
                                <!--end nav-item-->
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.doctorlist') }}" class="nav-link ">Doctors</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->

                    <li class="nav-item">
                        <a class="nav-link" href="#adminSpecialization" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="adminSpecialization">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>specialization</span>
                        </a>
                        <div class="collapse" id="adminSpecialization">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.specializationlist') }}">Specialization</a>
                                        </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#adminsymptoms" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="adminsymptoms">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>symptoms</span>
                        </a>
                        <div class="collapse " id="adminsymptoms">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.symptomslist') }}">Symptoms</a>
                                        </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#adminbanner" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="adminbanner">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Banners</span>
                        </a>
                        <div class="collapse " id="adminbanner">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.bannerlist') }}">Banners</a>
                                        </li>
                                </li>
                            </ul>
                        </div>
                    </li>

                    @elseif(Auth::guard('doctor')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAnalytics">
                            <i class="ti ti-stack menu-icon"></i>
                            <span>Dashboard</span>
                        </a>
                        <div class="collapse " id="sidebarAnalytics">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    
                                        @if(Auth::guard('superadmin')->check())
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.dashboard') }}">Dashboard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.dashboard') }}">Dashboard</a>
                                        </li>
                                        @elseif(Auth::guard('doctor')->check())
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('superadmin.doctorlist') }}">Dashboard</a>
                                        </li>
                                        @endif
                                    
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a href="{{ route('superadmin.doctorlist') }}" class="nav-link ">Doctors</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarAnalytics-->
                    </li><!--end nav-item-->
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCrypto">
                            <i class="ti ti-currency-bitcoin menu-icon"></i>
                            <span>Crypto</span>
                        </a>
                        <div class="collapse " id="sidebarCrypto">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-index.html">Dashboard</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-exchange.html">Exchange</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-wallet.html">Wallet</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-news.html">Crypto News</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-ico.html">ICO List</a>
                                </li><!--end nav-item-->
                                <li class="nav-item">
                                    <a class="nav-link" href="crypto-settings.html">Settings</a>
                                </li><!--end nav-item-->
                            </ul><!--end nav-->
                        </div><!--end sidebarCrypto-->
                    </li><!--end nav-item-->
                    
                </ul>
            </div><!--end sidebarCollapse-->
        </div>
    </div>    
</div>