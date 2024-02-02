<x-default-layout>
    @section('title')
    Files
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('projects.files') }}
    @endsection

    @include('pages.example.projects.header')
    <!--begin::Toolbar-->
    <div class="d-flex flex-wrap flex-stack my-5">
        <!--begin::Heading-->
        <h3 class="fw-bold my-2">Project Files
            <span class="fs-6 text-gray-500 fw-semibold ms-1">+590</span></h3>
        <!--end::Heading-->
        <!--begin::Controls-->
        <div class="d-flex my-2">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative me-4">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute translate-middle-y top-50 ms-4">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid bg-body fw-semibold fs-7 w-150px ps-11" placeholder="Search" />
            </div>
            <!--end::Search-->
            <a href="apps/file-manager/folders.html" class='btn btn-primary btn-sm fw-bolder'>File Manager</a>
        </div>
        <!--end::Controls-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Row-->
    <div class="row g-6 g-xl-9 mb-6 mb-xl-9">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/pdf.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/pdf-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Project Reqs..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">3 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/doc.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/doc-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">CRM App Docs..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">3 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/css.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/css-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">User CRUD Styles</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">4 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/ai.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/ai-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Product Logo</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">5 days ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/sql.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/sql-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Orders backup</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">1 week ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/xml.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/xml-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">UTAIR CRM API Co..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">2 weeks ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100">
                <!--begin::Card body-->
                <div class="card-body d-flex justify-content-center text-center flex-column p-8">
                    <!--begin::Name-->
                    <a href="apps/file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
                        <!--begin::Image-->
                        <div class="symbol symbol-60px mb-5">
                            <img src="{{ asset('assets/media/svg/files/tif.svg') }}" class="theme-light-show" alt="" />
                            <img src="{{ asset('assets/media/svg/files/tif-dark.svg') }}" class="theme-dark-show" alt="" />
                        </div>
                        <!--end::Image-->
                        <!--begin::Title-->
                        <div class="fs-5 fw-bold mb-2">Tower Hill App..</div>
                        <!--end::Title-->
                    </a>
                    <!--end::Name-->
                    <!--begin::Description-->
                    <div class="fs-7 fw-semibold text-gray-500">3 weeks ago</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-4 col-xl-3">
            <!--begin::Card-->
            <div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
                <!--begin::Image-->
                <img src="{{ asset('assets/media/svg/files/upload.svg') }}" class="mb-5" alt="" />
                <!--end::Image-->
                <!--begin::Link-->
                <a href="#" class="text-hover-primary fs-5 fw-bold mb-2">File Upload</a>
                <!--end::Link-->
                <!--begin::Description-->
                <div class="fs-7 fw-semibold text-gray-500">Drag and drop files here</div>
                <!--end::Description-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Col-->
    </div>
    <!--end:Row-->

</x-default-layout>
