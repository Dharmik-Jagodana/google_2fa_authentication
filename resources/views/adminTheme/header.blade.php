<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <strong style="font-size:17px;text-transform: capitalize;padding-left:7px;">Dashboard</strong>
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item"><a class="nav-link menu-toggle" href="#"><i class="ficon" data-feather="menu"></i></a></li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">{{ auth()->user()->name }}</span><span class="user-status">Admin</span></div><div class="avatar"><div class="avatar-content"><i data-feather="user" class="avatar-icon"></i></div></div></span></a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{ route('admin.profile-setting.index') }}"><i class="me-50" data-feather="user"></i> Profile</a>
                    <a class="dropdown-item" href="{{ url('admin/2fa') }}"><i class="me-50" data-feather="user"></i> 2fa</a>
                    {{-- <a class="dropdown-item" href="{{ route('translations.index') }}"><i class="globe me-50" data-feather="globe"></i> Translations</a> --}}
                    <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" ><i class="me-50" data-feather="power"></i> Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>