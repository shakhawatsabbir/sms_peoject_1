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
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Subject Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-Subject" type="button"><i class="bi bi-person-circle"></i></button>
            </li>
            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Course Module">
                <button class="nav-link" data-bs-toggle="pill" data-bs-target="#pills-Course" type="button"><i class="bi bi-bag-check-fill"></i></button>
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
                    <a href="{{route('teacher.dashboard')}}" class="list-group-item"><i class="bi bi-cast"></i>Teacher Dashboard</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Subject">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Subject Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('add.subject')}}" class="list-group-item"><i class="bi bi-box-seam"></i>Add Subject</a>
                    <a href="{{route('manage.subject')}}" class="list-group-item"><i class="bi bi-box-seam"></i>Manage Subject</a>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-Course">
                <div class="list-group list-group-flush">
                    <div class="list-group-item">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-0">Course Module</h5>
                        </div>
                        <small class="mb-0">Some placeholder content</small>
                    </div>
                    <a href="{{route('approved.course')}}" class="list-group-item"><i class="bi bi-box-seam"></i>Approved Course</a>
                    <a href="ecommerce-products-grid.html" class="list-group-item"><i class="bi bi-box-seam"></i>Denied Course</a>
                    <a href="ecommerce-transactions.html" class="list-group-item"><i class="bi bi-handbag"></i>Enrolled Course</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<!--start sidebar -->
