<x-default-layout>
    @section('title')
    View Project
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('projects.view-project') }}
    @endsection


    @include('pages.example.projects.header')
    <!--begin::Row-->
    <div class="row gx-6 gx-xl-9">
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Summary-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Tasks Summary</h3>
                        <div class="fs-6 fw-semibold text-gray-500">24 Overdue Tasks</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-light btn-sm">View Tasks</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9 pt-5">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Chart-->
                        <div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
                            <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                <span class="fs-2qx fw-bold">237</span>
                                <span class="fs-6 fw-semibold text-gray-500">Total Tasks</span>
                            </div>
                            <canvas id="project_overview_chart"></canvas>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                <div class="bullet bg-primary me-3"></div>
                                <div class="text-gray-500">Active</div>
                                <div class="ms-auto fw-bold text-gray-700">30</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                <div class="bullet bg-success me-3"></div>
                                <div class="text-gray-500">Completed</div>
                                <div class="ms-auto fw-bold text-gray-700">45</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center mb-3">
                                <div class="bullet bg-danger me-3"></div>
                                <div class="text-gray-500">Overdue</div>
                                <div class="ms-auto fw-bold text-gray-700">0</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-semibold align-items-center">
                                <div class="bullet bg-gray-300 me-3"></div>
                                <div class="text-gray-500">Yet to start</div>
                                <div class="ms-auto fw-bold text-gray-700">25</div>
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <div class="fs-6 text-gray-700">
                                    <a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Summary-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Graph-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Tasks Over Time</h3>
                        <!--begin::Labels-->
                        <div class="fs-6 d-flex text-gray-500 fs-6 fw-semibold">
                            <!--begin::Label-->
                            <div class="d-flex align-items-center me-6">
                                <span class="menu-bullet d-flex align-items-center me-2">
                                    <span class="bullet bg-success"></span>
                                </span>Complete</div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex align-items-center">
                                <span class="menu-bullet d-flex align-items-center me-2">
                                    <span class="bullet bg-primary"></span>
                                </span>Incomplete</div>
                            <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                            <option value="1">2020 Q1</option>
                            <option value="2">2020 Q2</option>
                            <option value="3" selected="selected">2020 Q3</option>
                            <option value="4">2020 Q4</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-10 pb-0 px-5">
                    <!--begin::Chart-->
                    <div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Graph-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">What's on the road?</h3>
                        <div class="fs-6 text-gray-500">Total 482 participants</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Select-->
                        <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px">
                            <option value="1" selected="selected">Options</option>
                            <option value="2">Option 1</option>
                            <option value="3">Option 2</option>
                            <option value="4">Option 3</option>
                        </select>
                        <!--end::Select-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9 pt-4">
                    <!--begin::Dates-->
                    <ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                <span class="fs-6 fw-bold">22</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                <span class="fs-6 fw-bold">23</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                <span class="fs-6 fw-bold">24</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
                                <span class="opacity-50 fs-7 fw-semibold">We</span>
                                <span class="fs-6 fw-bold">25</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
                                <span class="opacity-50 fs-7 fw-semibold">Th</span>
                                <span class="fs-6 fw-bold">26</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
                                <span class="opacity-50 fs-7 fw-semibold">Fr</span>
                                <span class="fs-6 fw-bold">27</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
                                <span class="opacity-50 fs-7 fw-semibold">Sa</span>
                                <span class="fs-6 fw-bold">28</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
                                <span class="opacity-50 fs-7 fw-semibold">Su</span>
                                <span class="fs-6 fw-bold">29</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
                                <span class="opacity-50 fs-7 fw-semibold">Mo</span>
                                <span class="fs-6 fw-bold">30</span>
                            </a>
                        </li>
                        <!--end::Date-->
                        <!--begin::Date-->
                        <li class="nav-item me-1">
                            <a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
                                <span class="opacity-50 fs-7 fw-semibold">Tu</span>
                                <span class="fs-6 fw-bold">31</span>
                            </a>
                        </li>
                        <!--end::Date-->
                    </ul>
                    <!--end::Dates-->
                    <!--begin::Tab Content-->
                    <div class="tab-content">
                        <!--begin::Day-->
                        <div id="kt_schedule_day_0" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">9:00 - 10:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Karina Clarke</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Karina Clarke</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_1" class="tab-pane fade show active">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Bob Harris</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">David Stevenson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Yannis Gloverson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_2" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Caleb Donaldson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Mark Randall</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_3" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">13:00 - 14:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">13:00 - 14:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">16:30 - 17:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Kendell Trevor</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_4" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Yannis Gloverson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Yannis Gloverson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_5" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">11:00 - 11:45
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">David Stevenson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">11:00 - 11:45
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Michael Walters</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Michael Walters</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_6" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Karina Clarke</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">13:00 - 14:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Yannis Gloverson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Mark Randall</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_7" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Peter Marcus</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">10:00 - 11:00
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Mark Randall</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">13:00 - 14:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Sean Bean</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_8" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">12:00 - 13:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Walter White</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">11:00 - 11:45
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Karina Clarke</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">11:00 - 11:45
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">David Stevenson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                        <!--begin::Day-->
                        <div id="kt_schedule_day_9" class="tab-pane fade show">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">14:30 - 15:30
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch & Learn Catch Up</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Bob Harris</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">13:00 - 14:00
                                        <span class="fs-7 text-gray-500 text-uppercase">pm</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">David Stevenson</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                            <!--begin::Time-->
                            <div class="d-flex flex-stack position-relative mt-8">
                                <!--begin::Bar-->
                                <div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
                                <!--end::Bar-->
                                <!--begin::Info-->
                                <div class="fw-semibold ms-5 text-gray-600">
                                    <!--begin::Time-->
                                    <div class="fs-5">11:00 - 11:45
                                        <span class="fs-7 text-gray-500 text-uppercase">am</span></div>
                                    <!--end::Time-->
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review & Testing</a>
                                    <!--end::Title-->
                                    <!--begin::User-->
                                    <div class="text-gray-500">Lead by
                                        <a href="#">Naomi Hayabusa</a></div>
                                    <!--end::User-->
                                </div>
                                <!--end::Info-->
                                <!--begin::Action-->
                                <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
                                <!--end::Action-->
                            </div>
                            <!--end::Time-->
                        </div>
                        <!--end::Day-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">Latest Files</h3>
                        <div class="fs-6 text-gray-500">Total 382 fiels, 2,6GB space usage</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body p-9 pt-3">
                    <!--begin::Files-->
                    <div class="d-flex flex-column mb-9">
                        <!--begin::File-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Icon-->
                            <div class="symbol symbol-30px me-5">
                                <img alt="Icon" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Project tech requirements</a>
                                <div class="text-gray-500">2 days ago
                                    <a href="#">Karina Clark</a></div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcad2b">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcad2b" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Icon-->
                            <div class="symbol symbol-30px me-5">
                                <img alt="Icon" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create FureStibe branding proposal</a>
                                <div class="text-gray-500">Due in 1 day
                                    <a href="#">Marcus Blake</a></div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcad38">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcad38" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex align-items-center mb-5">
                            <!--begin::Icon-->
                            <div class="symbol symbol-30px me-5">
                                <img alt="Icon" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Completed Project Stylings</a>
                                <div class="text-gray-500">Due in 1 day
                                    <a href="#">Terry Barry</a></div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcad43">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcad43" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::File-->
                        <!--begin::File-->
                        <div class="d-flex align-items-center">
                            <!--begin::Icon-->
                            <div class="symbol symbol-30px me-5">
                                <img alt="Icon" src="{{ asset('assets/media/svg/files/ai.svg') }}" />
                            </div>
                            <!--end::Icon-->
                            <!--begin::Details-->
                            <div class="fw-semibold">
                                <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="#">Create Project Wireframes</a>
                                <div class="text-gray-500">Due in 3 days
                                    <a href="#">Roth Bloom</a></div>
                            </div>
                            <!--end::Details-->
                            <!--begin::Menu-->
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                <i class="ki-duotone ki-element-plus fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcad4e">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcad4e" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::File-->
                    </div>
                    <!--end::Files-->
                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-svg/files/upload.svg') }} fs-2tx text-primary me-4"></i>
                        <!--end::Icon-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1">
                            <!--begin::Content-->
                            <div class="fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Quick file uploader</h4>
                                <div class="fs-6 text-gray-700">Drag & Drop or choose files from computer</div>
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body -->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Card-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">New Contibutors</h3>
                        <div class="fs-6 text-gray-500">From total 482 Participants</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card toolbar-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column p-9 pt-3 mb-9">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Avatar-->
                        <div class="me-5 position-relative">
                            <!--begin::Image-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                            </div>
                            <!--end::Image-->
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
                            <div class="text-gray-500">8 Pending & 97 Completed Tasks</div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Badge-->
                        <div class="badge badge-light ms-auto">5</div>
                        <!--end::Badge-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Avatar-->
                        <div class="me-5 position-relative">
                            <!--begin::Image-->
                            <div class="symbol symbol-35px symbol-circle">
                                <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                            </div>
                            <!--end::Image-->
                            <!--begin::Online-->
                            <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                            <!--end::Online-->
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Melody Macy</a>
                            <div class="text-gray-500">5 Pending & 84 Completed</div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Badge-->
                        <div class="badge badge-light ms-auto">8</div>
                        <!--end::Badge-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Avatar-->
                        <div class="me-5 position-relative">
                            <!--begin::Image-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                            </div>
                            <!--end::Image-->
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Max Smith</a>
                            <div class="text-gray-500">9 Pending & 103 Completed</div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Badge-->
                        <div class="badge badge-light ms-auto">9</div>
                        <!--end::Badge-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Avatar-->
                        <div class="me-5 position-relative">
                            <!--begin::Image-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                            </div>
                            <!--end::Image-->
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
                            <div class="text-gray-500">3 Pending & 55 Completed</div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Badge-->
                        <div class="badge badge-light ms-auto">3</div>
                        <!--end::Badge-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="me-5 position-relative">
                            <!--begin::Image-->
                            <div class="symbol symbol-35px symbol-circle">
                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                            </div>
                            <!--end::Image-->
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary">Brian Cox</a>
                            <div class="text-gray-500">4 Pending & 115 Completed</div>
                        </div>
                        <!--end::Details-->
                        <!--begin::Badge-->
                        <div class="badge badge-light ms-auto">4</div>
                        <!--end::Badge-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-lg-6">
            <!--begin::Tasks-->
            <div class="card card-flush h-lg-100">
                <!--begin::Card header-->
                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h3 class="fw-bold mb-1">My Tasks</h3>
                        <div class="fs-6 text-gray-500">Total 25 tasks in backlog</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body d-flex flex-column mb-9 p-9 pt-3">
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
                            <!--begin::Info-->
                            <div class="text-gray-500">Due in 1 day
                                <a href="#">Karina Clark</a></div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-plus fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcae3b">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcae3b" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
                            <!--begin::Info-->
                            <div class="text-gray-500">Due in 3 days
                                <a href="#">Rober Doe</a></div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-plus fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcae46">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcae46" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
                            <!--begin::Info-->
                            <div class="text-gray-500">Due in 1 week
                                <a href="#">Neil Owen</a></div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-plus fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcae51">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcae51" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative mb-7">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Dashgboard UI & UX for Leafr CRM</a>
                            <!--begin::Info-->
                            <div class="text-gray-500">Due in 1 week
                                <a href="#">Olivia Wild</a></div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-plus fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcae5b">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcae5b" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center position-relative">
                        <!--begin::Label-->
                        <div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
                        <!--end::Label-->
                        <!--begin::Checkbox-->
                        <div class="form-check form-check-custom form-check-solid ms-6 me-4">
                            <input class="form-check-input" type="checkbox" value="" />
                        </div>
                        <!--end::Checkbox-->
                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a href="#" class="fs-6 fw-bold text-gray-900 text-hover-primary">Mivy App R&D, Meeting with clients</a>
                            <!--begin::Info-->
                            <div class="text-gray-500">Due in 2 weeks
                                <a href="#">Sean Bean</a></div>
                            <!--end::Info-->
                        </div>
                        <!--end::Details-->
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-element-plus fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c700bcae65">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Menu separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Menu separator-->
                            <!--begin::Form-->
                            <div class="px-7 py-5">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c700bcae65" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Tasks-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Table-->
    <div class="card card-flush mt-6 mt-xl-9">
        <!--begin::Card header-->
        <div class="card-header mt-5">
            <!--begin::Card title-->
            <div class="card-title flex-column">
                <h3 class="fw-bold mb-1">Project Spendings</h3>
                <div class="fs-6 text-gray-500">Total $260,300 sepnt so far</div>
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar my-1">
                <!--begin::Select-->
                <div class="me-6 my-1">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected="selected">All time</option>
                        <option value="thisyear">This year</option>
                        <option value="thismonth">This month</option>
                        <option value="lastmonth">Last month</option>
                        <option value="last90days">Last 90 days</option>
                    </select>
                </div>
                <!--end::Select-->
                <!--begin::Select-->
                <div class="me-4 my-1">
                    <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected="selected">All Orders</option>
                        <option value="Approved">Approved</option>
                        <option value="Declined">Declined</option>
                        <option value="In Progress">In Progress</option>
                        <option value="In Transit">In Transit</option>
                    </select>
                </div>
                <!--end::Select-->
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-3">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold">
                    <thead class="fs-7 text-gray-500 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Manager</th>
                            <th class="min-w-150px">Date</th>
                            <th class="min-w-90px">Amount</th>
                            <th class="min-w-90px">Status</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                    </thead>
                    <tbody class="fs-6">
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-semibold text-gray-500">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2023</td>
                            <td>$509.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                        <div class="fw-semibold text-gray-500">melody@altbox.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2023</td>
                            <td>$841.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-semibold text-gray-500">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$595.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                        <div class="fw-semibold text-gray-500">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$657.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-500">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$617.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-semibold text-gray-500">mik@pex.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$415.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-semibold text-gray-500">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$679.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                        <div class="fw-semibold text-gray-500">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2023</td>
                            <td>$451.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-semibold text-gray-500">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$910.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                        <div class="fw-semibold text-gray-500">dam@consilting.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$720.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                        <div class="fw-semibold text-gray-500">emma@intenso.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2023</td>
                            <td>$675.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-semibold text-gray-500">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$644.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-semibold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                        <div class="fw-semibold text-gray-500">robert@benko.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$618.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-500">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2023</td>
                            <td>$931.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-semibold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                        <div class="fw-semibold text-gray-500">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$644.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                        <div class="fw-semibold text-gray-500">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2023</td>
                            <td>$903.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-500">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$713.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-500">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Apr 15, 2023</td>
                            <td>$948.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-semibold text-gray-500">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2023</td>
                            <td>$589.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-semibold text-gray-500">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2023</td>
                            <td>$739.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                        <div class="fw-semibold text-gray-500">dam@consilting.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2023</td>
                            <td>$756.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-semibold text-gray-500">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2023</td>
                            <td>$753.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-semibold text-gray-500">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$931.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-semibold text-gray-500">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2023</td>
                            <td>$488.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bold px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-500">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2023</td>
                            <td>$988.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-semibold text-gray-500">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2023</td>
                            <td>$729.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bold px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                        <div class="fw-semibold text-gray-500">emma@intenso.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2023</td>
                            <td>$879.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bold px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-semibold text-gray-500">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$749.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-semibold text-gray-500">mik@pex.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2023</td>
                            <td>$891.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                        <div class="fw-semibold text-gray-500">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Nov 10, 2023</td>
                            <td>$872.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bold px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</x-default-layout>
