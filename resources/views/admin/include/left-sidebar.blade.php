<!--start sidebar -->
<aside class="sidebar-wrapper">
    <div class="iconmenu">
        <div class="nav-toggle-box">
            <div class="nav-toggle-icon"><i class="bi bi-list"></i></div>
        </div>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Dashboards">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-dashboards" type="button"><i class="bi bi-house-door-fill"></i></button>
            </li>
            @if(Auth::user()->id == 1)
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="User Module">
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-application" type="button"><i class="bi bi-person-bounding-box"></i></button>
                </li>
            @endif
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Teacher Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-widgets" type="button"><i class="bi bi-person-circle"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-ecommerce" type="button"><i class="bi bi-bag-check-fill"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Student Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-components" type="button"><i class="bi bi-people-fill"></i></button>
            </li>
        </ul>
    </div>
    <div class="textmenu">
        <div class="brand-logo">
            <img src="{{asset('adminAssets')}}/assets/images/brand-logo-2.png" width="140" alt=""/>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade" id="pills-dashboards">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Dashboards</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    @if(Auth::user()->id == 1)
                        <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-cast"></i>Super Admin </a>
                    @else
                        <a href="{{route('dashboard')}}" class="list-group-item"><i class="bi bi-cast"></i>Admin Dashboard</a>
                    @endif

                </div>
            </div>
            @if(Auth::user()->id == 1)
                <div class="tab-pane fade" id="pills-application">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">User Module</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="{{route('add.user')}}" class="list-group-item"><i class="bi bi-envelope"></i>Add User</a>
                        <a href="{{route('manage.user')}}" class="list-group-item"><i class="bi bi-chat-left-text"></i>Manage User</a>
                    </div>
                </div>
            @endif

            <div class="tab-pane fade" id="pills-widgets">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-0">Teacher Module</h5>
                            </div>
                            <small class="mb-0">Some placeholder content</small>
                        </div>
                        <a href="{{route('add.teacher')}}" class="list-group-item"><i class="bi bi-box"></i>Add Teacher</a>
                        <a href="{{route('manage.teacher')}}" class="list-group-item"><i class="bi bi-bar-chart"></i>Manage Teacher</a>
                    </div>
                </div>
            <div class="tab-pane fade" id="pills-ecommerce">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Course Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                   <a href="{{route('manage.course')}}" class="list-group-item"><i class="bi bi-handbag"></i>Manage Course</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-components">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Student Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
{{--                    <a href="component-alerts.html" class="list-group-item"><i class="bi bi-bell"></i>Add Student</a>--}}
                    <a href="{{route('manage.student')}}" class="list-group-item"><i class="bi bi-arrows-collapse"></i>Manage Student</a>
                    <a href="{{route('manage.student.course')}}" class="list-group-item"><i class="bi bi-arrows-collapse"></i>Manage Student Course</a>
                </div>
            </div>

        </div>
    </div>
</aside>
<!--start sidebar -->
