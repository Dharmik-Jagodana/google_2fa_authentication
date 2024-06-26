<li class="nav-item {{ Request::is($activeUrl) ? 'active' : '' }}">
    <a class="d-flex align-items-center" href="{{ $route }}">
        <i data-feather="{{ $icon }}"></i>
        <span class="menu-title text-truncate" data-i18n="Users">{{ $name }}</span>
    </a>
</li>
