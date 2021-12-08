@extends('layouts.app')
@section('title')
    Dashboard
@endsection
@section('sidebar-list')
    {{--        boton directo sin sub listas y activo--}}
    <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg>
            Dashboard<span class="badge bg-info-gradient ms-auto">NEW</span></a></li>
    {{--        titulo de una seccion de la lista (se puede usar para separa los modulos)--}}
            <li class="nav-title">Theme</li>
    {{--        boton con sublista de botones, usos especificos--}}
    <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
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
    </li>
@endsection
