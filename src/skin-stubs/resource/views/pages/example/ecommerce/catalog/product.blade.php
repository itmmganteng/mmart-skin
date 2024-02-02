<x-default-layout>
    @section('title')
    Product
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('ecommerce.catalog.product') }}
    @endsection

    <!--begin::Products-->
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
                    <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="published">Published</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Product</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-200px">Product</th>
                        <th class="text-end min-w-100px">SKU</th>
                        <th class="text-end min-w-70px">Qty</th>
                        <th class="text-end min-w-100px">Price</th>
                        <th class="text-end min-w-100px">Rating</th>
                        <th class="text-end min-w-100px">Status</th>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/1.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01368004</span>
                        </td>
                        <td class="text-end pe-0" data-order="10">
                            <span class="fw-bold ms-3">10</span>
                        </td>
                        <td class="text-end pe-0">96</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/2.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01584006</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">101</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/3.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03602001</span>
                        </td>
                        <td class="text-end pe-0" data-order="21">
                            <span class="fw-bold ms-3">21</span>
                        </td>
                        <td class="text-end pe-0">44</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/4.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03863009</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">52</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/5.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04570001</span>
                        </td>
                        <td class="text-end pe-0" data-order="23">
                            <span class="fw-bold ms-3">23</span>
                        </td>
                        <td class="text-end pe-0">100</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/6.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02868001</span>
                        </td>
                        <td class="text-end pe-0" data-order="40">
                            <span class="fw-bold ms-3">40</span>
                        </td>
                        <td class="text-end pe-0">130</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/7.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04773004</span>
                        </td>
                        <td class="text-end pe-0" data-order="14">
                            <span class="fw-bold ms-3">14</span>
                        </td>
                        <td class="text-end pe-0">189</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/8.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01694007</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">25</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/9.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01251007</span>
                        </td>
                        <td class="text-end pe-0" data-order="47">
                            <span class="fw-bold ms-3">47</span>
                        </td>
                        <td class="text-end pe-0">118</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/10.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02174004</span>
                        </td>
                        <td class="text-end pe-0" data-order="11">
                            <span class="fw-bold ms-3">11</span>
                        </td>
                        <td class="text-end pe-0">31</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/11.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03696002</span>
                        </td>
                        <td class="text-end pe-0" data-order="49">
                            <span class="fw-bold ms-3">49</span>
                        </td>
                        <td class="text-end pe-0">129</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/12.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01320005</span>
                        </td>
                        <td class="text-end pe-0" data-order="24">
                            <span class="fw-bold ms-3">24</span>
                        </td>
                        <td class="text-end pe-0">111</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/13.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04206009</span>
                        </td>
                        <td class="text-end pe-0" data-order="4">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">4</span>
                        </td>
                        <td class="text-end pe-0">157</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/14.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02285005</span>
                        </td>
                        <td class="text-end pe-0" data-order="0">
                            <span class="badge badge-light-danger">Sold out</span>
                            <span class="fw-bold text-danger ms-3">0</span>
                        </td>
                        <td class="text-end pe-0">67</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/15.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03740007</span>
                        </td>
                        <td class="text-end pe-0" data-order="3">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">3</span>
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/16.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01517009</span>
                        </td>
                        <td class="text-end pe-0" data-order="50">
                            <span class="fw-bold ms-3">50</span>
                        </td>
                        <td class="text-end pe-0">40</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/17.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03267009</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">92</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/18.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03133008</span>
                        </td>
                        <td class="text-end pe-0" data-order="50">
                            <span class="fw-bold ms-3">50</span>
                        </td>
                        <td class="text-end pe-0">252</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/19.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03652003</span>
                        </td>
                        <td class="text-end pe-0" data-order="11">
                            <span class="fw-bold ms-3">11</span>
                        </td>
                        <td class="text-end pe-0">90</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/20.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02903004</span>
                        </td>
                        <td class="text-end pe-0" data-order="31">
                            <span class="fw-bold ms-3">31</span>
                        </td>
                        <td class="text-end pe-0">223</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/21.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02966001</span>
                        </td>
                        <td class="text-end pe-0" data-order="0">
                            <span class="badge badge-light-danger">Sold out</span>
                            <span class="fw-bold text-danger ms-3">0</span>
                        </td>
                        <td class="text-end pe-0">35</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/22.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02262008</span>
                        </td>
                        <td class="text-end pe-0" data-order="11">
                            <span class="fw-bold ms-3">11</span>
                        </td>
                        <td class="text-end pe-0">180</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/23.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04635009</span>
                        </td>
                        <td class="text-end pe-0" data-order="50">
                            <span class="fw-bold ms-3">50</span>
                        </td>
                        <td class="text-end pe-0">131</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/24.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04619008</span>
                        </td>
                        <td class="text-end pe-0" data-order="24">
                            <span class="fw-bold ms-3">24</span>
                        </td>
                        <td class="text-end pe-0">59</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/25.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01186006</span>
                        </td>
                        <td class="text-end pe-0" data-order="12">
                            <span class="fw-bold ms-3">12</span>
                        </td>
                        <td class="text-end pe-0">42</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/26.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01337009</span>
                        </td>
                        <td class="text-end pe-0" data-order="18">
                            <span class="fw-bold ms-3">18</span>
                        </td>
                        <td class="text-end pe-0">125</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/27.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01239002</span>
                        </td>
                        <td class="text-end pe-0" data-order="7">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">7</span>
                        </td>
                        <td class="text-end pe-0">202</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/28.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02543002</span>
                        </td>
                        <td class="text-end pe-0" data-order="31">
                            <span class="fw-bold ms-3">31</span>
                        </td>
                        <td class="text-end pe-0">76</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/29.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02817007</span>
                        </td>
                        <td class="text-end pe-0" data-order="49">
                            <span class="fw-bold ms-3">49</span>
                        </td>
                        <td class="text-end pe-0">47</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/30.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04382002</span>
                        </td>
                        <td class="text-end pe-0" data-order="41">
                            <span class="fw-bold ms-3">41</span>
                        </td>
                        <td class="text-end pe-0">22</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/31.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01694006</span>
                        </td>
                        <td class="text-end pe-0" data-order="32">
                            <span class="fw-bold ms-3">32</span>
                        </td>
                        <td class="text-end pe-0">179</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/32.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04637002</span>
                        </td>
                        <td class="text-end pe-0" data-order="18">
                            <span class="fw-bold ms-3">18</span>
                        </td>
                        <td class="text-end pe-0">223</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/33.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02125009</span>
                        </td>
                        <td class="text-end pe-0" data-order="15">
                            <span class="fw-bold ms-3">15</span>
                        </td>
                        <td class="text-end pe-0">11</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/34.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03629003</span>
                        </td>
                        <td class="text-end pe-0" data-order="15">
                            <span class="fw-bold ms-3">15</span>
                        </td>
                        <td class="text-end pe-0">223</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/35.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01349008</span>
                        </td>
                        <td class="text-end pe-0" data-order="13">
                            <span class="fw-bold ms-3">13</span>
                        </td>
                        <td class="text-end pe-0">82</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/36.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02312003</span>
                        </td>
                        <td class="text-end pe-0" data-order="6">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">6</span>
                        </td>
                        <td class="text-end pe-0">200</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/37.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03122006</span>
                        </td>
                        <td class="text-end pe-0" data-order="50">
                            <span class="fw-bold ms-3">50</span>
                        </td>
                        <td class="text-end pe-0">294</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/38.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03486003</span>
                        </td>
                        <td class="text-end pe-0" data-order="46">
                            <span class="fw-bold ms-3">46</span>
                        </td>
                        <td class="text-end pe-0">162</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/39.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04747008</span>
                        </td>
                        <td class="text-end pe-0" data-order="9">
                            <span class="badge badge-light-warning">Low stock</span>
                            <span class="fw-bold text-warning ms-3">9</span>
                        </td>
                        <td class="text-end pe-0">103</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/40.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03678007</span>
                        </td>
                        <td class="text-end pe-0" data-order="26">
                            <span class="fw-bold ms-3">26</span>
                        </td>
                        <td class="text-end pe-0">238</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/41.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01819004</span>
                        </td>
                        <td class="text-end pe-0" data-order="20">
                            <span class="fw-bold ms-3">20</span>
                        </td>
                        <td class="text-end pe-0">39</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/42.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">02826005</span>
                        </td>
                        <td class="text-end pe-0" data-order="49">
                            <span class="fw-bold ms-3">49</span>
                        </td>
                        <td class="text-end pe-0">34</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/43.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03987009</span>
                        </td>
                        <td class="text-end pe-0" data-order="26">
                            <span class="fw-bold ms-3">26</span>
                        </td>
                        <td class="text-end pe-0">119</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/44.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01305003</span>
                        </td>
                        <td class="text-end pe-0" data-order="32">
                            <span class="fw-bold ms-3">32</span>
                        </td>
                        <td class="text-end pe-0">40</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/45.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04664007</span>
                        </td>
                        <td class="text-end pe-0" data-order="47">
                            <span class="fw-bold ms-3">47</span>
                        </td>
                        <td class="text-end pe-0">263</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/46.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04111002</span>
                        </td>
                        <td class="text-end pe-0" data-order="20">
                            <span class="fw-bold ms-3">20</span>
                        </td>
                        <td class="text-end pe-0">110</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Published">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Published</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/47.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04628009</span>
                        </td>
                        <td class="text-end pe-0" data-order="30">
                            <span class="fw-bold ms-3">30</span>
                        </td>
                        <td class="text-end pe-0">163</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/48.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">03324004</span>
                        </td>
                        <td class="text-end pe-0" data-order="12">
                            <span class="fw-bold ms-3">12</span>
                        </td>
                        <td class="text-end pe-0">186</td>
                        <td class="text-end pe-0" data-order="rating-3">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/49.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">04691009</span>
                        </td>
                        <td class="text-end pe-0" data-order="48">
                            <span class="fw-bold ms-3">48</span>
                        </td>
                        <td class="text-end pe-0">260</td>
                        <td class="text-end pe-0" data-order="rating-5">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media//stock/ecommerce/50.png') }});"></span>
                                </a>
                                <!--end::Thumbnail-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">01427002</span>
                        </td>
                        <td class="text-end pe-0" data-order="20">
                            <span class="fw-bold ms-3">20</span>
                        </td>
                        <td class="text-end pe-0">133</td>
                        <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label checked">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                                <div class="rating-label">
                                    <i class="ki-duotone ki-star fs-6"></i>
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Scheduled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Scheduled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Products-->

</x-default-layout>
