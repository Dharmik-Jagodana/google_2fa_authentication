<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <span class="brand-logo">
                        <!-- <img src="{{ asset('images/logo.png') }}" height="40px" style="max-width: 60px;"> -->
                    </span>
                    <p class="brand-text" style="margin-top: 3px; margin-left: 42px;">Invoice</p>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg></a></li>
        </ul>
    </div>
    <hr>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <x-alert route="{{ route('dashboard') }}" name="Dashboard" activeUrl="admin/dashboard*" icon="home"/>
            <x-alert route="{{ route('users.index') }}" name="Users" activeUrl="admin/users*" icon="users"/>
            <x-alert route="{{ url('admin/2fa') }}" name="Two Factor Authentication" activeUrl="admin/2fa*" icon="key"/>

       <!-- <li class="nav-item {{ Request::is() ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('dashboard') }}"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboard">Dashboard</span></a></li>
            <li class="nav-item {{ Request::is('admin/users*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('users.index') }}"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Users">Users</span></a></li>
            <li class="nav-item {{ Request::is('admin/2fa*') ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ url('admin/2fa') }}"><i data-feather="key"></i><span class="menu-title text-truncate" data-i18n="Users">Two Factor Authentication</span></a></li> -->
        </ul>
    </div>
</div>