<x-default-layout>
    @section('title')
    Create API Key
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('utilities.modals.forms.create-api-key') }}
    @endsection

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Heading-->
            <div class="card-px text-center pt-15 pb-15">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bold mb-0">Create API Key Modal Example</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold py-7">Click on the below buttons to launch
                    <br />a new API Key creation example.</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_create_api_key">Create API Key</a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
            <!--begin::Illustration-->
            <div class="text-center pb-15 px-5">
                <img src="{{ asset('assets/media/illustrations/sketchy-1/16.png') }}" alt="" class="mw-100 h-200px h-sm-325px" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <!--begin::Modal - Create Api Key-->
    <div class="modal fade" id="kt_modal_create_api_key" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_create_api_key_header">
                    <!--begin::Modal title-->
                    <h2>Create API Key</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Form-->
                <form id="kt_modal_create_api_key_form" class="form" action="#">
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Notice-->
                            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-information fs-2tx text-warning me-4">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack flex-grow-1">
                                    <!--begin::Content-->
                                    <div class="fw-semibold">
                                        <h4 class="text-gray-900 fw-bold">Please Note!</h4>
                                        <div class="fs-6 text-gray-700">Adding new API key may afftect to your
                                            <a href="#">Affiliate Income</a></div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Notice-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">API Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="Your API Name" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Short Description</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Describe your API"></textarea>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Category</label>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select name="category" data-control="select2" data-hide-search="true" data-placeholder="Select a Category..." class="form-select form-select-solid">
                                    <option value="">Select a Category...</option>
                                    <option value="1">CRM</option>
                                    <option value="2">Project Alice</option>
                                    <option value="3">Keenthemes</option>
                                    <option value="4">General</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Heading-->
                                <div class="mb-3">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-5 fw-semibold">
                                        <span class="required">Specify Your API Method</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Your billing numbers will be calculated based on your API method">
                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Description-->
                                    <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Row-->
                                <div class="fv-row">
                                    <!--begin::Radio group-->
                                    <div class="btn-group w-100" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button]">
                                        <!--begin::Radio-->
                                        <label class="btn btn-outline btn-active-success btn-color-muted" data-kt-button="true">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="method" value="1" />
                                            <!--end::Input-->
                                            Open API</label>
                                        <!--end::Radio-->
                                        <!--begin::Radio-->
                                        <label class="btn btn-outline btn-active-success btn-color-muted active" data-kt-button="true">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="method" checked="checked" value="2" />
                                            <!--end::Input-->
                                            SQL Call</label>
                                        <!--end::Radio-->
                                        <!--begin::Radio-->
                                        <label class="btn btn-outline btn-active-success btn-color-muted" data-kt-button="true">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="method" value="3" />
                                            <!--end::Input-->
                                            UI/UX</label>
                                        <!--end::Radio-->
                                        <!--begin::Radio-->
                                        <label class="btn btn-outline btn-active-success btn-color-muted" data-kt-button="true">
                                            <!--begin::Input-->
                                            <input class="btn-check" type="radio" name="method" value="4" />
                                            <!--end::Input-->
                                            Docs</label>
                                        <!--end::Radio-->
                                    </div>
                                    <!--end::Radio group-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_create_api_key_cancel" class="btn btn-light me-3">Discard</button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create Api Key-->

</x-default-layout>
