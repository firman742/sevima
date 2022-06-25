<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::is('/dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            {{-- <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                    <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Components</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                <ul class="pcoded-submenu">
                    <li class=" ">
                        <a href="/accordion">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Accordion</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/breadcrumb">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/button">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Button</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/tabs">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Tabs</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/color">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Color</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/label">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Label Badge</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/tooltip">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Tooltip</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/typography">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Typography</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/notification">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Notification</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>
                    <li class=" ">
                        <a href="/themify">
                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Themify</span>
                            <span class="pcoded-mcaret"></span>
                        </a>
                    </li>

                </ul>
            </li>  --}}
        </ul>
        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms &amp; Tables</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="{{ Request::is('tugas') ? 'active' : '' }}">
                <a href="/tugas">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Tugas</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
            <li class="{{ Request::is('nilai') ? 'active' : '' }}">
                <a href="/nilai">
                    <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.form-components.main">Nilai</span>
                    <span class="pcoded-mcaret"></span>
                </a>
            </li>
           

        </ul>
       
    </div>
</nav>