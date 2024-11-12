<nav class="navbar d-flex justify-content-between align-items-center py-3 px-4">
    <div class="d-lg-none d-block">
        <button type="button" class="navbar-btn" id="toggleSidebarBtn"><i class="bi bi-list"></i></button>
    </div>
    @if (request()->is('dashboard/admin'))
        <h3>Dashboard Page</h3>
    @elseif(request()->is('dashboard/admin/portfolios*'))
        <h3>Portfolio Page</h3>
    @elseif(request()->is('dashboard/admin/blogs*'))
        <h3>Blog Page</h3>
    @elseif(request()->is('dashboard/admin/services*'))
        <h3>Service Page</h3>
    @elseif(request()->is('dashboard/admin/faqs*'))
        <h3>FAQ Page</h3>
    @elseif(request()->is('dashboard/admin/tags*'))
        <h3>Tag Page</h3>
    @elseif(request()->is('dashboard/admin/testimonials*'))
        <h3>Testimonial Page</h3>
    @elseif(request()->is('dashboard/admin/profile') )
        <h3>Profile Page</h3>
    @endif

    <div class="d-flex gap-3 align-items-center">
        <div class="d-flex align-items-center gap-2">
            @php
                $user = auth()->guard('admin')->user();
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
                    Admin
                </div>
            </div>
        </div>
        <div class="line"></div>
        <form class="mb-0" action="/logout/admin" method="POST">
            @csrf
            <button type="submit" class="navbar-btn"><img src="/assets-dashboard/logout-i.svg" alt=""></button>
        </form>
    </div>
</nav>
