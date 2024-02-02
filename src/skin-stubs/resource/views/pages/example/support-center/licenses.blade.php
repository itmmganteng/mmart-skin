<x-default-layout>
    @section('title')
    Licenses
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('support-center.licenses') }}
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
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="apps/support-center/licenses.html">Licenses</a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item my-1">
                        <a class="btn btn-color-gray-600 btn-active-secondary btn-active-color-primary fw-bolder fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="apps/support-center/contact.html">Contact US</a>
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
    <!--begin::About card-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-10 p-lg-15">
            <!--begin::Content main-->
            <div class="mb-14">
                <!--begin::Heading-->
                <div class="mb-15">
                    <!--begin::Title-->
                    <h1 class="fs-2x text-gray-900 mb-6">License Comparision</h1>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-gray-600 fw-semibold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
                <!--begin::Body-->
                <!--begin::Table-->
                <div class="mb-14">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bold fs-6 text-gray-800 text-center border-0 bg-light">
                                    <th class="min-w-200px rounded-start"></th>
                                    <th class="min-w-140px">Regular</th>
                                    <th class="min-w-120px">Multiple</th>
                                    <th class="min-w-100px rounded-end">Extended</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="border-bottom border-dashed">
                                <tr class="fw-semibold fs-6 text-gray-800 text-center">
                                    <td class="text-start ps-6 fs-4">Number of end products or domains</td>
                                    <td>1</td>
                                    <td>Unlimited</td>
                                    <td>1</td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-start ps-6">
                                        <div class="fw-semibold fs-4 text-gray-800">Free end product</div>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                        <i class="ki-duotone ki-0 fs-2x text-success"></i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                        <i class="ki-duotone ki-0 fs-2x text-success"></i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                        <i class="ki-duotone ki-0 fs-2x text-success"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-start ps-6">
                                        <div class="fw-semibold fs-4 text-gray-800">End product with paid services</div>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-0 fs-2x text-danger"></i>
                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-0 fs-2x text-danger"></i>
                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-check fs-2x text-success"></i>
                                        <i class="ki-duotone ki-0 fs-2x text-success"></i>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td class="text-start ps-6">
                                        <div class="fw-semibold fs-4 text-gray-800">Use in derivative themes or “generators”</div>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-0 fs-2x text-danger"></i>
                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-0 fs-2x text-danger"></i>
                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </td>
                                    <td>
                                        <i class="ki-duotone ki-0 fs-2x text-danger"></i>
                                        <i class="ki-duotone ki-cross fs-2x text-danger">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end::Table-->
                <!--begin::Block-->
                <div class="mb-20 pb-lg-20">
                    <!--begin::Title-->
                    <h2 class="fw-bold text-gray-900 mb-8">Regular License:</h2>
                    <!--end::Title-->
                    <!--begin::List-->
                    <ul class="fs-4 fw-semibold mb-6">
                        <li>
                            <span class="text-gray-700">E-commerce site</span>
                        </li>
                        <li class="my-2">
                            <span class="text-gray-700">Company business activity dashboard</span>
                        </li>
                        <li>
                            <span class="text-gray-700">Customer support center</span>
                        </li>
                    </ul>
                    <!--end::List-->
                    <!--begin::Text-->
                    <div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website or Admin Panel is used only as interface(eCommerce site) to sell other's products you can use Regular license.
                        <br />If you are going to use the item on one domain and multiple subdomains, you only require one Licence.(ex: www.
                        <span class="text-gray-900">domain.com</span>/site1 – site2.
                        <span class="text-gray-900">domain.com</span>– site.3.
                        <span class="text-gray-900">domain.com</span>).</div>
                    <!--end::Text-->
                    <!--begin::Title-->
                    <h2 class="fw-bold text-gray-900 mb-7">Multisite License:</h2>
                    <!--end::Title-->
                    <!--begin::List-->
                    <ul>
                        <li>
                            <span class="fs-4 fw-semibold text-gray-700">It works the same as the Standard License, but you can use it in unlimited count of projects.</span>
                        </li>
                    </ul>
                    <!--end::List-->
                    <!--begin::Text-->
                    <div class="fs-4 fw-semibold text-gray-700 mb-13">If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. if you are going to use the item on multiple domains, then you will need to purchase a Licence for each domain or buy Multisite License.
                        <br />(ex: www.domain-site-
                        <span class="text-gray-900">one.com</span>– www.domain-site.
                        <span class="text-gray-900">two.com</span>– www.site-three-
                        <span class="text-gray-900">domain.com</span>).</div>
                    <!--end::Text-->
                    <!--begin::Title-->
                    <h2 class="fw-bold text-gray-900 mb-8">Extended License:</h2>
                    <!--end::Title-->
                    <!--begin::List-->
                    <ul class="fs-4 fw-semibold mb-6">
                        <li>
                            <span class="text-gray-700">SaaS projects</span>
                        </li>
                        <li class="my-2">
                            <span class="text-gray-700">Photo stock with PRO subscription</span>
                        </li>
                        <li>
                            <span class="text-gray-700">Cloud service with paid plans</span>
                        </li>
                    </ul>
                    <!--end::List-->
                    <!--begin::Text-->
                    <div class="fs-4 fw-semibold text-gray-700">E-commerce site Company business activity dashboard Customer support center If users can free browse and use your website is used only as interface(eCommerce site) to sell other's products you can use Regular license. If you are going to use the item on one domain and multiple subdomains, you only require one Licence . (ex: www.domain.com/site1 – site2.domain.com – site.3.domain.com).</div>
                    <!--end::Text-->
                </div>
                <!--end::Block-->
                <!--end::Body-->
            </div>
            <!--end::Content main-->
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
    <!--end::About card-->
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
