<nav class="navbar d-flex justify-content-between align-items-center py-3 px-4">
    <div class="d-lg-none d-block">
        <button type="button" class="navbar-btn" id="toggleSidebarBtn"><i class="bi bi-list"></i></button>
    </div>
    @if (request()->is('dashboard') || request()->is('dashboard/psychologist'))
        <h3>Dashboard Page</h3>
    @elseif(request()->is('dashboard/questions*') || request()->is('dashboard/psychologist/questions*'))
        <h3>Question Page</h3>
    @elseif(request()->is('dashboard/histories*') || request()->is('dashboard/psychologist/histories*'))
        <h3>History Page</h3>
    @elseif(request()->is('dashboard/users*') || request()->is('dashboard/psychologist/users*'))
        <h3>User Page</h3>
    @elseif(request()->is('dashboard/psychologists*'))
    @if (auth()->guard('admin'))
        <h3>Psikologi Page</h3>
    @endif
    @elseif(request()->is('dashboard/profile') || request()->is('dashboard/psychologist/profile'))
        <h3>Profile Page</h3>
    @endif

    <div class="d-flex gap-3 align-items-center">
        <div class="d-flex align-items-center gap-2">
            @php
                $user = auth()->guard('admin')->user() ?? auth()->guard('psychologist')->user();
            @endphp
            @if (empty($user->image))
                <img class="photo-profile" src="/assets-dashboard/profile-man.svg" alt="">
            @else
                <img class="photo-profile" src="{{ asset('images/'.$user->image) }}" alt="">
            @endif
            <div class="d-block">
                <div class="">
                    {{ $user->name }}
                </div>
                <div class="role">
                    {{ auth()->guard('admin')->check() ? 'Admin' : 'Psychologist' }}
                </div>
            </div>
        </div>
        <div class="line"></div>
        <form class="mb-0" action="{{ auth()->guard('admin')->check() ? '/logout/admin' : '/logout/psychologist' }}" method="POST">
            @csrf
            <button type="submit" class="navbar-btn"><img src="/assets-dashboard/logout-i.svg" alt=""></button>
        </form>
    </div>
</nav>
