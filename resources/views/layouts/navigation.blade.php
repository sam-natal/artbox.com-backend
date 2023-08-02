        <!-- SIDENAVBAR -->
        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">

                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="{{ url('/dashboard') }}">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">A</span><span class="font-size-xl text-primary">DMINISTRATOR</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- Side User -->
                    <div class="content-side content-side-full   align-parent">
                        <img class="" src="assets/img/photos/art-box-squaire.png" alt="" />
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li class="open">
                                <a href="{{ url('/dashboard') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboards</span></a>
                            </li>

                            <!-- <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden"></span></li> -->
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu"><i class="si si-puzzle"></i><span class="sidebar-mini-hide"></span>ARTS</a>
                                <ul>
                                    <li>
                                        <a href="{{ url('/addart') }}">Add Art</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/allarts') }}">Manage Arts</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="open">
                                <a href="{{ url('/sales') }}"><i class="si si-cup"></i><span class="sidebar-mini-hide">Orders & Sales</span></a>
                            </li>

                            <li>
                                <a href="{{ url('/managechat') }}"><i class="si si-vector"></i><span class="sidebar-mini-hide">Manage Chats</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>

        <!-- HEADER -->

        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="content-header-section">
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-navicon"></i>
                    </button>

                  

                    <!-- Color Themes (used just for demonstration) -->
                    <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-paint-brush"></i>
                        </button>
                        <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown">
                            <h6 class="dropdown-header text-center">
                                Color Themes
                            </h6>
                            <div class="row no-gutters text-center mb-5">
                                <div class="col-4 mb-5">
                                    <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                                <div class="col-4 mb-5">
                                    <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                        <i class="fa fa-2x fa-circle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_toggle">
                                Sidebar Style
                            </button>
                            <div class="dropdown-divider"></div>
                        </div>
                    </div>
                    <!-- END Color Themes -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="content-header-section">
                    <!-- User Dropdown -->
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}<i class="fa fa-angle-down ml-5"></i>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                            <a class="dropdown-item" href="admin-profile.php">
                                <i class="si si-user mr-5"></i> Profile
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- Toggle Side Overlay -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="dropdown-item" href="change-password.php" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="si si-wrench mr-5"></i> Settings
                            </a>
                            <!-- END Side Overlay -->

                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    <i class="si si-logout mr-5"></i>{{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>

                        </div>
                    </div>
                    <!-- END User Dropdown -->

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Loader -->
            <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header content-header-fullrow text-center">
                    <div class="content-header-item">
                        <i class="fa fa-sun-o fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>