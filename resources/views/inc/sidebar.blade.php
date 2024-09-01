<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <ul>
                <div class="logo"><a href="{{ route('dashboard.index') }}"><span>CRUD BROOH</span></a>
                </div>
                <li class="label">Main</li>
                <li class="{{ Request::routeIs('dashboard.index') ? 'active' : '' }}"><a href="{{ route('dashboard.index') }}"><i class="ti-home"></i> Dashboard</a>
                </li>

                <li class="label">Master Data</li>
                <li class="{{ Request::routeIs('user.index', 'user.create', 'user.edit') ? 'active' : '' }}"><a href="{{ route('user.index') }}"><i class="ti-user"></i> Profile</a></li>
                <li class="{{ Request::routeIs('experience.index', 'experience.create', 'experience.edit') ? 'active' : '' }}"><a href="{{ route('experience.index') }}"><i class="ti-bag"></i> Experience</a></li>
                <li class="{{ Request::routeIs('education.index', 'education.create') ? 'active' : '' }}"><a href="{{ route('education.index') }}"><i class="ti-ruler-pencil"></i> Education</a></li>
                <li class="{{ Request::routeIs('skill.index', 'skill.create') ? 'active' : '' }}"><a href="{{ route('skill.index') }}"><i class="ti-bar-chart"></i> Skill</a></li>
            </ul>
        </div>
    </div>
</div>
