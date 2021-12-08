<!DOCTYPE html>
<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,SCSS,HTML,RWD,Dashboard">

    <title>@yield('title')</title>

    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{url('css/app.css')}}">

    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-118965717-1');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
</head>
<body>
{{--aqui esta el sidebar, menu lateral izquierdo retraible--}}
<div class="sidebar sidebar-dark sidebar-fixed sidebar-self-hiding-xl" id="sidebar">
    {{--aqui esta el logo que encabeza el sidebar--}}
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    {{--    inicio del menu con listas y etiquetas a de class btn--}}
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        @yield('sidebar-list')
        {{--        boton directo sin sub listas y activo--}}
        {{--<li class="nav-item"><a class="nav-link" href="index.html">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg>
                Dashboard<span class="badge bg-info-gradient ms-auto">NEW</span></a></li>--}}
        {{--        titulo de una seccion de la lista (se puede usar para separa los modulos)--}}
        {{--        <li class="nav-title">Theme</li>--}}
        {{--        boton con sublista de botones, usos especificos--}}
        {{--<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                </svg>
                Base</a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span>
                        Accordion</a></li>
                <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span>
                        Breadcrumb</a></li>
                <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span>
                        Carousel</a></li>
                <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span>
                        Collapse</a></li>
                <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List
                        group</a></li>
                <li class="nav-item"><a class="nav-link" href="base/navs.html"><span class="nav-icon"></span> Navs</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span>
                        Pagination</a></li>
                <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span>
                        Popovers</a></li>
                <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span>
                        Progress</a></li>
                <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span>
                        Scrollspy</a></li>
                <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span>
                        Spinners</a></li>
                <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span>
                        Tables</a></li>
                <li class="nav-item"><a class="nav-link" href="base/tabs.html"><span class="nav-icon"></span> Tabs</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span>
                        Tooltips</a></li>
            </ul>
        </li>--}}
    </ul>
    {{--    boton para reajustar el sidebar a solo iconos visibles--}}
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>


{{--este es el aside de la parte derecha, normalmente oculto y se encarga de algunas notificaciones--}}
<div class="sidebar sidebar-light sidebar-lg sidebar-end sidebar-overlaid sidebar-self-hiding-xxl" id="aside">
    {{--    botones de encabezado--}}
    <div class="sidebar-header bg-transparent p-0">
        <ul class="nav nav-underline nav-underline-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-coreui-toggle="tab" href="#timeline" role="tab">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list"></use>
                    </svg>
                </a></li>
            <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#messages" role="tab">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speech"></use>
                    </svg>
                </a></li>
            <li class="nav-item"><a class="nav-link" data-coreui-toggle="tab" href="#settings" role="tab">
                    <svg class="icon">
                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                    </svg>
                </a></li>
        </ul>
        <button class="sidebar-close" type="button" data-coreui-close="sidebar">
            <svg class="icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-x"></use>
            </svg>
        </button>
    </div>
    {{--division de el contenido del aside en tres partes para cada boton--}}
    <div class="tab-content">
        {{--        primera vista aside--}}
        <div class="tab-pane active" id="timeline" role="tabpanel">
            <div class="list-group list-group-flush">
                <div
                    class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">
                    Today
                </div>
                <div class="list-group-item border-start-4 border-start-warning list-group-item-divider">
                    <div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                                                 alt="user@email.com"></div>
                    <div>Meeting with <strong>Lucas</strong></div>
                    <small class="text-medium-emphasis me-3">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>
                        1 - 3pm</small><small class="text-medium-emphasis">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>
                        Palo Alto, CA</small>
                </div>
                <div class="list-group-item border-start-4 border-start-info">
                    <div class="avatar avatar-lg float-end"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                                                 alt="user@email.com"></div>
                    <div>Skype with <strong>Megan</strong></div>
                    <small class="text-medium-emphasis me-3">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>
                        4 - 5pm</small><small class="text-medium-emphasis">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-skype"></use>
                        </svg>
                        On-line</small>
                </div>
                <div
                    class="list-group-item border-start-4 border-start-secondary bg-light text-center fw-bold text-medium-emphasis text-uppercase small">
                    Tomorrow
                </div>
                <div class="list-group-item border-start-4 border-start-danger list-group-item-divider">
                    <div>New UI Project - <strong>deadline</strong></div>
                    <small class="text-medium-emphasis me-3">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>
                        10 - 11pm</small><small class="text-medium-emphasis">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>
                        creativeLabs HQ</small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                                           alt="user@email.com"></div>
                    </div>
                </div>
                <div class="list-group-item border-start-4 border-start-success list-group-item-divider">
                    <div><strong>#10 Startups.Garden</strong> Meetup</div>
                    <small class="text-medium-emphasis me-3">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>
                        1 - 3pm</small><small class="text-medium-emphasis">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-location-pin"></use>
                        </svg>
                        Palo Alto, CA</small>
                </div>
                <div class="list-group-item border-start-4 border-start-primary list-group-item-divider">
                    <div><strong>Team meeting</strong></div>
                    <small class="text-medium-emphasis me-3">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calendar"></use>
                        </svg>
                        4 - 6pm</small><small class="text-medium-emphasis">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                        </svg>
                        creativeLabs HQ</small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/2.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/3.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                                           alt="user@email.com"></div>
                        <div class="avatar avatar-xs"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                                           alt="user@email.com"></div>
                    </div>
                </div>
            </div>
        </div>
        {{--        segunda vista aside--}}
        <div class="tab-pane p-3" id="messages" role="tabpanel">
            <div class="message">
                <div class="py-3 pb-5 me-3 float-start">
                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                             alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 me-3 float-start">
                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                             alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 me-3 float-start">
                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                             alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 me-3 float-start">
                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                             alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt...</small>
            </div>
            <hr>
            <div class="message">
                <div class="py-3 pb-5 me-3 float-start">
                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                             alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                </div>
                <div><small class="text-medium-emphasis">Lukasz Holeczek</small><small
                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                <div class="text-truncate fw-bold">Lorem ipsum dolor sit amet</div>
                <small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt...</small>
            </div>
        </div>
        {{--        tercera vista aside--}}
        <div class="tab-pane p-3" id="settings" role="tabpanel">
            <h6>Settings</h6>
            <div class="aside-options">
                <div class="clearfix mt-4">
                    <div class="form-check form-switch form-switch-lg">
                        <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox" checked="">
                        <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                            1</label>
                    </div>
                </div>
                <div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="aside-options">
                <div class="clearfix mt-3">
                    <div class="form-check form-switch form-switch-lg">
                        <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                        <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                            2</label>
                    </div>
                </div>
                <div><small class="text-medium-emphasis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></div>
            </div>
            <div class="aside-options">
                <div class="clearfix mt-3">
                    <div class="form-check form-switch form-switch-lg">
                        <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox">
                        <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                            3</label>
                    </div>
                </div>
            </div>
            <div class="aside-options">
                <div class="clearfix mt-3">
                    <div class="form-check form-switch form-switch-lg">
                        <input class="form-check-input me-0" id="flexSwitchCheckDefaultLg" type="checkbox" checked="">
                        <label class="form-check-label fw-semibold small" for="flexSwitchCheckDefaultLg">Option
                            4</label>
                    </div>
                </div>
            </div>
            <hr>
            <h6>System Utilization</h6>
            <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-thin">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-thin">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-medium-emphasis">11444GB/16384MB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-thin">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-medium-emphasis">243GB/256GB</small>
            <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small></div>
            <div class="progress progress-thin">
                <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <small class="text-medium-emphasis">25GB/256GB</small>
        </div>
    </div>
</div>
<div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg>
            </a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <nav class="header-nav ms-auto me-4">
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off"
                           value="light" onchange="handleThemeChange(this)">
                    <label class="btn btn-primary" for="btn-light-theme">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-sun"></use>
                        </svg>
                    </label>
                    <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off"
                           value="dark" onchange="handleThemeChange(this)">
                    <label class="btn btn-primary" for="btn-dark-theme">
                        <svg class="icon">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-moon"></use>
                        </svg>
                    </label>
                </div>
            </nav>
            <ul class="header-nav me-3">
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                                                                role="button" aria-haspopup="true"
                                                                aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg>
                        <span class="badge rounded-pill position-absolute top-0 end-0 bg-danger-gradient">5</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 notifications</strong></div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-follow"></use>
                            </svg>
                            New user registered</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-danger">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-unfollow"></use>
                            </svg>
                            User deleted</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-info">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart"></use>
                            </svg>
                            Sales report is ready</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-success">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-basket"></use>
                            </svg>
                            New client</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2 text-warning">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                            </svg>
                            Server overloaded</a>
                        <div class="dropdown-header bg-light"><strong>Server</strong></div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">348 Processes. 1/4 Cores.</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">11444GB/16384MB</small>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0"
     aria-valuemax="100"></div>
</span><small class="text-medium-emphasis">243GB/256GB</small>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                                                                role="button" aria-haspopup="true"
                                                                aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg>
                        <span class="badge rounded-pill position-absolute top-0 end-0 bg-warning-gradient">5</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Upgrade NPM &amp; Bower<span
                                    class="float-end"><strong>0%</strong></span></div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">ReactJS Version<span class="float-end"><strong>25%</strong></span>
                            </div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">VueJS Version<span class="float-end"><strong>50%</strong></span>
                            </div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Add new layouts<span class="float-end"><strong>75%</strong></span>
                            </div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Angular 8 Version<span
                                    class="float-end"><strong>100%</strong></span></div>
                            <span class="progress progress-thin">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
     aria-valuemax="100"></div>
</span>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all tasks</strong></a>
                    </div>
                </li>
                <li class="nav-item dropdown d-md-down-none"><a class="nav-link" data-coreui-toggle="dropdown" href="#"
                                                                role="button" aria-haspopup="true"
                                                                aria-expanded="false">
                        <svg class="icon icon-lg my-1 mx-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg>
                        <span class="badge rounded-pill position-absolute top-0 end-0 bg-info-gradient">7</span></a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 4 messages</strong></div>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/7.jpg"
                                                             alt="user@email.com"><span
                                            class="avatar-status bg-success"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small
                                        class="text-medium-emphasis float-end mt-1">Just now</small></div>
                                <div class="text-truncate font-weight-bold"><span class="text-danger">!</span> Important
                                    message
                                </div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/6.jpg"
                                                             alt="user@email.com"><span
                                            class="avatar-status bg-warning"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small
                                        class="text-medium-emphasis float-end mt-1">5 minutes ago</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/5.jpg"
                                                             alt="user@email.com"><span
                                            class="avatar-status bg-danger"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small
                                        class="text-medium-emphasis float-end mt-1">1:52 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 me-3 float-start">
                                    <div class="avatar"><img class="avatar-img" src="assets/img/avatars/4.jpg"
                                                             alt="user@email.com"><span
                                            class="avatar-status bg-info"></span></div>
                                </div>
                                <div><small class="text-medium-emphasis">John Doe</small><small
                                        class="text-medium-emphasis float-end mt-1">4:03 PM</small></div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                                <div class="small text-medium-emphasis text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a><a class="dropdown-item text-center border-top" href="#"><strong>View all messages</strong></a>
                    </div>
                </li>
            </ul>
            <ul class="header-nav me-4">
                <li class="nav-item dropdown d-flex align-items-center"><a class="nav-link py-0"
                                                                           data-coreui-toggle="dropdown" href="#"
                                                                           role="button" aria-haspopup="true"
                                                                           aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg"
                                                           alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg>
                            Updates<span class="badge badge-sm bg-info-gradient ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg>
                            Messages<span class="badge badge-sm badge-sm bg-success ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg>
                            Tasks<span class="badge badge-sm bg-danger-gradient ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg>
                            Comments<span class="badge badge-sm bg-warning-gradient ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg>
                            Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg>
                            Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg>
                            Payments<span class="badge badge-sm bg-secondary-gradient text-dark ms-2">42</span></a><a
                            class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg>
                            Projects<span class="badge badge-sm bg-primary-gradient ms-2">42</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg>
                            Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg>
                            Logout</a>
                    </div>
                </li>
            </ul>
            <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#aside')).show()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-applications-settings"></use>
                </svg>
            </button>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                </ol>
            </nav>
        </div>
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-primary-gradient">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
</svg>)</span></div>
                                <div>Users</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                href="#">Action</a><a
                                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                            href="#">Something else
                                        here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-info-gradient">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
</svg>)</span></div>
                                <div>Income</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                href="#">Action</a><a
                                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                            href="#">Something else
                                        here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-warning-gradient">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
</svg>)</span></div>
                                <div>Conversion Rate</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                href="#">Action</a><a
                                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                            href="#">Something else
                                        here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-danger-gradient">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
</svg>)</span></div>
                                <div>Sessions</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button"
                                        data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                href="#">Action</a><a
                                        class="dropdown-item" href="#">Another action</a><a class="dropdown-item"
                                                                                            href="#">Something else
                                        here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" height="70"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Traffic</h4>
                            <div class="small text-medium-emphasis">January - July 2021</div>
                        </div>
                        <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                            <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                                <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off">
                                <label class="btn btn-outline-secondary"> Day</label>
                                <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off"
                                       checked="">
                                <label class="btn btn-outline-secondary active"> Month</label>
                                <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off">
                                <label class="btn btn-outline-secondary"> Year</label>
                            </div>
                            <button class="btn btn-primary" type="button">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                        <canvas class="chart" id="main-chart" height="300"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row row-cols-1 row-cols-md-5 text-center">
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Visits</div>
                            <div class="fw-semibold">29.703 Users (40%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-success-gradient" role="progressbar" style="width: 40%"
                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Unique</div>
                            <div class="fw-semibold">24.093 Users (20%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-info-gradient" role="progressbar" style="width: 20%"
                                     aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Pageviews</div>
                            <div class="fw-semibold">78.706 Views (60%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-warning-gradient" role="progressbar" style="width: 60%"
                                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">New Users</div>
                            <div class="fw-semibold">22.123 Users (80%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-danger-gradient" role="progressbar" style="width: 80%"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Bounce Rate</div>
                            <div class="fw-semibold">40.15%</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                     aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-1" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">89k</div>
                                <div class="text-uppercase text-medium-emphasis small">friends</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">459</div>
                                <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-2" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">973k</div>
                                <div class="text-uppercase text-medium-emphasis small">followers</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">1.792</div>
                                <div class="text-uppercase text-medium-emphasis small">tweets</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon text-white my-4" style="height: 3rem; width: 3rem;">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-3" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">500+</div>
                                <div class="text-uppercase text-medium-emphasis small">contacts</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">292</div>
                                <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">Traffic &amp; Sales</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-info px-3 mb-3"><small
                                                    class="text-medium-emphasis">New Clients</small>
                                                <div class="fs-5 fw-semibold">9,123</div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-danger px-3 mb-3">
                                                <small class="text-medium-emphasis">Recuring Clients</small>
                                                <div class="fs-5 fw-semibold">22,643</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="mt-0">
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Monday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 34%" aria-valuenow="34" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Tuesday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Wednesday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Thursday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Friday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 73%" aria-valuenow="73" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Saturday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 53%" aria-valuenow="53" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Sunday</span>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 69%" aria-valuenow="69" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-warning px-3 mb-3">
                                                <small class="text-medium-emphasis">Pageviews</small>
                                                <div class="fs-5 fw-semibold">78,623</div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-success px-3 mb-3">
                                                <small class="text-medium-emphasis">Organic</small>
                                                <div class="fs-5 fw-semibold">49,123</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="mt-0">
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                            </svg>
                                            <div>Male</div>
                                            <div class="ms-auto fw-semibold">43%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning-gradient" role="progressbar"
                                                     style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-5">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-female"></use>
                                            </svg>
                                            <div>Female</div>
                                            <div class="ms-auto fw-semibold">37%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning-gradient" role="progressbar"
                                                     style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-google"></use>
                                            </svg>
                                            <div>Organic Search</div>
                                            <div class="ms-auto fw-semibold me-2">191.235</div>
                                            <div class="text-medium-emphasis small">(56%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                                            </svg>
                                            <div>Facebook</div>
                                            <div class="ms-auto fw-semibold me-2">51.223</div>
                                            <div class="text-medium-emphasis small">(15%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                                            </svg>
                                            <div>Twitter</div>
                                            <div class="ms-auto fw-semibold me-2">37.564</div>
                                            <div class="text-medium-emphasis small">(11%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 11%" aria-valuenow="11" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                                            </svg>
                                            <div>LinkedIn</div>
                                            <div class="ms-auto fw-semibold me-2">27.319</div>
                                            <div class="text-medium-emphasis small">(8%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                        <th class="text-center">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                            </svg>
                                        </th>
                                        <th>User</th>
                                        <th class="text-center">Country</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment Method</th>
                                        <th>Activity</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/1.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div>Yiorgos Avraamu</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan
                                                1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">50%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">10 sec ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/2.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-danger-gradient"></span></div>
                                        </td>
                                        <td>
                                            <div>Avram Tarasios</div>
                                            <div class="small text-medium-emphasis"><span>Recurring</span> | Registered:
                                                Jan 1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">10%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">5 minutes ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/3.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-warning-gradient"></span></div>
                                        </td>
                                        <td>
                                            <div>Quintin Ed</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan
                                                1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">74%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning-gradient" role="progressbar"
                                                     style="width: 74%" aria-valuenow="74" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">1 hour ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/4.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-secondary-gradient"></span></div>
                                        </td>
                                        <td>
                                            <div>Enéas Kwadwo</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan
                                                1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">98%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                     style="width: 98%" aria-valuenow="98" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last month</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/5.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div>Agapetus Tadeáš</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan
                                                1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">22%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info-gradient" role="progressbar"
                                                     style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use
                                                    xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last week</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img"
                                                                               src="assets/img/avatars/6.jpg"
                                                                               alt="user@email.com"><span
                                                    class="avatar-status bg-danger-gradient"></span></div>
                                        </td>
                                        <td>
                                            <div>Friderik Dávid</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan
                                                1, 2020
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">43%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020
                                                        - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success-gradient" role="progressbar"
                                                     style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Yesterday</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0 dark:text-high-emphasis"
                                                        type="button" data-coreui-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                    <svg class="icon">
                                                        <use
                                                            xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                                href="#">Info</a><a
                                                        class="dropdown-item" href="#">Edit</a><a
                                                        class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI</a> © 2021 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI PRO</a></div>
    </footer>
</div>


<script src="vendors/@coreui/coreui-pro/js/coreui.bundle.min.js"></script>
<script src="vendors/simplebar/js/simplebar.min.js"></script>
<script>
    if (document.body.classList.contains('dark-theme')) {
        var element = document.getElementById('btn-dark-theme');
        if (typeof (element) != 'undefined' && element != null) {
            document.getElementById('btn-dark-theme').checked = true;
        }
    } else {
        var element = document.getElementById('btn-light-theme');
        if (typeof (element) != 'undefined' && element != null) {
            document.getElementById('btn-light-theme').checked = true;
        }
    }

    function handleThemeChange(src) {
        var event = document.createEvent('Event');
        event.initEvent('themeChange', true, true);

        if (src.value === 'light') {
            document.body.classList.remove('dark-theme');
        }
        if (src.value === 'dark') {
            document.body.classList.add('dark-theme');
        }
        document.body.dispatchEvent(event);
    }
</script>

<script src="{{url('js/app.js')}}"></script>
</body>
</html>
