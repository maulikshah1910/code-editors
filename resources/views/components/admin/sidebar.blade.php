<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
            <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item">
            <a class="nav-link {!! Route::current()->uri == 'admin/dashboard' ? 'active' : '' !!} " href="{!! route('admin.dashboard') !!}">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                </svg> 
                Dashboard
                {{-- <span class="badge badge-sm bg-info ms-auto">NEW</span> --}}
            </a>
        </li>

        <li class="nav-title">Components</li>
        <li class="nav-group {!! Request::is('admin/practice-tools/*') ? ' show' : '' !!}">
            <a class="nav-link nav-group-toggle {!! Request::is('admin/practice-tools/*') ? ' active ' : '' !!}" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-code"></use>
                </svg>
                Code Tools 
            </a>
            <ul class="nav-group-items compact">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        New
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-group {!! Request::is('admin/practice-questions/*') ? ' show' : '' !!}">
            <a class="nav-link nav-group-toggle {!! Request::is('admin/practice-questions/*') ? ' active ' : '' !!}" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-equalizer"></use>
                </svg>
                Question Set
            </a>
            <ul class="nav-group-items compact">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        New
                    </a>
                </li>
            </ul>
        </li>

        


        <li class="nav-title">Admin Operations</li>
        <li class="nav-group {!! Request::is('admin/roles/*') ? ' show' : '' !!}">
            <a class="nav-link nav-group-toggle {!! Request::is('admin/roles/*') ? ' active ' : '' !!}" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-life-ring"></use>
                </svg>
                User Roles
            </a>
            <ul class="nav-group-items compact">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        New
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-group {!! Request::is('admin/users/*') ? ' show' : '' !!}">
            <a class="nav-link nav-group-toggle {!! Request::is('admin/users/*') ? ' active ' : '' !!}" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                </svg>
                Users
            </a>
            <ul class="nav-group-items compact">
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        List
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="base/accordion.html">
                        <span class="nav-icon"><span class="nav-icon-bullet"></span></span> 
                        New
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link logout" href="#">
                <svg class="nav-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                </svg> 
                Logout
            </a>
        </li>
    </ul>

    <div class="sidebar-footer border-top d-none d-md-flex">
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
</div>