<x-default-layout>
    @section('title')
    Categories
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('ecommerce.catalog.categories') }}
    @endsection

    <!--begin::Category-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Category" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Add customer-->
                <a href="apps/ecommerce/catalog/add-category.html" class="btn btn-primary">Add Category</a>
                <!--end::Add customer-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-250px">Category</th>
                        <th class="min-w-150px">Category Type</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/68.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Computers</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Our computers and tablets include all the big brands.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/71.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Watches</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Our range of watches are perfect whether you’re looking to upgrade</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/58.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Headphones</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Our big range of headphones makes it easy to upgrade your device at a great price.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Manual</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/52.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Footwear</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Whatever your activity needs are, we’ve got you covered.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/76.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Cameras</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">You’ll find exactly what you’re looking for with our huge range of cameras.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Manual</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/207.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Shirts</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Any occasion, any time, we have everything you'll ever need.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/50.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Household</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Spice up your home decor with our wide selection.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Manual</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/193.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Toys</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Get the perfect gift for the little ones.</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/169.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Handbags</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Great fashion, great selections, great prices</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Manual</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/177.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Wines</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">Great taste, great selections, great prices</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/151.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Sandals</a>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7 fw-bold">In season summer footwear with a huge range of options</div>
                                    <!--end::Description-->
                                </div>
                            </div>
                        </td>
                        <td>
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Automated</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Category-->

</x-default-layout>
