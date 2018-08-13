<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">蒋公</strong>
                            </span> <span class="text-muted text-xs block">管理员 <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    VR+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/admin') }}"><i class="fa fa-th-list"></i> <span class="nav-label">主页</span></a>
            </li>
            <li class="{{ isActiveRoute('minor') }}">
                <a href="{{ url('/minor') }}"><i class="fa fa-th-list"></i> <span class="nav-label">表格</span> </a>
            </li>
            <li class="{{ isActiveRoute('cinema') }}">
                <a href="{{ url('/cinema') }}"><i class="fa fa-th-list"></i><span class="nav-label">影院</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/cinema') }}">影院管理</a></li>
                    <li><a href="{{ url('/cinemahall') }}">影厅管理</a></li>
                    <li><a href="{{ url('/chedule') }}">场次管理</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
