<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        {{-- @dd(auth()->user()) --}}
        <li class="nav-item nav-category">Main Dashboard</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('stage') }}">
                <i class="mdi mdi-account-plus"></i>
                <span class="menu-title">Stages</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Projects</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic" style="">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ route('project.index') }}">All Project</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{ route('project.create') }}">Create Project</a>
                    </li>
                    {{-- <li class="nav-item"> <a class="nav-link" href="{{ route('project.edit') }}">Edit</a> --}}
        </li>

    </ul>
    </div>
    </li>

    </ul>
</nav>
