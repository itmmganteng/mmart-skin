<x-default-layout>
    @section('title')
    Edit Product
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('ecommerce.catalog.edit-product') }}
    @endsection

    <!--begin::Form-->
    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="apps/ecommerce/catalog/products.html">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Thumbnail</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url({{ asset('assets/media//stock/ecommerce/78.png') }})"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Status</h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                    </div>
                    <!--begin::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                        <option></option>
                        <option value="published" selected="selected">Published</option>
                        <option value="draft">Draft</option>
                        <option value="scheduled">Scheduled</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Set the product status.</div>
                    <!--end::Description-->
                    <!--begin::Datepicker-->
                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                    </div>
                    <!--end::Datepicker-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Status-->
            <!--begin::Category & tags-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Product Details</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label">Categories</label>
                    <!--end::Label-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
                        <option></option>
                        <option value="Computers">Computers</option>
                        <option value="Watches">Watches</option>
                        <option value="Headphones">Headphones</option>
                        <option value="Footwear">Footwear</option>
                        <option value="Cameras">Cameras</option>
                        <option value="Shirts">Shirts</option>
                        <option value="Household">Household</option>
                        <option value="Handbags">Handbags</option>
                        <option value="Wines">Wines</option>
                        <option value="Sandals">Sandals</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                    <!--begin::Button-->
                    <a href="apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
                    <i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
                    <!--end::Button-->
                    <!--begin::Input group-->
                    <!--begin::Label-->
                    <label class="form-label d-block">Tags</label>
                    <!--end::Label-->
                    <!--begin::Input-->
                    <input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="new, trending, sale" />
                    <!--end::Input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Add tags to a product.</div>
                    <!--end::Description-->
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category & tags-->
            <!--begin::Card widget 6-->
            <div class="card card-flush">
                <!--begin::Header-->
                <div class="card-header pt-5">
                    <!--begin::Title-->
                    <div class="card-title d-flex flex-column">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <!--begin::Currency-->
                            <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                            <!--end::Currency-->
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">2,420</span>
                            <!--end::Amount-->
                            <!--begin::Badge-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>2.6%</span>
                            <!--end::Badge-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Subtitle-->
                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Average Daily Sales</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body d-flex align-items-end px-0 pb-0">
                    <!--begin::Chart-->
                    <div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
                    <!--end::Chart-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card widget 6-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Product Template</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Select store template-->
                    <label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product template</label>
                    <!--end::Select store template-->
                    <!--begin::Select2-->
                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
                        <option></option>
                        <option value="default" selected="selected">Default template</option>
                        <option value="electronics">Electronics</option>
                        <option value="office">Office stationary</option>
                        <option value="fashion">Fashion</option>
                    </select>
                    <!--end::Select2-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">Assign a template from your current theme to define how a single product is displayed.</div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Template settings-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
                </li>
                <!--end:::Tab item-->
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_reviews">Reviews</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin::Tab content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Product Name</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="Sample product" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Media-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Media</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row mb-2">
                                    <!--begin::Dropzone-->
                                    <div class="dropzone" id="kt_ecommerce_add_product_media">
                                        <!--begin::Message-->
                                        <div class="dz-message needsclick">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-file-up text-primary fs-3x">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Info-->
                                            <div class="ms-4">
                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                    </div>
                                    <!--end::Dropzone-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product media gallery.</div>
                                <!--end::Description-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Media-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Pricing</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Base Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="199.99" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the product price.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-10">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold mb-2">Discount Type
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Select a discount type that will be applied to this product">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span></label>
                                    <!--End::Label-->
                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="1" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="2" checked="checked" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Option-->
                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                <!--begin::Radio-->
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input" type="radio" name="discount_option" value="3" />
                                                </span>
                                                <!--end::Radio-->
                                                <!--begin::Info-->
                                                <span class="ms-5">
                                                    <span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
                                                </span>
                                                <!--end::Info-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                    <!--begin::Label-->
                                    <label class="form-label">Set Discount Percentage</label>
                                    <!--end::Label-->
                                    <!--begin::Slider-->
                                    <div class="d-flex flex-column text-center mb-5">
                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                            <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                        </div>
                                        <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                    </div>
                                    <!--end::Slider-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                    <!--begin::Label-->
                                    <label class="form-label">Fixed Discounted Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="required form-label">Tax Class</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
                                            <option></option>
                                            <option value="0">Tax Free</option>
                                            <option value="1" selected="selected">Taxable Goods</option>
                                            <option value="2">Downloadable Product</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product tax class.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">VAT Amount (%)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value="35" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Pricing-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::Inventory-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Inventory</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">SKU</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="011985001" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product SKU.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Barcode</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" name="barcode" class="form-control mb-2" placeholder="Barcode Number" value="45874521458" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product barcode number.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label class="required form-label">Quantity</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="d-flex gap-3">
                                        <input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="24" />
                                        <input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" />
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Enter the product quantity.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Label-->
                                    <label class="form-label">Allow Backorders</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <label class="form-check-label">Yes</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Inventory-->
                        <!--begin::Variations-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Variations</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                    <!--begin::Label-->
                                    <label class="form-label">Add Product Variations</label>
                                    <!--end::Label-->
                                    <!--begin::Repeater-->
                                    <div id="kt_ecommerce_add_product_options">
                                        <!--begin::Form group-->
                                        <div class="form-group">
                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                    <!--begin::Select2-->
                                                    <div class="w-100 w-md-200px">
                                                        <select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
                                                            <option></option>
                                                            <option value="color">Color</option>
                                                            <option value="size">Size</option>
                                                            <option value="material">Material</option>
                                                            <option value="style">Style</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Select2-->
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
                                                    <!--end::Input-->
                                                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                        <i class="ki-duotone ki-cross fs-1">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                        </i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Form group-->
                                        <!--begin::Form group-->
                                        <div class="form-group mt-5">
                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                            <i class="ki-duotone ki-plus fs-2"></i>Add another variation</button>
                                        </div>
                                        <!--end::Form group-->
                                    </div>
                                    <!--end::Repeater-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Variations-->
                        <!--begin::Shipping-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Shipping</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="fv-row">
                                    <!--begin::Input-->
                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                        <input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" checked="checked" />
                                        <label class="form-check-label">This is a physical product</label>
                                    </div>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Shipping form-->
                                <div id="kt_ecommerce_add_product_shipping" class="mt-10">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Weight</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="4.3" />
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Dimension</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="d-flex flex-wrap flex-sm-nowrap gap-3">
                                            <input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="12" />
                                            <input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="4" />
                                            <input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="8.5" />
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Shipping form-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Shipping-->
                        <!--begin::Meta options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Meta Options</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Title</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Description</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Meta Tag Keywords</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
                                    <code>,</code>between each keyword.</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::Meta options-->
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div class="tab-pane fade" id="kt_ecommerce_add_product_reviews" role="tab-panel">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::Reviews-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Customer Reviews</h2>
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Rating label-->
                                    <span class="fw-bold me-5">Overall Rating:</span>
                                    <!--end::Rating label-->
                                    <!--begin::Overall rating-->
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-2"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-2"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-2"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="ki-duotone ki-star fs-2"></i>
                                        </div>
                                        <div class="rating-label">
                                            <i class="ki-duotone ki-star fs-2"></i>
                                        </div>
                                    </div>
                                    <!--end::Overall rating-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Table-->
                                <table class="table table-row-dashed fs-6 gy-5 my-0" id="kt_ecommerce_add_product_reviews">
                                    <thead>
                                        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                            <th class="w-10px pe-2">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_add_product_reviews .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="min-w-125px">Rating</th>
                                            <th class="min-w-175px">Customer</th>
                                            <th class="min-w-175px">Comment</th>
                                            <th class="min-w-100px text-end fs-7">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">M</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Melody Macy</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I like this design</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">Today</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-1.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Max Smith</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Good product for outdoors or indoors</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">day ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-5.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Sean Bean</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Awesome quality with great materials used, but could be more comfortable</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">11:20 PM</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-25.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Brian Cox</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">This is the best product I've ever used.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">2 days ago</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-3">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-warning">
                                                            <span class="text-warning">C</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Mikaela Collins</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I thought it was just average, I prefer other brands</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-9.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Francis Mitcham</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Beautifully crafted. Worth every penny.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 24</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">O</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Olivia Wild</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Awesome value for money. Shipping could be faster tho.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">July 13</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-primary">
                                                            <span class="text-primary">N</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Neil Owen</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Excellent quality, I got it for my son's birthday and he loved it!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">May 25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-23.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Dan Wilson</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">I got this for Christmas last year, and it's still the best product I've ever used!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">April 15</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-danger">
                                                            <span class="text-danger">E</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Emma Bold</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Was skeptical at first, but after using it for 3 months, I'm hooked! Will definately buy another!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">April 3</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-4">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-12.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Ana Crown</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Great product, too bad I missed out on the sale.</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 17</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <div class="symbol-label bg-light-info">
                                                            <span class="text-info">A</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">Robert Doe</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Got this on sale! Best decision ever!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <!--begin::Checkbox-->
                                                <div class="form-check form-check-sm form-check-custom form-check-solid mt-1">
                                                    <input class="form-check-input" type="checkbox" value="1" />
                                                </div>
                                                <!--end::Checkbox-->
                                            </td>
                                            <td data-order="rating-5">
                                                <!--begin::Rating-->
                                                <div class="rating">
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
                                                <!--end::Rating-->
                                            </td>
                                            <td>
                                                <a href="apps/inbox/reply.html" class="d-flex text-gray-900 text-gray-800 text-hover-primary">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-circle symbol-25px me-3">
                                                        <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-13.jpg') }})"></span>
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Name-->
                                                    <span class="fw-bold">John Miller</span>
                                                    <!--end::Name-->
                                                </a>
                                            </td>
                                            <td class="text-gray-600 fw-bold">Firesale is on! Buy now! Totally worth it!</td>
                                            <td class="text-end">
                                                <span class="fw-semibold text-muted">March 11</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Reviews-->
                    </div>
                </div>
                <!--end::Tab pane-->
            </div>
            <!--end::Tab content-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="apps/ecommerce/catalog/products.html" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                    <span class="indicator-label">Save Changes</span>
                    <span class="indicator-progress">Please wait...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>
    <!--end::Form-->

</x-default-layout>
