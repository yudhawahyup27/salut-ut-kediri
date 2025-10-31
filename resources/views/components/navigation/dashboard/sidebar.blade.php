<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
            <span class="app-brand-logo demo"></span>
            <span class="app-brand-text menu-text fw-bolder ms-2 text-warning">
                Salut UT Kota Kediri
            </span>
        </a>

        <a href="javascript:void(0);"
           class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle">  </i>

        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <!-- Landing Setting -->
        <li class="menu-item {{ request()->is('dashboards/landing/*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Landing Setting">Landing Setting</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('dashboard.landing.banners.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.landing.banners.index') }}" class="menu-link">
                        <div data-i18n="Banner">Banner</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('dashboard.landing.about.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.landing.about.index') }}" class="menu-link">
                        <div data-i18n="About">About</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('LayananUnggulan.index') ? 'active' : '' }}">
                    <a href="{{ route('LayananUnggulan.index') }}" class="menu-link">
                        <div data-i18n="Layanan Unggulan">Layanan Unggulan</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('partners.index') ? 'active' : '' }}">
                    <a href="{{ route('partners.index') }}" class="menu-link">
                        <div data-i18n="Partner">Partner</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('dashboard.landing.global.index') }}" class="menu-link">
                        <div data-i18n="Global Setting">Global Setting</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item {{ request()->is('dashboards/landing/*') ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Landing Setting">News Dan Events</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ request()->routeIs('news.index') ? 'active' : '' }}">
                    <a href="{{ route('news.index') }}" class="menu-link">
                        <div data-i18n="News">News</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->routeIs('events.index') ? 'active' : '' }}">
                    <a href="{{ route('events.index') }}" class="menu-link">
                        <div data-i18n="Events">Event</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
