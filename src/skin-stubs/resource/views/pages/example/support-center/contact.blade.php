<x-default-layout>
    @section('title')
    Contact
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('support-center.contact') }}
    @endsection

    <!--begin::Hero card-->
    <div class="card mb-12">
        <!--begin::Hero body-->
        <div class="card-body flex-column p-5">
            <!--begin::Hero content-->
            <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                    <!--begin::Title-->
                    <h1 class="fw-bold fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
                    <!--end::Title-->
                    <!--begin::Input group-->
                    <div class="position-relative w-100">
                        <i class="ki-duotone ki-magnifier fs-2 text-primary position-absolute top-50 translate-middle ms-8">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-500 mw-500px" name="search" value="" placeholder="Ask a question" />
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Wrapper-->
                <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                    <!--begin::Illustration-->
                    <img src="{{ asset('assets/media/illustrations/sketchy-1/20.png') }}" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12" />
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Hero content-->
            <!--begin::Hero nav-->
            <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                <!--begin::Nav-->
                <ul class="nav flex-wrap border-transparent fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/overview.html">Overview</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/tickets/list.html">tickets</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/tutorials/list.html">Tutorials</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/faq.html">FAQ</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/licenses.html">Licenses</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="apps/support-center/contact.html">Contact US</a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--end::Nav-->
                <!--begin::Action-->
                <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bold fs-8 fs-lg-base">Create Ticket</a>
                <!--end::Action-->
            </div>
            <!--end::Hero nav-->
        </div>
        <!--end::Hero body-->
    </div>
    <!--end::Hero card-->
    <!--begin::Contact-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::Row-->
            <div class="row mb-3">
                <!--begin::Col-->
                <div class="col-md-6 pe-lg-10">
                    <!--begin::Form-->
                    <form action="" class="form mb-15" method="post" id="kt_contact_form">
                        <h1 class="fw-bold text-gray-900 mb-9">Send Us Email</h1>
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-semibold mb-2">Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Email</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="email" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Subject</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="subject" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-10 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Message</label>
                            <textarea class="form-control form-control-solid" rows="6" name="message" placeholder=""></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Submit-->
                        <button type="submit" class="btn btn-primary" id="kt_contact_submit_button">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Send Feedback</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                        <!--end::Submit-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-md-6 ps-lg-10">
                    <!--begin::Map-->
                    <div id="kt_contact_map" class="w-100 rounded mb-2 mb-lg-0 mt-2" style="height: 486px"></div>
                    <!--end::Map-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-5 mb-5 mb-lg-15">
                <!--begin::Col-->
                <div class="col-sm-6 pe-lg-10">
                    <!--begin::Phone-->
                    <div class="bg-light card-rounded d-flex flex-column flex-center flex-center p-10 h-100">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-briefcase fs-3tx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Subtitle-->
                        <h1 class="text-gray-900 fw-bold my-5">Let’s Speak</h1>
                        <!--end::Subtitle-->
                        <!--begin::Number-->
                        <div class="text-gray-700 fw-semibold fs-2">1 (833) 597-7538</div>
                        <!--end::Number-->
                    </div>
                    <!--end::Phone-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-6 ps-lg-10">
                    <!--begin::Address-->
                    <div class="text-center bg-light card-rounded d-flex flex-column flex-center p-10 h-100">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-geolocation fs-3tx text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Subtitle-->
                        <h1 class="text-gray-900 fw-bold my-5">Our Head Office</h1>
                        <!--end::Subtitle-->
                        <!--begin::Description-->
                        <div class="text-gray-700 fs-3 fw-semibold">Churchill-laan 16 II, 1052 CD, Amsterdam</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Address-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center">
                <!--begin::Body-->
                <div class="card-body py-12">
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/instagram-2-1.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/github.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/behance.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/pinterest-p.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/twitter.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                    <!--begin::Icon-->
                    <a href="#" class="mx-4">
                        <img src="{{ asset('assets/media/svg/brand-logos/dribbble-icon-1.svg') }}" class="h-30px my-2" alt="" />
                    </a>
                    <!--end::Icon-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Contact-->
    <!--begin::Modal - Support Center - Create Ticket-->
    <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_ticket_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Create Ticket</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-gray-500 fw-semibold fs-5">If you need more info, please check
                                <a href="" class="fw-bold link-primary">Support Guidelines</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Subject</span>
                                <span class="ms-2" data-bs-toggle="tooltip" title="Specify a subject for your issue">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Product</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product">
                                    <option value="">Select a product...</option>
                                    <option value="1">HTML Theme</option>
                                    <option value="1">Angular App</option>
                                    <option value="1">Vue App</option>
                                    <option value="1">React Theme</option>
                                    <option value="1">Figma UI Kit</option>
                                    <option value="3">Laravel App</option>
                                    <option value="4">Blazor App</option>
                                    <option value="5">Django App</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Assign</label>
                                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user">
                                    <option value="">Select a user...</option>
                                    <option value="1">Karina Clark</option>
                                    <option value="2">Robert Doe</option>
                                    <option value="3">Niel Owen</option>
                                    <option value="4">Olivia Wild</option>
                                    <option value="5">Sean Bean</option>
                                </select>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row g-9 mb-8">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Status</label>
                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Open" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1" selected="selected">Open</option>
                                    <option value="2">Pending</option>
                                    <option value="3">Resolved</option>
                                    <option value="3">Closed</option>
                                </select>
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <label class="required fs-6 fw-semibold mb-2">Due Date</label>
                                <!--begin::Input-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                        <span class="symbol-label bg-secondary">
                                            <i class="ki-duotone ki-element-11">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </span>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Datepicker-->
                                    <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <label class="fs-6 fw-semibold mb-2">Attachments</label>
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_modal_create_ticket_attachments">
                                <!--begin::Message-->
                                <div class="dz-message needsclick align-items-center">
                                    <!--begin::Icon-->
                                    <i class="ki-duotone ki-file-up fs-3hx text-primary">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--end::Icon-->
                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                        <span class="fw-semibold fs-7 text-gray-500">Upload up to 10 files</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">Notifications</label>
                                    <div class="fs-7 text-gray-500">Allow Notifications by Phone or Email</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked" />
                                        <span class="form-check-label fw-semibold">Email</span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone" />
                                        <span class="form-check-label fw-semibold">Phone</span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Support Center - Create Ticket-->

</x-default-layout>
