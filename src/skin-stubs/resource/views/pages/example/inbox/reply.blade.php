<x-default-layout>
    @section('title')
    Reply
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('inbox.reply') }}
    @endsection

    <!--begin::Inbox App - View & Reply -->
    <div class="d-flex flex-column flex-lg-row">
        <!--begin::Sidebar-->
        <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px" data-kt-drawer="true" data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_inbox_aside_toggle">
            <!--begin::Sticky aside-->
            <div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '100px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                <!--begin::Aside content-->
                <div class="card-body">
                    <!--begin::Button-->
                    <a href="apps/inbox/compose.html" class="btn btn-primary fw-bold w-100 mb-8">New Message</a>
                    <!--end::Button-->
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Inbox-->
                            <span class="menu-link active">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-sms fs-2 me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-bold">Inbox</span>
                                <span class="badge badge-light-success">3</span>
                            </span>
                            <!--end::Inbox-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Marked-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-abstract-23 fs-2 me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-bold">Marked</span>
                            </span>
                            <!--end::Marked-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Draft-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-file fs-2 me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-bold">Draft</span>
                                <span class="badge badge-light-warning">5</span>
                            </span>
                            <!--end::Draft-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Sent-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-send fs-2 me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-bold">Sent</span>
                            </span>
                            <!--end::Sent-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Trash-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-trash fs-2 me-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-bold">Trash</span>
                            </span>
                            <!--end::Trash-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                    <!--begin::Menu-->
                    <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary">
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Custom work-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-abstract-8 fs-5 text-danger me-3 lh-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-semibold">Custom Work</span>
                                <span class="badge badge-light-danger">6</span>
                            </span>
                            <!--end::Custom work-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::Partnership-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-abstract-8 fs-5 text-success me-3 lh-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-semibold">Partnership</span>
                            </span>
                            <!--end::Partnership-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item mb-3">
                            <!--begin::In progress-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-abstract-8 fs-5 text-info me-3 lh-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title fw-semibold">In Progress</span>
                            </span>
                            <!--end::In progress-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item">
                            <!--begin::Add label-->
                            <span class="menu-link">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-plus fs-2 me-3 lh-0"></i>
                                </span>
                                <span class="menu-title fw-semibold">Add Label</span>
                            </span>
                            <!--end::Add label-->
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Aside content-->
            </div>
            <!--end::Sticky aside-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
            <!--begin::Card-->
            <div class="card">
                <div class="card-header align-items-center py-5 gap-5">
                    <!--begin::Actions-->
                    <div class="d-flex">
                        <!--begin::Back-->
                        <a href="apps/inbox/listing.html" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Back">
                            <i class="ki-duotone ki-arrow-left fs-1 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <!--end::Back-->
                        <!--begin::Archive-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Archive">
                            <i class="ki-duotone ki-sms fs-2 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <!--end::Archive-->
                        <!--begin::Spam-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Spam">
                            <i class="ki-duotone ki-information fs-2 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </a>
                        <!--end::Spam-->
                        <!--begin::Delete-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                            <i class="ki-duotone ki-trash fs-2 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </a>
                        <!--end::Delete-->
                        <!--begin::Mark as read-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as read">
                            <i class="ki-duotone ki-copy fs-2 m-0"></i>
                        </a>
                        <!--end::Mark as read-->
                        <!--begin::Move-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Move">
                            <i class="ki-duotone ki-entrance-left fs-2 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </a>
                        <!--end::Move-->
                    </div>
                    <!--end::Actions-->
                    <!--begin::Pagination-->
                    <div class="d-flex align-items-center">
                        <!--begin::Pages info-->
                        <span class="fw-semibold text-muted me-2">1 - 50 of 235</span>
                        <!--end::Pages info-->
                        <!--begin::Prev page-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">
                            <i class="ki-duotone ki-left fs-2 m-0"></i>
                        </a>
                        <!--end::Prev page-->
                        <!--begin::Next page-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">
                            <i class="ki-duotone ki-right fs-2 m-0"></i>
                        </a>
                        <!--end::Next page-->
                        <!--begin::Settings menu-->
                        <div>
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                                <i class="ki-duotone ki-dots-square fs-2 m-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-250px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-element-11 fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>New Group</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-badge fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>Contacts</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-people fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>Groups
                                        <span class="badge badge-light-primary ms-auto">new</span></a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-element-2 fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Calls</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-setting-2 fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Settings</a>
                                </div>
                                <!--end::Menu item-->
                                <div class="separator my-5"></div>
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-magnifier fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Help</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">
                                        <i class="ki-duotone ki-shield-tick fs-3 me-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Privacy
                                        <span class="badge badge-light-danger ms-auto">5</span></a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--begin::Settings menu-->
                        <!--begin::Toggle-->
                        <a href="#" class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                            <i class="ki-duotone ki-burger-menu-2 fs-3 m-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                                <span class="path7"></span>
                                <span class="path8"></span>
                                <span class="path9"></span>
                                <span class="path10"></span>
                            </i>
                        </a>
                        <!--end::Toggle-->
                    </div>
                    <!--end::Pagination-->
                </div>
                <div class="card-body">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Heading-->
                            <h2 class="fw-semibold me-3 my-1">Trip Reminder. Thank you for flying with us!</h2>
                            <!--begin::Heading-->
                            <!--begin::Badges-->
                            <span class="badge badge-light-primary my-1 me-2">inbox</span>
                            <span class="badge badge-light-danger my-1">important</span>
                            <!--end::Badges-->
                        </div>
                        <div class="d-flex">
                            <!--begin::Sort-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">
                                <i class="ki-duotone ki-arrow-up-down fs-2 m-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </a>
                            <!--end::Sort-->
                            <!--begin::Print-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                <i class="ki-duotone ki-printer fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </a>
                            <!--end::Print-->
                        </div>
                    </div>
                    <!--end::Title-->
                    <!--begin::Message accordion-->
                    <div data-kt-inbox-message="message_wrapper">
                        <!--begin::Message header-->
                        <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50 me-4">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-6.jpg') }});"></span>
                                </div>
                                <!--end::Avatar-->
                                <div class="pe-5">
                                    <!--begin::Author details-->
                                    <div class="d-flex align-items-center flex-wrap gap-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">Emma Smith</a>
                                        <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <span class="text-muted fw-bold">1 day ago</span>
                                    </div>
                                    <!--end::Author details-->
                                    <!--begin::Message details-->
                                    <div data-kt-inbox-message="details">
                                        <span class="text-muted fw-semibold">to me</span>
                                        <!--begin::Menu toggle-->
                                        <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                            <i class="ki-duotone ki-down fs-5 m-0"></i>
                                        </a>
                                        <!--end::Menu toggle-->
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                            <!--begin::Table-->
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-75px text-muted">From</td>
                                                        <td>Emma Bold</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Date</td>
                                                        <td>20 Dec 2023, 2:40 pm</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Subject</td>
                                                        <td>Trip Reminder. Thank you for flying with us!</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Reply-to</td>
                                                        <td>emma@intenso.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Message details-->
                                    <!--begin::Preview message-->
                                    <div class="text-muted fw-semibold mw-450px d-none" data-kt-inbox-message="preview">With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part....</div>
                                    <!--end::Preview message-->
                                </div>
                            </div>
                            <!--end::Author-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Date-->
                                <span class="fw-semibold text-muted text-end me-3">25 Oct 2023, 11:05 am</span>
                                <!--end::Date-->
                                <div class="d-flex">
                                    <!--begin::Star-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                        <i class="ki-duotone ki-star fs-2 m-0"></i>
                                    </a>
                                    <!--end::Star-->
                                    <!--begin::Mark as important-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                        <i class="ki-duotone ki-save-2 fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Mark as important-->
                                    <!--begin::Reply-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
                                        <i class="ki-duotone ki-message-edit fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Reply-->
                                    <!--begin::Settings-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                                        <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--end::Settings-->
                                </div>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Message header-->
                        <!--begin::Message content-->
                        <div class="collapse fade show" data-kt-inbox-message="message">
                            <div class="py-5">
                                <p>Hi Bob,</p>
                                <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                <p>Best regards,</p>
                                <p class="mb-0">Jason Muller</p>
                            </div>
                        </div>
                        <!--end::Message content-->
                    </div>
                    <!--end::Message accordion-->
                    <div class="separator my-6"></div>
                    <!--begin::Message accordion-->
                    <div data-kt-inbox-message="message_wrapper">
                        <!--begin::Message header-->
                        <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50 me-4">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-1.jpg') }});"></span>
                                </div>
                                <!--end::Avatar-->
                                <div class="pe-5">
                                    <!--begin::Author details-->
                                    <div class="d-flex align-items-center flex-wrap gap-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">Max Smith</a>
                                        <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <span class="text-muted fw-bold">2 days ago</span>
                                    </div>
                                    <!--end::Author details-->
                                    <!--begin::Message details-->
                                    <div class="d-none" data-kt-inbox-message="details">
                                        <span class="text-muted fw-semibold">to me</span>
                                        <!--begin::Menu toggle-->
                                        <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                            <i class="ki-duotone ki-down fs-5 m-0"></i>
                                        </a>
                                        <!--end::Menu toggle-->
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                            <!--begin::Table-->
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-75px text-muted">From</td>
                                                        <td>Emma Bold</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Date</td>
                                                        <td>24 Jun 2023, 10:30 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Subject</td>
                                                        <td>Trip Reminder. Thank you for flying with us!</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Reply-to</td>
                                                        <td>emma@intenso.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Message details-->
                                    <!--begin::Preview message-->
                                    <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
                                    <!--end::Preview message-->
                                </div>
                            </div>
                            <!--end::Author-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Date-->
                                <span class="fw-semibold text-muted text-end me-3">24 Jun 2023, 10:30 am</span>
                                <!--end::Date-->
                                <div class="d-flex">
                                    <!--begin::Star-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                        <i class="ki-duotone ki-star fs-2 text-warning m-0"></i>
                                    </a>
                                    <!--end::Star-->
                                    <!--begin::Mark as important-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                        <i class="ki-duotone ki-save-2 fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Mark as important-->
                                    <!--begin::Reply-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
                                        <i class="ki-duotone ki-message-edit fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Reply-->
                                    <!--begin::Settings-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                                        <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--end::Settings-->
                                </div>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Message header-->
                        <!--begin::Message content-->
                        <div class="collapse fade" data-kt-inbox-message="message">
                            <div class="py-5">
                                <p>Hi Bob,</p>
                                <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                <p>Best regards,</p>
                                <p class="mb-0">Jason Muller</p>
                            </div>
                        </div>
                        <!--end::Message content-->
                    </div>
                    <!--end::Message accordion-->
                    <div class="separator my-6"></div>
                    <!--begin::Message accordion-->
                    <div data-kt-inbox-message="message_wrapper">
                        <!--begin::Message header-->
                        <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50 me-4">
                                    <span class="symbol-label" style="background-image:url({{ asset('assets/media/avatars/300-5.jpg') }});"></span>
                                </div>
                                <!--end::Avatar-->
                                <div class="pe-5">
                                    <!--begin::Author details-->
                                    <div class="d-flex align-items-center flex-wrap gap-1">
                                        <a href="#" class="fw-bold text-gray-900 text-hover-primary">Sean Bean</a>
                                        <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <span class="text-muted fw-bold">3 days ago</span>
                                    </div>
                                    <!--end::Author details-->
                                    <!--begin::Message details-->
                                    <div class="d-none" data-kt-inbox-message="details">
                                        <span class="text-muted fw-semibold">to me</span>
                                        <!--begin::Menu toggle-->
                                        <a href="#" class="me-1" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                            <i class="ki-duotone ki-down fs-5 m-0"></i>
                                        </a>
                                        <!--end::Menu toggle-->
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4" data-kt-menu="true">
                                            <!--begin::Table-->
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-75px text-muted">From</td>
                                                        <td>Emma Bold</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Date</td>
                                                        <td>19 Aug 2023, 11:30 am</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Subject</td>
                                                        <td>Trip Reminder. Thank you for flying with us!</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Reply-to</td>
                                                        <td>emma@intenso.com</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Message details-->
                                    <!--begin::Preview message-->
                                    <div class="text-muted fw-semibold mw-450px" data-kt-inbox-message="preview">Jornalists call this critical, introductory section the "Lede," and when bridge properly executed....</div>
                                    <!--end::Preview message-->
                                </div>
                            </div>
                            <!--end::Author-->
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Date-->
                                <span class="fw-semibold text-muted text-end me-3">21 Feb 2023, 11:05 am</span>
                                <!--end::Date-->
                                <div class="d-flex">
                                    <!--begin::Star-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Star">
                                        <i class="ki-duotone ki-star fs-2 m-0"></i>
                                    </a>
                                    <!--end::Star-->
                                    <!--begin::Mark as important-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark as important">
                                        <i class="ki-duotone ki-save-2 fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Mark as important-->
                                    <!--begin::Reply-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply">
                                        <i class="ki-duotone ki-message-edit fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <!--end::Reply-->
                                    <!--begin::Settings-->
                                    <a href="#" class="btn btn-sm btn-icon btn-clear btn-active-light-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings">
                                        <i class="ki-duotone ki-dots-square-vertical fs-2 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </a>
                                    <!--end::Settings-->
                                </div>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Message header-->
                        <!--begin::Message content-->
                        <div class="collapse fade" data-kt-inbox-message="message">
                            <div class="py-5">
                                <p>Hi Bob,</p>
                                <p>With resrpect, i must disagree with Mr.Zinsser. We all know the most part of important part of any article is the title.Without a compelleing title, your reader won't even get to the first sentence.After the title, however, the first few sentences of your article are certainly the most important part.</p>
                                <p>Jornalists call this critical, introductory section the "Lede," and when bridge properly executed, it's the that carries your reader from an headine try at attention-grabbing to the body of your blog post, if you want to get it right on of these 10 clever ways to omen your next blog posr with a bang</p>
                                <p>Best regards,</p>
                                <p class="mb-0">Jason Muller</p>
                            </div>
                        </div>
                        <!--end::Message content-->
                    </div>
                    <!--end::Message accordion-->
                    <!--begin::Form-->
                    <form id="kt_inbox_reply_form" class="rounded border mt-10">
                        <!--begin::Body-->
                        <div class="d-block">
                            <!--begin::To-->
                            <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                <!--begin::Label-->
                                <div class="text-gray-900 fw-bold w-75px">To:</div>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_to" value="e.smith@kpmg.com.au, max@kt.com, sean@dellito.com" data-kt-inbox-form="tagify" />
                                <!--end::Input-->
                                <!--begin::CC & BCC buttons-->
                                <div class="ms-auto w-75px text-end">
                                    <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2" data-kt-inbox-form="cc_button">Cc</span>
                                    <span class="text-muted fs-bold cursor-pointer text-hover-primary" data-kt-inbox-form="bcc_button">Bcc</span>
                                </div>
                                <!--end::CC & BCC buttons-->
                            </div>
                            <!--end::To-->
                            <!--begin::CC-->
                            <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px" data-kt-inbox-form="cc">
                                <!--begin::Label-->
                                <div class="text-gray-900 fw-bold w-75px">Cc:</div>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_cc" value="" data-kt-inbox-form="tagify" />
                                <!--end::Input-->
                                <!--begin::Close-->
                                <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                                    <i class="ki-duotone ki-cross fs-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Close-->
                            </div>
                            <!--end::CC-->
                            <!--begin::BCC-->
                            <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px" data-kt-inbox-form="bcc">
                                <!--begin::Label-->
                                <div class="text-gray-900 fw-bold w-75px">Bcc:</div>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_bcc" value="" data-kt-inbox-form="tagify" />
                                <!--end::Input-->
                                <!--begin::Close-->
                                <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                                    <i class="ki-duotone ki-cross fs-5">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Close-->
                            </div>
                            <!--end::BCC-->
                            <!--begin::Subject-->
                            <div class="border-bottom">
                                <input class="form-control border-0 px-8 min-h-45px" name="compose_subject" placeholder="Subject" />
                            </div>
                            <!--end::Subject-->
                            <!--begin::Message-->
                            <div id="kt_inbox_form_editor" class="border-0 h-250px px-3"></div>
                            <!--end::Message-->
                            <!--begin::Attachments-->
                            <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments" data-kt-inbox-form="dropzone">
                                <div class="dropzone-items">
                                    <div class="dropzone-item" style="display:none">
                                        <!--begin::Dropzone filename-->
                                        <div class="dropzone-file">
                                            <div class="dropzone-filename" title="some_image_file_name.jpg') }}">
                                                <span data-dz-name="">some_image_file_name.jpg') }}</span>
                                                <strong>(
                                                    <span data-dz-size="">340kb</span>)</strong>
                                            </div>
                                            <div class="dropzone-error" data-dz-errormessage=""></div>
                                        </div>
                                        <!--end::Dropzone filename-->
                                        <!--begin::Dropzone progress-->
                                        <div class="dropzone-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
                                            </div>
                                        </div>
                                        <!--end::Dropzone progress-->
                                        <!--begin::Dropzone toolbar-->
                                        <div class="dropzone-toolbar">
                                            <span class="dropzone-delete" data-dz-remove="">
                                                <i class="ki-duotone ki-cross fs-6">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Dropzone toolbar-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Attachments-->
                        </div>
                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Send-->
                                <div class="btn-group me-4">
                                    <!--begin::Submit-->
                                    <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                                        <span class="indicator-label">Send</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </span>
                                    <!--end::Submit-->
                                    <!--begin::Send options-->
                                    <span class="btn btn-primary btn-icon fs-bold" role="button">
                                        <span class="btn btn-icon" data-kt-menu-trigger="click" data-kt-menu-placement="top-start">
                                            <i class="ki-duotone ki-down fs-2 m-0"></i>
                                        </span>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Schedule send</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Save & archive</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Cancel</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </span>
                                    <!--end::Send options-->
                                </div>
                                <!--end::Send-->
                                <!--begin::Upload attachement-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
                                    <i class="ki-duotone ki-paper-clip fs-2 m-0"></i>
                                </span>
                                <!--end::Upload attachement-->
                                <!--begin::Pin-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary">
                                    <i class="ki-duotone ki-geolocation fs-2 m-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Pin-->
                            </div>
                            <!--end::Actions-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::More actions-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2" data-toggle="tooltip" title="More actions">
                                    <i class="ki-duotone ki-setting-2 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::More actions-->
                                <!--begin::Dismiss reply-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                    <i class="ki-duotone ki-trash fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                    </i>
                                </span>
                                <!--end::Dismiss reply-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Inbox App - View & Reply -->

</x-default-layout>
