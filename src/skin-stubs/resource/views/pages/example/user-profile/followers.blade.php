<x-default-layout>
    @section('title')
        Followers
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-profile.followers') }}
    @endsection

    @include('pages.example.user-profile.navbar')

    <!--begin::Followers toolbar-->
    <div class="d-flex flex-wrap flex-stack mb-6">
        <!--begin::Title-->
        <h3 class="text-gray-800 fw-bold my-2">My Connections
        <span class="fs-6 text-gray-500 fw-semibold ms-1">(29)</span></h3>
        <!--end::Title-->
        <!--begin::Controls-->
        <div class="d-flex my-2">
            <!--begin::Select-->
            <select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-sm form-select-solid w-125px">
                <option value="Active" selected="selected">Active</option>
                <option value="Approved">In Progress</option>
                <option value="Declined">To Do</option>
                <option value="In Progress">Completed</option>
            </select>
            <!--end::Select-->
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Followers toolbar-->
    <!--begin::Row-->
    <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
        <!--begin::Followers-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-1.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Kitona Johnson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Web Designer at Nextop Ltd.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-14.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Robert Doe</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Marketing Analytic at Avito Ltd.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-12.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Soul Jacob</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-7.jpg') }}" alt="image" />
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Nina Strong</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">CTO at Kilp Ltd.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--end::Followers-->
    </div>
    <!--end::Row-->
    <!--begin::Row(for show more)-->
    <div class="row g-6 mb-6 g-xl-9 mb-xl-9 d-none" id="kt_followers_show_more_cards">
        <!--begin::Followers-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-11.jpg') }}" alt="image" />
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Patric Watson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <img src="{{ asset('assets/media//avatars/300-6.jpg') }}" alt="image" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Olivia Larson</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Seal Inc.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-warning bg-light-warning">A</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Adam Williams</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">System Arcitect at Wolto Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-info bg-light-info">P</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Paul Marcus</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Art Director at Novica Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light-primary btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-check following fs-3"></i>
                        <i class="ki-duotone ki-plus follow fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Following</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-success bg-light-success">N</span>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Neil Owen</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Accountant at Numbers Co.</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center flex-column py-9 px-5">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-65px symbol-circle mb-5">
                        <span class="symbol-label fs-2x fw-semibold text-primary bg-light-primary">S</span>
                        <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div>
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Name-->
                    <a href="#" class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">Sean Paul</a>
                    <!--end::Name-->
                    <!--begin::Position-->
                    <div class="fw-semibold text-gray-500 mb-6">Developer at Loop Inc</div>
                    <!--end::Position-->
                    <!--begin::Info-->
                    <div class="d-flex flex-center flex-wrap mb-5">
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$14,560</div>
                            <div class="fw-semibold text-gray-500">Earnings</div>
                        </div>
                        <!--end::Stats-->
                        <!--begin::Stats-->
                        <div class="border border-dashed rounded min-w-90px py-3 px-4 mx-2 mb-3">
                            <div class="fs-6 fw-bold text-gray-700">$236,400</div>
                            <div class="fw-semibold text-gray-500">Sales</div>
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                    <!--begin::Follow-->
                    <button class="btn btn-sm btn-light btn-flex btn-center" data-kt-follow-btn="true">
                        <i class="ki-duotone ki-plus follow fs-3"></i>
                        <i class="ki-duotone ki-check following fs-3 d-none"></i>
                        <!--begin::Indicator label-->
                        <span class="indicator-label">Follow</span>
                        <!--end::Indicator label-->
                        <!--begin::Indicator progress-->
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        <!--end::Indicator progress-->
                    </button>
                    <!--end::Follow-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--end::Col-->
        <!--end::Followers-->
    </div>
    <!--end::Row-->
    <!--begin::Show more-->
    <div class="d-flex flex-center">
        <button class="btn btn-primary" id="kt_followers_show_more_button">
            <!--begin::Indicator label-->
            <span class="indicator-label">Show more</span>
            <!--end::Indicator label-->
            <!--begin::Indicator progress-->
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            <!--end::Indicator progress-->
        </button>
    </div>
    <!--end::Show more-->
</x-default-layout>
