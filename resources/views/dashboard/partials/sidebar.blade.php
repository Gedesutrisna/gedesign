<nav class="sidebar position-fixed d-flex flex-column">
    @php
        $dashboardUrl = '/dashboard/admin';
    @endphp
    <a class="text-center" href="{{ $dashboardUrl }}">
        <img src="/assets-dashboard/icon.svg" alt="" class="logo">
    </a>
    <hr class="my-4">
    <ul class="nav flex-column gap-3 justify-content-between h-100">
        <div>
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '') ? 'active' : '' }}" href="{{ $dashboardUrl }}">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '') ? 'home-i-w.svg' : 'home-i.svg' }}" alt="">
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/portfolios*') ? 'active' : '' }}" href="{{ $dashboardUrl }}/portfolios">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/portfolios*') ? 'question-i-w.svg' : 'question-i.svg' }}" alt="">
                    <p>Portfolio</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/blogs*') ? 'active' : '' }}" href="{{ $dashboardUrl }}/blogs">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/blogs*') ? 'history-i-w.svg' : 'history-i.svg' }}" alt="">
                    <p>Blog</p>
                </a>
            </li>
        </div>
        <div>
            <hr>
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/profile') ? 'active' : '' }}" href="{{ $dashboardUrl }}/profile">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/profile') ? 'patient-i-w.svg' : 'patient-i.svg' }}" alt="">
                    <p>Profile</p>
                </a>
            </li>
        </div>
    </ul>
</nav>
