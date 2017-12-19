<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">
                {{ __('menus.backend.sidebar.general') }}
            </li>

            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/dashboard')) }}" href="{{ route('admin.dashboard') }}"><i class="icon-speedometer"></i> {{ __('menus.backend.sidebar.dashboard') }}</a>
            </li>

            <li class="nav-title">
                {{ __('menus.backend.sidebar.system') }}
            </li>

            @if ($logged_in_user->isAdmin())
            <li class="nav-item">
                <a class="nav-link {{ active_class(Active::checkUriPattern('admin/contacts*')) }}" href="{{ route('admin.contacts.edit', 1) }}"><i class="icon-speedometer"></i> Contact Details</a>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/team-members*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Team Members
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/team-members')) }}" href="{{ route('admin.team-members.index') }}">
                            All Team Members
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/team-members/create')) }}" href="{{ route('admin.team-members.create') }}">
                            Add Team Member
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/projects*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Projects
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/projects')) }}" href="{{ route('admin.projects.index') }}">
                            All Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/projects/create')) }}" href="{{ route('admin.projects.create') }}">
                            Add Project
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/partners*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Partners
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/partners')) }}" href="{{ route('admin.partners.index') }}">
                            All Partners
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/partners/create')) }}" href="{{ route('admin.partners.create') }}">
                            Add Partner
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/testimonials*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Testimonials
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/testimonials')) }}" href="{{ route('admin.testimonials.index') }}">
                            All Testimonials
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/testimonials/create')) }}" href="{{ route('admin.testimonials.create') }}">
                            Add Testimonials
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/job-postings*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Job Postings
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/job-postings')) }}" href="{{ route('admin.job-postings.index') }}">
                            All Job Postings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/job-postings/create')) }}" href="{{ route('admin.job-postings.create') }}">
                            Add Job Posting
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/work-flows*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> How we do it
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/work-flows')) }}" href="{{ route('admin.work-flows.index') }}">
                            All Steps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/work-flows/create')) }}" href="{{ route('admin.work-flows.create') }}">
                            Add New Step
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/services*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> Services
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/team-members')) }}" href="{{ route('admin.team-members.index') }}">
                            All Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/team-members/create')) }}" href="{{ route('admin.team-members.create') }}">
                            Add Service
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/auth*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-user"></i> {{ __('menus.backend.access.title') }}

                    @if ($pending_approval > 0)
                    <span class="badge badge-danger">{{ $pending_approval }}</span>
                    @endif
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/user*')) }}" href="{{ route('admin.auth.user.index') }}">
                            {{ __('labels.backend.access.users.management') }}

                            @if ($pending_approval > 0)
                            <span class="badge badge-danger">{{ $pending_approval }}</span>
                            @endif
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/auth/role*')) }}" href="{{ route('admin.auth.role.index') }}">
                            {{ __('labels.backend.access.roles.management') }}
                        </a>
                    </li>
                </ul>
            </li>
            @endif

            <li class="nav-item nav-dropdown {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'open') }}">
                <a class="nav-link nav-dropdown-toggle" href="#">
                    <i class="icon-list"></i> {{ __('menus.backend.log-viewer.main') }}
                </a>

                <ul class="nav-dropdown-items">
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer')) }}" href="{{ route('log-viewer::dashboard') }}">
                            {{ __('menus.backend.log-viewer.dashboard') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ active_class(Active::checkUriPattern('admin/log-viewer/logs*')) }}" href="{{ route('log-viewer::logs.list') }}">
                            {{ __('menus.backend.log-viewer.logs') }}
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</div><!--sidebar-->