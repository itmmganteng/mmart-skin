<x-default-layout>
    @section('title')
    Add Contact
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('contacts.add-contact') }}
    @endsection

    <!--begin::Contacts App- Add New Contact-->
    <div class="row g-7">
        <!--begin::Contact groups-->
        <div class="col-lg-6 col-xl-3">
            <!--begin::Contact group wrapper-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Groups</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Contact groups-->
                    <div class="d-flex flex-column gap-5">
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary active">All Contacts</a>
                            <div class="badge badge-light-primary">9</div>
                        </div>
                        <!--begin::Contact group-->
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Subscribed</a>
                            <div class="badge badge-light-primary">3</div>
                        </div>
                        <!--begin::Contact group-->
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Tier 1 Member</a>
                            <div class="badge badge-light-primary">1</div>
                        </div>
                        <!--begin::Contact group-->
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-gray-800 text-hover-primary">Pending Approval</a>
                            <div class="badge badge-light-primary">3</div>
                        </div>
                        <!--begin::Contact group-->
                        <!--begin::Contact group-->
                        <div class="d-flex flex-stack">
                            <a href="apps/contacts/getting-started.html" class="fs-6 fw-bold text-danger text-hover-primary">Blocked</a>
                            <div class="badge badge-light-danger">2</div>
                        </div>
                        <!--begin::Contact group-->
                    </div>
                    <!--end::Contact groups-->
                    <!--begin::Separator-->
                    <div class="separator my-7"></div>
                    <!--begin::Separator-->
                    <!--begin::Add contact group-->
                    <label class="fs-6 fw-semibold form-label">Add new group</label>
                    <div class="input-group">
                        <input type="text" class="form-control form-control-solid" placeholder="Group name" />
                        <button type="button" class="btn btn-icon btn-light">
                            <i class="ki-duotone ki-plus-square fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </button>
                    </div>
                    <!--end::Add contact group-->
                    <!--begin::Separator-->
                    <div class="separator my-7"></div>
                    <!--begin::Separator-->
                    <!--begin::Add new contact-->
                    <a href="apps/contacts/add-contact.html" class="btn btn-primary w-100">
                        <i class="ki-duotone ki-badge fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>Add new contact</a>
                    <!--end::Add new contact-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contact group wrapper-->
        </div>
        <!--end::Contact groups-->
        <!--begin::Search-->
        <div class="col-lg-6 col-xl-3">
            <!--begin::Contacts-->
            <div class="card card-flush" id="kt_contacts_list">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_contacts_list_header">
                    <!--begin::Form-->
                    <form class="d-flex align-items-center position-relative w-100 m-0" autocomplete="off">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-solid ps-13" name="search" value="" placeholder="Search contacts" />
                        <!--end::Input-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5" id="kt_contacts_list_body">
                    <!--begin::List-->
                    <div class="scroll-y me-n5 pe-5 h-300px h-xl-auto" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_contacts_list_header" data-kt-scroll-wrappers="#kt_content, #kt_contacts_list_body" data-kt-scroll-stretch="#kt_contacts_list, #kt_contacts_main" data-kt-scroll-offset="5px">
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
                                    <div class="fw-semibold fs-7 text-muted">smith@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">M</span>
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
                                    <div class="fw-semibold fs-7 text-muted">melody@altbox.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
                                    <div class="fw-semibold fs-7 text-muted">max@kt.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
                                    <div class="fw-semibold fs-7 text-muted">sean@dellito.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
                                    <div class="fw-semibold fs-7 text-muted">brian@exchange.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-warning text-warning fs-6 fw-bolder">C</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
                                    <div class="fw-semibold fs-7 text-muted">mik@pex.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
                                    <div class="fw-semibold fs-7 text-muted">f.mit@kpmg.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">O</span>
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
                                    <div class="fw-semibold fs-7 text-muted">olivia@corpmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-primary text-primary fs-6 fw-bolder">N</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
                                    <div class="fw-semibold fs-7 text-muted">owen.neil@gmail.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
                                    <div class="fw-semibold fs-7 text-muted">dam@consilting.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-danger text-danger fs-6 fw-bolder">E</span>
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
                                    <div class="fw-semibold fs-7 text-muted">emma@intenso.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
                                    <div class="fw-semibold fs-7 text-muted">ana.cf@limtel.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-info text-info fs-6 fw-bolder">A</span>
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
                                    <div class="fw-semibold fs-7 text-muted">robert@benko.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                    <div class="symbol-badge bg-success start-100 top-100 border-4 h-15px w-15px ms-n2 mt-n2"></div>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
                                    <div class="fw-semibold fs-7 text-muted">miller@mapple.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <span class="symbol-label bg-light-success text-success fs-6 fw-bolder">L</span>
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
                                    <div class="fw-semibold fs-7 text-muted">lucy.m@fentech.com</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed d-none"></div>
                        <!--end::Separator-->
                        <!--begin::User-->
                        <div class="d-flex flex-stack py-4">
                            <!--begin::Details-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-40px symbol-circle">
                                    <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-4">
                                    <a href="apps/contacts/view-contact.html" class="fs-6 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
                                    <div class="fw-semibold fs-7 text-muted">ethan@loop.com.au</div>
                                </div>
                                <!--end::Details-->
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::List-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <!--end::Search-->
        <!--begin::Content-->
        <div class="col-xl-6">
            <!--begin::Contacts-->
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <i class="ki-duotone ki-badge fs-1 me-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                        <h2>Add New Contact</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form id="kt_ecommerce_settings_general_form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold mb-3">
                                <span>Update Avatar</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Allowed file types: png, jpg, jpeg.">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Image input wrapper-->
                            <div class="mt-1">
                                <!--begin::Image placeholder-->
                                <style>
                                    .image-input-placeholder {
                                        background-image: url('{{ asset('assets/media/svg/files/blank-image.svg') }}');
                                    }

                                    [data-bs-theme="dark"] .image-input-placeholder {
                                        background-image: url('{{ asset('assets/media/svg/files/blank-image-dark.svg') }}');
                                    }

                                </style>
                                <!--end::Image placeholder-->
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline image-input-placeholder image-input-empty image-input-empty" data-kt-image-input="true">
                                    <!--begin::Preview existing avatar-->
                                    <div class="image-input-wrapper w-100px h-100px" style="background-image: url('')"></div>
                                    <!--end::Preview existing avatar-->
                                    <!--begin::Edit-->
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                        <i class="ki-duotone ki-pencil fs-7">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="avatar" accept=".png, .jpg') }}, .jpeg" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit-->
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
                            </div>
                            <!--end::Image input wrapper-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Name</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's name.">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="name" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Company Name</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's company name (optional).">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" name="company_name" value="" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Email</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's email.">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="email" class="form-control form-control-solid" name="email" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>Phone</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's phone number (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="phone" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span>City</span>
                                        <span class="ms-1" data-bs-toggle="tooltip" title="Enter the contact's city of residence (optional).">
                                            <i class="ki-duotone ki-information fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="city" value="" />
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col">
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-semibold form-label mt-3">
                                        <span class="required">Country</span>
                                    </label>
                                    <!--end::Label-->
                                    <div class="w-100">
                                        <!--begin::Select2-->
                                        <select id="kt_ecommerce_select2_country" class="form-select form-select-solid" name="country" data-kt-ecommerce-settings-type="select2_flags" data-placeholder="Select a country">
                                            <option></option>
                                            <option value="AF" data-kt-select2-country="{{ asset('assets/media/flags/afghanistan.svg') }}">Afghanistan</option>
                                            <option value="AX" data-kt-select2-country="{{ asset('assets/media/flags/aland-islands.svg') }}">Aland Islands</option>
                                            <option value="AL" data-kt-select2-country="{{ asset('assets/media/flags/albania.svg') }}">Albania</option>
                                            <option value="DZ" data-kt-select2-country="{{ asset('assets/media/flags/algeria.svg') }}">Algeria</option>
                                            <option value="AS" data-kt-select2-country="{{ asset('assets/media/flags/american-samoa.svg') }}">American Samoa</option>
                                            <option value="AD" data-kt-select2-country="{{ asset('assets/media/flags/andorra.svg') }}">Andorra</option>
                                            <option value="AO" data-kt-select2-country="{{ asset('assets/media/flags/angola.svg') }}">Angola</option>
                                            <option value="AI" data-kt-select2-country="{{ asset('assets/media/flags/anguilla.svg') }}">Anguilla</option>
                                            <option value="AG" data-kt-select2-country="{{ asset('assets/media/flags/antigua-and-barbuda.svg') }}">Antigua and Barbuda</option>
                                            <option value="AR" data-kt-select2-country="{{ asset('assets/media/flags/argentina.svg') }}">Argentina</option>
                                            <option value="AM" data-kt-select2-country="{{ asset('assets/media/flags/armenia.svg') }}">Armenia</option>
                                            <option value="AW" data-kt-select2-country="{{ asset('assets/media/flags/aruba.svg') }}">Aruba</option>
                                            <option value="AU" data-kt-select2-country="{{ asset('assets/media/flags/australia.svg') }}">Australia</option>
                                            <option value="AT" data-kt-select2-country="{{ asset('assets/media/flags/austria.svg') }}">Austria</option>
                                            <option value="AZ" data-kt-select2-country="{{ asset('assets/media/flags/azerbaijan.svg') }}">Azerbaijan</option>
                                            <option value="BS" data-kt-select2-country="{{ asset('assets/media/flags/bahamas.svg') }}">Bahamas</option>
                                            <option value="BH" data-kt-select2-country="{{ asset('assets/media/flags/bahrain.svg') }}">Bahrain</option>
                                            <option value="BD" data-kt-select2-country="{{ asset('assets/media/flags/bangladesh.svg') }}">Bangladesh</option>
                                            <option value="BB" data-kt-select2-country="{{ asset('assets/media/flags/barbados.svg') }}">Barbados</option>
                                            <option value="BY" data-kt-select2-country="{{ asset('assets/media/flags/belarus.svg') }}">Belarus</option>
                                            <option value="BE" data-kt-select2-country="{{ asset('assets/media/flags/belgium.svg') }}">Belgium</option>
                                            <option value="BZ" data-kt-select2-country="{{ asset('assets/media/flags/belize.svg') }}">Belize</option>
                                            <option value="BJ" data-kt-select2-country="{{ asset('assets/media/flags/benin.svg') }}">Benin</option>
                                            <option value="BM" data-kt-select2-country="{{ asset('assets/media/flags/bermuda.svg') }}">Bermuda</option>
                                            <option value="BT" data-kt-select2-country="{{ asset('assets/media/flags/bhutan.svg') }}">Bhutan</option>
                                            <option value="BO" data-kt-select2-country="{{ asset('assets/media/flags/bolivia.svg') }}">Bolivia, Plurinational State of</option>
                                            <option value="BQ" data-kt-select2-country="{{ asset('assets/media/flags/bonaire.svg') }}">Bonaire, Sint Eustatius and Saba</option>
                                            <option value="BA" data-kt-select2-country="{{ asset('assets/media/flags/bosnia-and-herzegovina.svg') }}">Bosnia and Herzegovina</option>
                                            <option value="BW" data-kt-select2-country="{{ asset('assets/media/flags/botswana.svg') }}">Botswana</option>
                                            <option value="BR" data-kt-select2-country="{{ asset('assets/media/flags/brazil.svg') }}">Brazil</option>
                                            <option value="IO" data-kt-select2-country="{{ asset('assets/media/flags/british-indian-ocean-territory.svg') }}">British Indian Ocean Territory</option>
                                            <option value="BN" data-kt-select2-country="{{ asset('assets/media/flags/brunei.svg') }}">Brunei Darussalam</option>
                                            <option value="BG" data-kt-select2-country="{{ asset('assets/media/flags/bulgaria.svg') }}">Bulgaria</option>
                                            <option value="BF" data-kt-select2-country="{{ asset('assets/media/flags/burkina-faso.svg') }}">Burkina Faso</option>
                                            <option value="BI" data-kt-select2-country="{{ asset('assets/media/flags/burundi.svg') }}">Burundi</option>
                                            <option value="KH" data-kt-select2-country="{{ asset('assets/media/flags/cambodia.svg') }}">Cambodia</option>
                                            <option value="CM" data-kt-select2-country="{{ asset('assets/media/flags/cameroon.svg') }}">Cameroon</option>
                                            <option value="CA" data-kt-select2-country="{{ asset('assets/media/flags/canada.svg') }}">Canada</option>
                                            <option value="CV" data-kt-select2-country="{{ asset('assets/media/flags/cape-verde.svg') }}">Cape Verde</option>
                                            <option value="KY" data-kt-select2-country="{{ asset('assets/media/flags/cayman-islands.svg') }}">Cayman Islands</option>
                                            <option value="CF" data-kt-select2-country="{{ asset('assets/media/flags/central-african-republic.svg') }}">Central African Republic</option>
                                            <option value="TD" data-kt-select2-country="{{ asset('assets/media/flags/chad.svg') }}">Chad</option>
                                            <option value="CL" data-kt-select2-country="{{ asset('assets/media/flags/chile.svg') }}">Chile</option>
                                            <option value="CN" data-kt-select2-country="{{ asset('assets/media/flags/china.svg') }}">China</option>
                                            <option value="CX" data-kt-select2-country="{{ asset('assets/media/flags/christmas-island.svg') }}">Christmas Island</option>
                                            <option value="CC" data-kt-select2-country="{{ asset('assets/media/flags/cocos-island.svg') }}">Cocos (Keeling) Islands</option>
                                            <option value="CO" data-kt-select2-country="{{ asset('assets/media/flags/colombia.svg') }}">Colombia</option>
                                            <option value="KM" data-kt-select2-country="{{ asset('assets/media/flags/comoros.svg') }}">Comoros</option>
                                            <option value="CK" data-kt-select2-country="{{ asset('assets/media/flags/cook-islands.svg') }}">Cook Islands</option>
                                            <option value="CR" data-kt-select2-country="{{ asset('assets/media/flags/costa-rica.svg') }}">Costa Rica</option>
                                            <option value="CI" data-kt-select2-country="{{ asset('assets/media/flags/ivory-coast.svg') }}">Côte d'Ivoire</option>
                                            <option value="HR" data-kt-select2-country="{{ asset('assets/media/flags/croatia.svg') }}">Croatia</option>
                                            <option value="CU" data-kt-select2-country="{{ asset('assets/media/flags/cuba.svg') }}">Cuba</option>
                                            <option value="CW" data-kt-select2-country="{{ asset('assets/media/flags/curacao.svg') }}">Curaçao</option>
                                            <option value="CZ" data-kt-select2-country="{{ asset('assets/media/flags/czech-republic.svg') }}">Czech Republic</option>
                                            <option value="DK" data-kt-select2-country="{{ asset('assets/media/flags/denmark.svg') }}">Denmark</option>
                                            <option value="DJ" data-kt-select2-country="{{ asset('assets/media/flags/djibouti.svg') }}">Djibouti</option>
                                            <option value="DM" data-kt-select2-country="{{ asset('assets/media/flags/dominica.svg') }}">Dominica</option>
                                            <option value="DO" data-kt-select2-country="{{ asset('assets/media/flags/dominican-republic.svg') }}">Dominican Republic</option>
                                            <option value="EC" data-kt-select2-country="{{ asset('assets/media/flags/ecuador.svg') }}">Ecuador</option>
                                            <option value="EG" data-kt-select2-country="{{ asset('assets/media/flags/egypt.svg') }}">Egypt</option>
                                            <option value="SV" data-kt-select2-country="{{ asset('assets/media/flags/el-salvador.svg') }}">El Salvador</option>
                                            <option value="GQ" data-kt-select2-country="{{ asset('assets/media/flags/equatorial-guinea.svg') }}">Equatorial Guinea</option>
                                            <option value="ER" data-kt-select2-country="{{ asset('assets/media/flags/eritrea.svg') }}">Eritrea</option>
                                            <option value="EE" data-kt-select2-country="{{ asset('assets/media/flags/estonia.svg') }}">Estonia</option>
                                            <option value="ET" data-kt-select2-country="{{ asset('assets/media/flags/ethiopia.svg') }}">Ethiopia</option>
                                            <option value="FK" data-kt-select2-country="{{ asset('assets/media/flags/falkland-islands.svg') }}">Falkland Islands (Malvinas)</option>
                                            <option value="FJ" data-kt-select2-country="{{ asset('assets/media/flags/fiji.svg') }}">Fiji</option>
                                            <option value="FI" data-kt-select2-country="{{ asset('assets/media/flags/finland.svg') }}">Finland</option>
                                            <option value="FR" data-kt-select2-country="{{ asset('assets/media/flags/france.svg') }}">France</option>
                                            <option value="PF" data-kt-select2-country="{{ asset('assets/media/flags/french-polynesia.svg') }}">French Polynesia</option>
                                            <option value="GA" data-kt-select2-country="{{ asset('assets/media/flags/gabon.svg') }}">Gabon</option>
                                            <option value="GM" data-kt-select2-country="{{ asset('assets/media/flags/gambia.svg') }}">Gambia</option>
                                            <option value="GE" data-kt-select2-country="{{ asset('assets/media/flags/georgia.svg') }}">Georgia</option>
                                            <option value="DE" data-kt-select2-country="{{ asset('assets/media/flags/germany.svg') }}">Germany</option>
                                            <option value="GH" data-kt-select2-country="{{ asset('assets/media/flags/ghana.svg') }}">Ghana</option>
                                            <option value="GI" data-kt-select2-country="{{ asset('assets/media/flags/gibraltar.svg') }}">Gibraltar</option>
                                            <option value="GR" data-kt-select2-country="{{ asset('assets/media/flags/greece.svg') }}">Greece</option>
                                            <option value="GL" data-kt-select2-country="{{ asset('assets/media/flags/greenland.svg') }}">Greenland</option>
                                            <option value="GD" data-kt-select2-country="{{ asset('assets/media/flags/grenada.svg') }}">Grenada</option>
                                            <option value="GU" data-kt-select2-country="{{ asset('assets/media/flags/guam.svg') }}">Guam</option>
                                            <option value="GT" data-kt-select2-country="{{ asset('assets/media/flags/guatemala.svg') }}">Guatemala</option>
                                            <option value="GG" data-kt-select2-country="{{ asset('assets/media/flags/guernsey.svg') }}">Guernsey</option>
                                            <option value="GN" data-kt-select2-country="{{ asset('assets/media/flags/guinea.svg') }}">Guinea</option>
                                            <option value="GW" data-kt-select2-country="{{ asset('assets/media/flags/guinea-bissau.svg') }}">Guinea-Bissau</option>
                                            <option value="HT" data-kt-select2-country="{{ asset('assets/media/flags/haiti.svg') }}">Haiti</option>
                                            <option value="VA" data-kt-select2-country="{{ asset('assets/media/flags/vatican-city.svg') }}">Holy See (Vatican City State)</option>
                                            <option value="HN" data-kt-select2-country="{{ asset('assets/media/flags/honduras.svg') }}">Honduras</option>
                                            <option value="HK" data-kt-select2-country="{{ asset('assets/media/flags/hong-kong.svg') }}">Hong Kong</option>
                                            <option value="HU" data-kt-select2-country="{{ asset('assets/media/flags/hungary.svg') }}">Hungary</option>
                                            <option value="IS" data-kt-select2-country="{{ asset('assets/media/flags/iceland.svg') }}">Iceland</option>
                                            <option value="IN" data-kt-select2-country="{{ asset('assets/media/flags/india.svg') }}">India</option>
                                            <option value="ID" data-kt-select2-country="{{ asset('assets/media/flags/indonesia.svg') }}">Indonesia</option>
                                            <option value="IR" data-kt-select2-country="{{ asset('assets/media/flags/iran.svg') }}">Iran, Islamic Republic of</option>
                                            <option value="IQ" data-kt-select2-country="{{ asset('assets/media/flags/iraq.svg') }}">Iraq</option>
                                            <option value="IE" data-kt-select2-country="{{ asset('assets/media/flags/ireland.svg') }}">Ireland</option>
                                            <option value="IM" data-kt-select2-country="{{ asset('assets/media/flags/isle-of-man.svg') }}">Isle of Man</option>
                                            <option value="IL" data-kt-select2-country="{{ asset('assets/media/flags/israel.svg') }}">Israel</option>
                                            <option value="IT" data-kt-select2-country="{{ asset('assets/media/flags/italy.svg') }}">Italy</option>
                                            <option value="JM" data-kt-select2-country="{{ asset('assets/media/flags/jamaica.svg') }}">Jamaica</option>
                                            <option value="JP" data-kt-select2-country="{{ asset('assets/media/flags/japan.svg') }}">Japan</option>
                                            <option value="JE" data-kt-select2-country="{{ asset('assets/media/flags/jersey.svg') }}">Jersey</option>
                                            <option value="JO" data-kt-select2-country="{{ asset('assets/media/flags/jordan.svg') }}">Jordan</option>
                                            <option value="KZ" data-kt-select2-country="{{ asset('assets/media/flags/kazakhstan.svg') }}">Kazakhstan</option>
                                            <option value="KE" data-kt-select2-country="{{ asset('assets/media/flags/kenya.svg') }}">Kenya</option>
                                            <option value="KI" data-kt-select2-country="{{ asset('assets/media/flags/kiribati.svg') }}">Kiribati</option>
                                            <option value="KP" data-kt-select2-country="{{ asset('assets/media/flags/north-korea.svg') }}">Korea, Democratic People's Republic of</option>
                                            <option value="KW" data-kt-select2-country="{{ asset('assets/media/flags/kuwait.svg') }}">Kuwait</option>
                                            <option value="KG" data-kt-select2-country="{{ asset('assets/media/flags/kyrgyzstan.svg') }}">Kyrgyzstan</option>
                                            <option value="LA" data-kt-select2-country="{{ asset('assets/media/flags/laos.svg') }}">Lao People's Democratic Republic</option>
                                            <option value="LV" data-kt-select2-country="{{ asset('assets/media/flags/latvia.svg') }}">Latvia</option>
                                            <option value="LB" data-kt-select2-country="{{ asset('assets/media/flags/lebanon.svg') }}">Lebanon</option>
                                            <option value="LS" data-kt-select2-country="{{ asset('assets/media/flags/lesotho.svg') }}">Lesotho</option>
                                            <option value="LR" data-kt-select2-country="{{ asset('assets/media/flags/liberia.svg') }}">Liberia</option>
                                            <option value="LY" data-kt-select2-country="{{ asset('assets/media/flags/libya.svg') }}">Libya</option>
                                            <option value="LI" data-kt-select2-country="{{ asset('assets/media/flags/liechtenstein.svg') }}">Liechtenstein</option>
                                            <option value="LT" data-kt-select2-country="{{ asset('assets/media/flags/lithuania.svg') }}">Lithuania</option>
                                            <option value="LU" data-kt-select2-country="{{ asset('assets/media/flags/luxembourg.svg') }}">Luxembourg</option>
                                            <option value="MO" data-kt-select2-country="{{ asset('assets/media/flags/macao.svg') }}">Macao</option>
                                            <option value="MG" data-kt-select2-country="{{ asset('assets/media/flags/madagascar.svg') }}">Madagascar</option>
                                            <option value="MW" data-kt-select2-country="{{ asset('assets/media/flags/malawi.svg') }}">Malawi</option>
                                            <option value="MY" data-kt-select2-country="{{ asset('assets/media/flags/malaysia.svg') }}">Malaysia</option>
                                            <option value="MV" data-kt-select2-country="{{ asset('assets/media/flags/maldives.svg') }}">Maldives</option>
                                            <option value="ML" data-kt-select2-country="{{ asset('assets/media/flags/mali.svg') }}">Mali</option>
                                            <option value="MT" data-kt-select2-country="{{ asset('assets/media/flags/malta.svg') }}">Malta</option>
                                            <option value="MH" data-kt-select2-country="{{ asset('assets/media/flags/marshall-island.svg') }}">Marshall Islands</option>
                                            <option value="MQ" data-kt-select2-country="{{ asset('assets/media/flags/martinique.svg') }}">Martinique</option>
                                            <option value="MR" data-kt-select2-country="{{ asset('assets/media/flags/mauritania.svg') }}">Mauritania</option>
                                            <option value="MU" data-kt-select2-country="{{ asset('assets/media/flags/mauritius.svg') }}">Mauritius</option>
                                            <option value="MX" data-kt-select2-country="{{ asset('assets/media/flags/mexico.svg') }}">Mexico</option>
                                            <option value="FM" data-kt-select2-country="{{ asset('assets/media/flags/micronesia.svg') }}">Micronesia, Federated States of</option>
                                            <option value="MD" data-kt-select2-country="{{ asset('assets/media/flags/moldova.svg') }}">Moldova, Republic of</option>
                                            <option value="MC" data-kt-select2-country="{{ asset('assets/media/flags/monaco.svg') }}">Monaco</option>
                                            <option value="MN" data-kt-select2-country="{{ asset('assets/media/flags/mongolia.svg') }}">Mongolia</option>
                                            <option value="ME" data-kt-select2-country="{{ asset('assets/media/flags/montenegro.svg') }}">Montenegro</option>
                                            <option value="MS" data-kt-select2-country="{{ asset('assets/media/flags/montserrat.svg') }}">Montserrat</option>
                                            <option value="MA" data-kt-select2-country="{{ asset('assets/media/flags/morocco.svg') }}">Morocco</option>
                                            <option value="MZ" data-kt-select2-country="{{ asset('assets/media/flags/mozambique.svg') }}">Mozambique</option>
                                            <option value="MM" data-kt-select2-country="{{ asset('assets/media/flags/myanmar.svg') }}">Myanmar</option>
                                            <option value="NA" data-kt-select2-country="{{ asset('assets/media/flags/namibia.svg') }}">Namibia</option>
                                            <option value="NR" data-kt-select2-country="{{ asset('assets/media/flags/nauru.svg') }}">Nauru</option>
                                            <option value="NP" data-kt-select2-country="{{ asset('assets/media/flags/nepal.svg') }}">Nepal</option>
                                            <option value="NL" data-kt-select2-country="{{ asset('assets/media/flags/netherlands.svg') }}">Netherlands</option>
                                            <option value="NZ" data-kt-select2-country="{{ asset('assets/media/flags/new-zealand.svg') }}">New Zealand</option>
                                            <option value="NI" data-kt-select2-country="{{ asset('assets/media/flags/nicaragua.svg') }}">Nicaragua</option>
                                            <option value="NE" data-kt-select2-country="{{ asset('assets/media/flags/niger.svg') }}">Niger</option>
                                            <option value="NG" data-kt-select2-country="{{ asset('assets/media/flags/nigeria.svg') }}">Nigeria</option>
                                            <option value="NU" data-kt-select2-country="{{ asset('assets/media/flags/niue.svg') }}">Niue</option>
                                            <option value="NF" data-kt-select2-country="{{ asset('assets/media/flags/norfolk-island.svg') }}">Norfolk Island</option>
                                            <option value="MP" data-kt-select2-country="{{ asset('assets/media/flags/northern-mariana-islands.svg') }}">Northern Mariana Islands</option>
                                            <option value="NO" data-kt-select2-country="{{ asset('assets/media/flags/norway.svg') }}">Norway</option>
                                            <option value="OM" data-kt-select2-country="{{ asset('assets/media/flags/oman.svg') }}">Oman</option>
                                            <option value="PK" data-kt-select2-country="{{ asset('assets/media/flags/pakistan.svg') }}">Pakistan</option>
                                            <option value="PW" data-kt-select2-country="{{ asset('assets/media/flags/palau.svg') }}">Palau</option>
                                            <option value="PS" data-kt-select2-country="{{ asset('assets/media/flags/palestine.svg') }}">Palestinian Territory, Occupied</option>
                                            <option value="PA" data-kt-select2-country="{{ asset('assets/media/flags/panama.svg') }}">Panama</option>
                                            <option value="PG" data-kt-select2-country="{{ asset('assets/media/flags/papua-new-guinea.svg') }}">Papua New Guinea</option>
                                            <option value="PY" data-kt-select2-country="{{ asset('assets/media/flags/paraguay.svg') }}">Paraguay</option>
                                            <option value="PE" data-kt-select2-country="{{ asset('assets/media/flags/peru.svg') }}">Peru</option>
                                            <option value="PH" data-kt-select2-country="{{ asset('assets/media/flags/philippines.svg') }}">Philippines</option>
                                            <option value="PL" data-kt-select2-country="{{ asset('assets/media/flags/poland.svg') }}">Poland</option>
                                            <option value="PT" data-kt-select2-country="{{ asset('assets/media/flags/portugal.svg') }}">Portugal</option>
                                            <option value="PR" data-kt-select2-country="{{ asset('assets/media/flags/puerto-rico.svg') }}">Puerto Rico</option>
                                            <option value="QA" data-kt-select2-country="{{ asset('assets/media/flags/qatar.svg') }}">Qatar</option>
                                            <option value="RO" data-kt-select2-country="{{ asset('assets/media/flags/romania.svg') }}">Romania</option>
                                            <option value="RU" data-kt-select2-country="{{ asset('assets/media/flags/russia.svg') }}">Russian Federation</option>
                                            <option value="RW" data-kt-select2-country="{{ asset('assets/media/flags/rwanda.svg') }}">Rwanda</option>
                                            <option value="BL" data-kt-select2-country="{{ asset('assets/media/flags/st-barts.svg') }}">Saint Barthélemy</option>
                                            <option value="KN" data-kt-select2-country="{{ asset('assets/media/flags/saint-kitts-and-nevis.svg') }}">Saint Kitts and Nevis</option>
                                            <option value="LC" data-kt-select2-country="{{ asset('assets/media/flags/st-lucia.svg') }}">Saint Lucia</option>
                                            <option value="MF" data-kt-select2-country="{{ asset('assets/media/flags/sint-maarten.svg') }}">Saint Martin (French part)</option>
                                            <option value="VC" data-kt-select2-country="{{ asset('assets/media/flags/st-vincent-and-the-grenadines.svg') }}">Saint Vincent and the Grenadines</option>
                                            <option value="WS" data-kt-select2-country="{{ asset('assets/media/flags/samoa.svg') }}">Samoa</option>
                                            <option value="SM" data-kt-select2-country="{{ asset('assets/media/flags/san-marino.svg') }}">San Marino</option>
                                            <option value="ST" data-kt-select2-country="{{ asset('assets/media/flags/sao-tome-and-prince.svg') }}">Sao Tome and Principe</option>
                                            <option value="SA" data-kt-select2-country="{{ asset('assets/media/flags/saudi-arabia.svg') }}">Saudi Arabia</option>
                                            <option value="SN" data-kt-select2-country="{{ asset('assets/media/flags/senegal.svg') }}">Senegal</option>
                                            <option value="RS" data-kt-select2-country="{{ asset('assets/media/flags/serbia.svg') }}">Serbia</option>
                                            <option value="SC" data-kt-select2-country="{{ asset('assets/media/flags/seychelles.svg') }}">Seychelles</option>
                                            <option value="SL" data-kt-select2-country="{{ asset('assets/media/flags/sierra-leone.svg') }}">Sierra Leone</option>
                                            <option value="SG" data-kt-select2-country="{{ asset('assets/media/flags/singapore.svg') }}">Singapore</option>
                                            <option value="SX" data-kt-select2-country="{{ asset('assets/media/flags/sint-maarten.svg') }}">Sint Maarten (Dutch part)</option>
                                            <option value="SK" data-kt-select2-country="{{ asset('assets/media/flags/slovakia.svg') }}">Slovakia</option>
                                            <option value="SI" data-kt-select2-country="{{ asset('assets/media/flags/slovenia.svg') }}">Slovenia</option>
                                            <option value="SB" data-kt-select2-country="{{ asset('assets/media/flags/solomon-islands.svg') }}">Solomon Islands</option>
                                            <option value="SO" data-kt-select2-country="{{ asset('assets/media/flags/somalia.svg') }}">Somalia</option>
                                            <option value="ZA" data-kt-select2-country="{{ asset('assets/media/flags/south-africa.svg') }}">South Africa</option>
                                            <option value="KR" data-kt-select2-country="{{ asset('assets/media/flags/south-korea.svg') }}">South Korea</option>
                                            <option value="SS" data-kt-select2-country="{{ asset('assets/media/flags/south-sudan.svg') }}">South Sudan</option>
                                            <option value="ES" data-kt-select2-country="{{ asset('assets/media/flags/spain.svg') }}">Spain</option>
                                            <option value="LK" data-kt-select2-country="{{ asset('assets/media/flags/sri-lanka.svg') }}">Sri Lanka</option>
                                            <option value="SD" data-kt-select2-country="{{ asset('assets/media/flags/sudan.svg') }}">Sudan</option>
                                            <option value="SR" data-kt-select2-country="{{ asset('assets/media/flags/suriname.svg') }}">Suriname</option>
                                            <option value="SZ" data-kt-select2-country="{{ asset('assets/media/flags/swaziland.svg') }}">Swaziland</option>
                                            <option value="SE" data-kt-select2-country="{{ asset('assets/media/flags/sweden.svg') }}">Sweden</option>
                                            <option value="CH" data-kt-select2-country="{{ asset('assets/media/flags/switzerland.svg') }}">Switzerland</option>
                                            <option value="SY" data-kt-select2-country="{{ asset('assets/media/flags/syria.svg') }}">Syrian Arab Republic</option>
                                            <option value="TW" data-kt-select2-country="{{ asset('assets/media/flags/taiwan.svg') }}">Taiwan, Province of China</option>
                                            <option value="TJ" data-kt-select2-country="{{ asset('assets/media/flags/tajikistan.svg') }}">Tajikistan</option>
                                            <option value="TZ" data-kt-select2-country="{{ asset('assets/media/flags/tanzania.svg') }}">Tanzania, United Republic of</option>
                                            <option value="TH" data-kt-select2-country="{{ asset('assets/media/flags/thailand.svg') }}">Thailand</option>
                                            <option value="TG" data-kt-select2-country="{{ asset('assets/media/flags/togo.svg') }}">Togo</option>
                                            <option value="TK" data-kt-select2-country="{{ asset('assets/media/flags/tokelau.svg') }}">Tokelau</option>
                                            <option value="TO" data-kt-select2-country="{{ asset('assets/media/flags/tonga.svg') }}">Tonga</option>
                                            <option value="TT" data-kt-select2-country="{{ asset('assets/media/flags/trinidad-and-tobago.svg') }}">Trinidad and Tobago</option>
                                            <option value="TN" data-kt-select2-country="{{ asset('assets/media/flags/tunisia.svg') }}">Tunisia</option>
                                            <option value="TR" data-kt-select2-country="{{ asset('assets/media/flags/turkey.svg') }}">Turkey</option>
                                            <option value="TM" data-kt-select2-country="{{ asset('assets/media/flags/turkmenistan.svg') }}">Turkmenistan</option>
                                            <option value="TC" data-kt-select2-country="{{ asset('assets/media/flags/turks-and-caicos.svg') }}">Turks and Caicos Islands</option>
                                            <option value="TV" data-kt-select2-country="{{ asset('assets/media/flags/tuvalu.svg') }}">Tuvalu</option>
                                            <option value="UG" data-kt-select2-country="{{ asset('assets/media/flags/uganda.svg') }}">Uganda</option>
                                            <option value="UA" data-kt-select2-country="{{ asset('assets/media/flags/ukraine.svg') }}">Ukraine</option>
                                            <option value="AE" data-kt-select2-country="{{ asset('assets/media/flags/united-arab-emirates.svg') }}">United Arab Emirates</option>
                                            <option value="GB" data-kt-select2-country="{{ asset('assets/media/flags/united-kingdom.svg') }}">United Kingdom</option>
                                            <option value="US" data-kt-select2-country="{{ asset('assets/media/flags/united-states.svg') }}">United States</option>
                                            <option value="UY" data-kt-select2-country="{{ asset('assets/media/flags/uruguay.svg') }}">Uruguay</option>
                                            <option value="UZ" data-kt-select2-country="{{ asset('assets/media/flags/uzbekistan.svg') }}">Uzbekistan</option>
                                            <option value="VU" data-kt-select2-country="{{ asset('assets/media/flags/vanuatu.svg') }}">Vanuatu</option>
                                            <option value="VE" data-kt-select2-country="{{ asset('assets/media/flags/venezuela.svg') }}">Venezuela, Bolivarian Republic of</option>
                                            <option value="VN" data-kt-select2-country="{{ asset('assets/media/flags/vietnam.svg') }}">Vietnam</option>
                                            <option value="VI" data-kt-select2-country="{{ asset('assets/media/flags/virgin-islands.svg') }}">Virgin Islands</option>
                                            <option value="YE" data-kt-select2-country="{{ asset('assets/media/flags/yemen.svg') }}">Yemen</option>
                                            <option value="ZM" data-kt-select2-country="{{ asset('assets/media/flags/zambia.svg') }}">Zambia</option>
                                            <option value="ZW" data-kt-select2-country="{{ asset('assets/media/flags/zimbabwe.svg') }}">Zimbabwe</option>
                                        </select>
                                        <!--end::Select2-->
                                    </div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span>Notes</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter any additional notes about the contact (optional).">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="notes"></textarea>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-6"></div>
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Contacts App- Add New Contact-->

</x-default-layout>
