<nav class="sidebar position-fixed d-flex flex-column">
    @php
        $dashboardUrl = auth()->guard('admin')->check() ? '/dashboard' : '/dashboard/psychologist';
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
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/questions*') ? 'active' : '' }}" href="{{ $dashboardUrl }}/questions">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/questions*') ? 'question-i-w.svg' : 'question-i.svg' }}" alt="">
                    <p>Question</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/histories*') ? 'active' : '' }}" href="{{ $dashboardUrl }}/histories">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/histories*') ? 'history-i-w.svg' : 'history-i.svg' }}" alt="">
                    <p>History</p>
                </a>
            </li>
            @if (auth()->guard('admin')->check())
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/psychologists*') ? 'active' : '' }}" href="/dashboard/psychologists">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is('dashboard/psychologists*') ? 'patient-i-w.svg' : 'patient-i.svg' }}" alt="">
                    <p>Psikologi</p>
                </a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link {{ request()->is(ltrim($dashboardUrl, '/') . '/users*') ? 'active' : '' }}" href="{{ $dashboardUrl }}/users">
                    <img class="nav-icon" src="/assets-dashboard/{{ request()->is(ltrim($dashboardUrl, '/') . '/users*') ? 'patient-i-w.svg' : 'patient-i.svg' }}" alt="">
                    <p>Users</p>
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
