<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route('dashboard.index') }}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa-brands fa-stack-overflow"></i> CRUD BROOH</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('storage/image/' . $profile->gambar) }}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ $profile->nama_profile }}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('dashboard.index') }}" class="nav-item nav-link {{ request()->routeIs('dashboard.index') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('profile.index') }}" class="nav-item nav-link {{ request()->routeIs('profile.create', 'profile.index', 'profile.edit') ? 'active' : '' }}"><i class="fa-solid fa-user me-2"></i>Profile</a>
            <a href="{{ route('experience.index') }}" class="nav-item nav-link {{ request()->routeIs('experience.create', 'experience.index', 'experience.edit') ? 'active' : '' }}"><i class="fa-solid fa-user me-2"></i>Experience</a>
        </div>
    </nav>
</div>
