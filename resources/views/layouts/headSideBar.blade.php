<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/') }}" class="nav-link">Boutique</a>
    </li>
</ul>
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Brad Diesel
                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">Call me whenever you can...</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            John Pierce
                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">I got your message bro</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            Nora Silvester
                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                        </h3>
                        <p class="text-sm">The subject goes here</p>
                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-th-large"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <div class="dropdown-divider"></div>
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                       <img width="42" class="rounded-circle" src="{{ Auth::user()->image }}" alt="">
                    </button>
                </div>
                <div class="col-md-8">
                    {{ Auth::user()->Name }}
                    <div class="dropdown-divider"></div>
                    {{ Auth::user()->email }}
                    <div class="dropdown-divider"></div>
                    {{ Auth::user()->number }}
                </div>
            </div>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="m-auto btn btn-warning">Logout</button>
            </form>
        </div>
    </li>
</ul>
{{-- <div class="app-header__logo">
    <div class="logo-src"></div>
    <div class="header__pane ml-auto">
        <div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
</div>
<div class="app-header__mobile-menu">
    <div>
        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div>
</div>
<div class="app-header__menu">
    <span>
        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
            <span class="btn-icon-wrapper">
                <i class="fa fa-ellipsis-v fa-w-6"></i>
            </span>
        </button>
    </span>
</div>
<div class="app-header__content">
    <div class="app-header-right">
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="p-0 btn">
                                <img width="42" class="rounded-circle"
                                    src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-info">
                                        <div class="menu-header-image opacity-2"
                                            style="background-image: url('assets/images/dropdown-header/city3.jpg');">
                                        </div>
                                        <div class="menu-header-content text-left">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle"
                                                            src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">{{ Auth::user()->name }}
                                                            </div>
                                                            <div class="widget-subheading opacity-8">{{ Auth::user()->email }}
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <form method="POST" action="{{ route('logout') }}">
                                                                @csrf
                                                                <button
                                                                    class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-area-xs" style="height: 150px;">
                                    <div class="scrollbar-container ps">
                                        <ul class="nav flex-column">
                                            <li class="nav-item-header nav-item">Activity
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">8
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Recover
                                                    Password
                                                </a>
                                            </li>
                                            <li class="nav-item-header nav-item">My Account
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Settings
                                                    <div class="ml-auto badge badge-success">New
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Messages
                                                    <div class="ml-auto badge badge-warning">512
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Logs
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider mb-0 nav-item"></li>
                                </ul>
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6">
                                            <button
                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                <i
                                                    class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                Message Inbox
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button
                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i
                                                    class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                <b>Support Tickets</b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item">
                                    </li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-wide btn btn-primary btn-sm">
                                            Open Messages
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left  ml-3 header-user-info">
                        <div class="widget-heading">
                            {{ Auth::user()->name }}
                        </div>
                        <div class="widget-subheading">
                            {{ Auth::user()->email }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
