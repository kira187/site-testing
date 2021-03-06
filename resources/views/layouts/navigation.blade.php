<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image" class="rounded-circle" src="img/profile_small.jpg">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{!! asset('#') !!}">
                        <span class="block m-t-xs font-bold">{{\Auth::user()->name}}</span>
                        <span class="text-muted text-xs block">{{\Auth::user()->email}} <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{!! asset('login.html') !!}">Configuracion</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="{!! asset('index.html') !!}"><i class="fa fa-th-large"></i> <span class="nav-label">Main view</span></a>
            </li>
            <li>
                <a href="{!! asset('minor.html') !!}"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
            </li>
        </ul>
    </div>
</nav>
