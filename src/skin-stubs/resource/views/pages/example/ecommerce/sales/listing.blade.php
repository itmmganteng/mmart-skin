<x-default-layout>
    @section('title')
        Listing
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('ecommerce.sales.listing') }}
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
                    <input type="text" data-kt-ecommerce-order-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Flatpickr-->
                <div class="input-group w-250px">
                    <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="kt_ecommerce_sales_flatpickr" />
                    <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <!--end::Flatpickr-->
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-order-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="Cancelled">Cancelled</option>
                        <option value="Completed">Completed</option>
                        <option value="Denied">Denied</option>
                        <option value="Expired">Expired</option>
                        <option value="Failed">Failed</option>
                        <option value="Pending">Pending</option>
                        <option value="Processing">Processing</option>
                        <option value="Refunded">Refunded</option>
                        <option value="Delivered">Delivered</option>
                        <option value="Delivering">Delivering</option>
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="apps/ecommerce/catalog/add-product.html" class="btn btn-primary">Add Order</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_sales_table .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-100px">Order ID</th>
                        <th class="min-w-175px">Customer</th>
                        <th class="text-end min-w-70px">Status</th>
                        <th class="text-end min-w-100px">Total</th>
                        <th class="text-end min-w-100px">Date Added</th>
                        <th class="text-end min-w-100px">Date Modified</th>
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1" />
                            </div>
                        </td>
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13866</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Processing">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Processing</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$222.00</span>
                        </td>
                        <td class="text-end" data-order="2023-11-05">
                            <span class="fw-bold">05/11/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-08">
                            <span class="fw-bold">08/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13867</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="Max Smith" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Failed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Failed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$232.00</span>
                        </td>
                        <td class="text-end" data-order="2023-11-03">
                            <span class="fw-bold">03/11/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-07">
                            <span class="fw-bold">07/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13868</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$377.00</span>
                        </td>
                        <td class="text-end" data-order="2023-11-03">
                            <span class="fw-bold">03/11/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-06">
                            <span class="fw-bold">06/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13869</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Denied">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Denied</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$364.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-29">
                            <span class="fw-bold">29/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-05">
                            <span class="fw-bold">05/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13870</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="Francis Mitcham" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$86.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-28">
                            <span class="fw-bold">28/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-04">
                            <span class="fw-bold">04/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13871</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Delivered">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Delivered</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$187.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-29">
                            <span class="fw-bold">29/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-03">
                            <span class="fw-bold">03/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13872</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="Max Smith" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Expired">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Expired</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$218.00</span>
                        </td>
                        <td class="text-end" data-order="2023-11-01">
                            <span class="fw-bold">01/11/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-02">
                            <span class="fw-bold">02/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13873</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Cancelled">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Cancelled</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$303.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-30">
                            <span class="fw-bold">30/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-11-01">
                            <span class="fw-bold">01/11/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13874</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$123.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-28">
                            <span class="fw-bold">28/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-31">
                            <span class="fw-bold">31/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13875</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Processing">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Processing</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$20.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-25">
                            <span class="fw-bold">25/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-30">
                            <span class="fw-bold">30/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13876</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" alt="Ana Crown" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$99.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-23">
                            <span class="fw-bold">23/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-29">
                            <span class="fw-bold">29/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13877</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="Emma Smith" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$459.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-25">
                            <span class="fw-bold">25/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-28">
                            <span class="fw-bold">28/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13878</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Failed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Failed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$276.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-23">
                            <span class="fw-bold">23/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-27">
                            <span class="fw-bold">27/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13879</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="Francis Mitcham" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Pending">
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$87.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-23">
                            <span class="fw-bold">23/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-26">
                            <span class="fw-bold">26/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13880</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" alt="Ana Crown" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$229.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-24">
                            <span class="fw-bold">24/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-25">
                            <span class="fw-bold">25/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13881</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Processing">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Processing</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$314.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-22">
                            <span class="fw-bold">22/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-24">
                            <span class="fw-bold">24/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13882</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="Emma Smith" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Smith</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$226.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-22">
                            <span class="fw-bold">22/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-23">
                            <span class="fw-bold">23/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13883</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Failed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Failed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$477.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-18">
                            <span class="fw-bold">18/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-22">
                            <span class="fw-bold">22/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13884</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Processing">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Processing</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$175.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-17">
                            <span class="fw-bold">17/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-21">
                            <span class="fw-bold">21/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13885</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Mikaela Collins</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Failed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Failed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$149.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-14">
                            <span class="fw-bold">14/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-20">
                            <span class="fw-bold">20/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13886</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$245.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-15">
                            <span class="fw-bold">15/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-19">
                            <span class="fw-bold">19/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13887</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$122.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-17">
                            <span class="fw-bold">17/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-18">
                            <span class="fw-bold">18/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13888</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$22.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-16">
                            <span class="fw-bold">16/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-17">
                            <span class="fw-bold">17/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13889</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="John Miller" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$19.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-14">
                            <span class="fw-bold">14/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-16">
                            <span class="fw-bold">16/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13890</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Delivered">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Delivered</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$19.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-12">
                            <span class="fw-bold">12/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-15">
                            <span class="fw-bold">15/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13891</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="Francis Mitcham" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$150.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-11">
                            <span class="fw-bold">11/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-14">
                            <span class="fw-bold">14/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13892</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" alt="Ana Crown" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$126.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-09">
                            <span class="fw-bold">09/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-13">
                            <span class="fw-bold">13/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13893</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$260.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-09">
                            <span class="fw-bold">09/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-12">
                            <span class="fw-bold">12/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13894</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$100.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-10">
                            <span class="fw-bold">10/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-11">
                            <span class="fw-bold">11/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13895</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$237.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-04">
                            <span class="fw-bold">04/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-10">
                            <span class="fw-bold">10/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13896</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">O</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Olivia Wild</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Denied">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Denied</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$66.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-02">
                            <span class="fw-bold">02/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-09">
                            <span class="fw-bold">09/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13897</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Delivering">
                            <!--begin::Badges-->
                            <div class="badge badge-light-primary">Delivering</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$218.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-03">
                            <span class="fw-bold">03/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-08">
                            <span class="fw-bold">08/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13898</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-21.jpg') }}" alt="Ethan Wilder" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ethan Wilder</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$58.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-06">
                            <span class="fw-bold">06/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-07">
                            <span class="fw-bold">07/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13899</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$97.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-01">
                            <span class="fw-bold">01/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-06">
                            <span class="fw-bold">06/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13900</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$449.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-02">
                            <span class="fw-bold">02/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-05">
                            <span class="fw-bold">05/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13901</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$203.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-28">
                            <span class="fw-bold">28/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-04">
                            <span class="fw-bold">04/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13902</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Sean Bean" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$308.00</span>
                        </td>
                        <td class="text-end" data-order="2023-10-02">
                            <span class="fw-bold">02/10/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-03">
                            <span class="fw-bold">03/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13903</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="Francis Mitcham" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$44.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-29">
                            <span class="fw-bold">29/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-02">
                            <span class="fw-bold">02/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13904</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" alt="Ana Crown" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Ana Crown</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$203.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-27">
                            <span class="fw-bold">27/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-10-01">
                            <span class="fw-bold">01/10/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13905</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">M</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Melody Macy</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Refunded">
                            <!--begin::Badges-->
                            <div class="badge badge-light-info">Refunded</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$299.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-26">
                            <span class="fw-bold">26/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-30">
                            <span class="fw-bold">30/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13906</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="Max Smith" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Max Smith</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$166.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-23">
                            <span class="fw-bold">23/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-29">
                            <span class="fw-bold">29/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13907</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Emma Bold</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$399.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-26">
                            <span class="fw-bold">26/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-28">
                            <span class="fw-bold">28/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13908</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-info text-info">A</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Robert Doe</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Refunded">
                            <!--begin::Badges-->
                            <div class="badge badge-light-info">Refunded</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$242.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-25">
                            <span class="fw-bold">25/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-27">
                            <span class="fw-bold">27/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13909</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="Dan Wilson" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Dan Wilson</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$340.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-21">
                            <span class="fw-bold">21/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-26">
                            <span class="fw-bold">26/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13910</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-13.jpg') }}" alt="John Miller" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">John Miller</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$49.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-23">
                            <span class="fw-bold">23/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-25">
                            <span class="fw-bold">25/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13911</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-success text-success">L</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Lucy Kunic</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$402.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-21">
                            <span class="fw-bold">21/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-24">
                            <span class="fw-bold">24/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13912</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Sean Bean" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$477.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-18">
                            <span class="fw-bold">18/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-23">
                            <span class="fw-bold">23/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13913</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label fs-3 bg-light-primary text-primary">N</div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Neil Owen</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Pending">
                            <!--begin::Badges-->
                            <div class="badge badge-light-warning">Pending</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$356.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-21">
                            <span class="fw-bold">21/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-22">
                            <span class="fw-bold">22/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13914</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" alt="Sean Bean" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Sean Bean</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$209.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-19">
                            <span class="fw-bold">19/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-21">
                            <span class="fw-bold">21/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
                        <td data-kt-ecommerce-order-filter="order_id">
                            <a href="apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">13915</a>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="apps/user-management/users/view.html">
                                        <div class="symbol-label">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="Francis Mitcham" class="w-100" />
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary fs-5 fw-bold">Francis Mitcham</a>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0" data-order="Completed">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">Completed</div>
                            <!--end::Badges-->
                        </td>
                        <td class="text-end pe-0">
                            <span class="fw-bold">$138.00</span>
                        </td>
                        <td class="text-end" data-order="2023-09-18">
                            <span class="fw-bold">18/09/2023</span>
                        </td>
                        <td class="text-end" data-order="2023-09-20">
                            <span class="fw-bold">20/09/2023</span>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                            <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/details.html" class="menu-link px-3">View</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="apps/ecommerce/sales/edit-order.html" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-ecommerce-order-filter="delete_row">Delete</a>
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
