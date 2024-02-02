<x-default-layout>
    @section('title')
        Podcast
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard.podcast') }}
    @endsection

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Engage widget 6-->
            <div class="card flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100" style="background-color:#020202;background-image:url('{{ asset('assets/media/stock/600x600/img-62.jpg') }}')">
                <!--begin::Body-->
                <div class="card-body d-flex justify-content-between flex-column ps-xl-18">
                    <!--begin::Heading-->
                    <div class="mb-20 pt-xl-13">
                        <!--begin::Title-->
                        <h3 class="fw-bold text-white fs-4x mb-5 ms-n1">Utah Case</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <span class="fw-bold text-white fs-4 mb-8 d-block lh-0">with Kristin Watson</span>
                        <!--end::Description-->
                        <!--begin::Items-->
                        <div class="d-flex align-items-center">
                            <!--begin::Item-->
                            <div class="d-flex align-items-center me-6">
                                <!--begin::Icon-->
                                <a href="#" class="me-2">
                                    <i class="bi bi-play-fill text-primary fs-3"></i>
                                </a>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <span class="fw-semibold text-white fs-6">70,000+ plays</span>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <a href="#" class="me-2">
                                    <i class="bi bi-headset text-primary fs-3"></i>
                                </a>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <span class="fw-semibold text-white fs-6">372 listening now</span>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Action-->
                    <div class="mb-xl-10 mb-3">
                        <a href='#' class="btn btn-primary fw-semibold me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Listen Now</a>
                        <a href="apps/support-center/overview.html" class="btn btn-color-white bg-transparent btn-outline fw-semibold" style="border: 1px solid rgba(255, 255, 255, 0.3)">Save for Later</a>
                    </div>
                    <!--begin::Action-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 6-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Video widget 2-->
            <div class="card card-flush h-xl-100" id="kt_player_widget_2">
                <!--begin::Header-->
                <div class="card-header bg-black">
                    <!--begin::Title-->
                    <h3 class="card-title fw-bold text-white">Player</h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body bg-black pt-0">
                    <!--begin::Image-->
                    <div class="mx-auto mb-6 bgi-no-repeat bgi-size-contain bgi-position-center rounded-circle w-125px h-125px" style="background-image:url('{{ asset('assets/media/stock/600x600/img-59.jpg') }}')"></div>
                    <!--end::Image-->
                    <!--begin::Section-->
                    <div class="text-center mb-5">
                        <!--begin::Title-->
                        <h1 class="text-white fw-bold">Strange Friends</h1>
                        <!--end::Title-->
                        <!--begin::Title-->
                        <span class="text-white opacity-75 fw-semibold">Theresa Webb</span>
                        <!--end::Title-->
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card body-->
                <!--begin::Card Footer-->
                <div class="card-footer bg-primary p-0 pb-9">
                    <div class="mt-n10">
                        <!--begin::Progress-->
                        <div class="mb-5">
                            <!--begin::Time-->
                            <div class="d-flex flex-stack px-4 text-white opacity-75">
                                <span class="current-time" data-kt-element="current-time">0:00</span>
                                <span class="duration" data-kt-element="duration">0:00</span>
                            </div>
                            <!--end::Time-->
                            <input type="range" class="form-range" data-kt-element="progress" min="0" max="100" value="0" step="0.01" />
                        </div>
                        <!--end::Progress-->
                        <!--begin::Toolbar-->
                        <div class="d-flex flex-center">
                            <button class="btn btn-icon mx-1" data-kt-element="replay-button">
                                <i class="bi bi-arrow-repeat fs-2 text-white"></i>
                            </button>
                            <button class="btn btn-icon mx-1" data-kt-element="play-prev-button">
                                <i class='bi bi-caret-left-fill fs-2 text-white'></i>
                            </button>
                            <button class="btn btn-icon mx-6 play-pause" data-kt-element="play-button">
                                <i class="bi bi-play-fill text-white fs-4x" data-kt-element="play-icon"></i>
                                <i class="bi bi-pause-fill text-white fs-4x d-none" data-kt-element="pause-icon"></i>
                            </button>
                            <button class="btn btn-icon mx-1 next" data-kt-element="play-next-button">
                                <i class='bi bi-caret-right-fill fs-2 text-white'></i>
                            </button>
                            <button class="btn btn-icon mx-1" data-kt-element="shuffle-button">
                                <i class="bi bi-shuffle fs-2 text-white"></i>
                            </button>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Tracks-->
                        <audio data-kt-element="audio-track-1">
                            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-5.mp3" type="audio/mpeg" />
                        </audio>
                        <!--end::Tracks-->
                    </div>
                </div>
                <!--end::Card Footer-->
            </div>
            <!--end::Video widget 2-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Player widget 1-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Recently Played</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="account/statements.html" class="btn btn-sm btn-light">History</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-7">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-9 mb-5 mb-xl-9">
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-61.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Daily Podcast</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Darlene Robertson</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-60.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Neon Lights</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Wade Warren</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-63.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Single Eye</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Robert Fox</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-56.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Radiohead</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jacob Jones</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-9 mb-xl-3">
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-57.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">It is what it is</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jane Cooper</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-58.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Broken Mirros</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Jenny Wilson</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-55.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">The Hood</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Albert Flores</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-sm-3">
                            <!--begin::Player card-->
                            <div class="m-0">
                                <!--begin::User pic-->
                                <div class="card-rounded position-relative mb-5">
                                    <!--begin::Img-->
                                    <div class="bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded" style="background-image:url('{{ asset('assets/media/stock/600x600/img-64.jpg') }}')"></div>
                                    <!--end::Img-->
                                    <!--begin::Play-->
                                    <button class="btn btn-icon h-auto w-auto p-0 ms-4 mb-4 position-absolute bottom-0 right-0" data-kt-element="list-play-button">
                                        <i class="bi bi-play-fill text-white fs-2x" data-kt-element="list-play-icon"></i>
                                        <i class="bi bi-pause-fill text-white fs-2x d-none" data-kt-element="list-pause-icon"></i>
                                    </button>
                                    <!--end::Play-->
                                </div>
                                <!--end::User pic-->
                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Title-->
                                    <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Cirle Lights</a>
                                    <!--end::Title-->
                                    <span class="fw-bold fs-6 text-gray-500 d-block lh-1">Dianne Russell</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Player card-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Player widget 1-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::List widget 24-->
            <div class="card h-xl-100" id="kt_list_widget_24">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Top Podcaster</span>
                        <span class="text-gray-500 mt-1 fw-bold fs-7">8k social visitors</span>
                    </h3>
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="#" class="btn btn-sm btn-light">View All</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-6">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-28.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Leslie Alexander</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-29.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Jacob Jones</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold" data-kt-element="follow">Following</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Ronald Richards</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Courtney Henry</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-27.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Arlene McCoy</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-primary py-2 px-4 fs-7 fw-bold" data-kt-element="follow">Following</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-5"></div>
                    <!--end::Separator-->
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-circle symbol-60px me-4">
                            <img src="{{ asset('assets/media/avatars/300-30.jpg') }}" class="" alt="" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder">Marvin McKinney</a>
                                <span class="text-gray-500 fw-semibold d-block fs-6">Community</span>
                            </div>
                            <!--end:Author-->
                            <!--begin::Follow-->
                            <button class="btn btn-sm btn-light-primary py-2 px-4 fs-7 fs-bolder" data-kt-element="follow">Follow</button>
                            <!--end::Follow-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::List widget 24-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Engage widget 7-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">Recent Followers</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <a href="account/statements.html" class="btn btn-sm btn-light">History</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Card body-->
                <div class="card-body pt-7">
                    <!--begin::Row-->
                    <div class="row align-items-end h-100 gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-4 mb-11 mb-md-0">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/42.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('{{ asset('assets/media/stock/900x600/42.jpg') }}"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Feeling Good</a>
                                <!--end::Title-->
                                <!--begin::Time-->
                                <span class="fw-bold fs-6 text-gray-500 d-block lh-1">2 hours</span>
                                <!--end::Time-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4 mb-11 mb-md-0">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/40.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('{{ asset('assets/media/stock/900x600/40.jpg') }}"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Both Sides</a>
                                <!--end::Title-->
                                <!--begin::Time-->
                                <span class="fw-bold fs-6 text-gray-500 d-block lh-1">52 mins</span>
                                <!--end::Time-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Overlay-->
                            <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/900x600/41.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-position-center bgi-no-repeat bgi-size-cover h-200px card-rounded mb-3" style="height: 266px;background-image:url('{{ asset('assets/media/stock/900x600/41.jpg') }}"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-3x text-white">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Info-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-3 fw-bold d-block mb-2">Birds in the Sky</a>
                                <!--end::Title-->
                                <!--begin::Time-->
                                <span class="fw-bold fs-6 text-gray-500 d-block lh-1">5 hours</span>
                                <!--end::Time-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Engage widget 7-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Engage widget 1-->
            <div class="card h-md-100" dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">Have your tried
                        <br />new
                        <span class="fw-bolder">Invoice Manager?</span></h1>
                        <!--end::Title-->
                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="{{ asset('assets/media/svg/illustrations/easy/2.svg') }}" class="theme-light-show h-125px" alt="" />
                            <img src="{{ asset('assets/media/svg/illustrations/easy/2-dark.svg') }}" class="theme-dark-show h-125px" alt="" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_offer_a_deal" data-bs-toggle="modal">Try Now</a>
                        <!--end::Link-->
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="account/billing.html">Learn More</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 1-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    <!--begin::Row-->
    <div class="row g-5 g-xl-10">
        <!--begin::Col-->
        <div class="col-xl-8">
            <!--begin::Table widget 13-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">Most Popular Sellers</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
                            <!--begin::Display range-->
                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                            <!--end::Display range-->
                            <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </div>
                        <!--end::Daterangepicker-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-3 pb-4">
                    <!--begin::Table container-->
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                    <th class="p-0 min-w-200px"></th>
                                    <th class="p-0 min-w-150px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 min-w-125px"></th>
                                    <th class="p-0 w-100px"></th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn Simmons</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
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
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette Black</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
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
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther Howard</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
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
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy Hawkins</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
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
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-circle symbol-40px me-3">
                                                <img src="{{ asset('assets/media/avatars/300-3.jpg') }}" class="" alt="" />
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="account/overview.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin McKinney</a>
                                                <span class="text-gray-500 fw-semibold d-block fs-7">Zuid Area</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                        <span class="fw-semibold text-gray-500 d-block">Deliveries</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                        <span class="text-gray-500 fw-semibold d-block fs-7">Earnings</span>
                                    </td>
                                    <td class="float-end text-end border-0">
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
                                        <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-25px h-25px">
                                            <i class="ki-duotone ki-black-right fs-2 text-gray-500"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table container-->
                </div>
                <!--end: Card Body-->
            </div>
            <!--end::Table widget 13-->
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-xl-4">
            <!--begin::Chart Widget 34-->
            <div class="card card-flush h-xl-100">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-6">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <!--begin::Statistics-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Currency-->
                            <span class="fs-3 fw-semibold text-gray-500 align-self-start me-1">$</span>
                            <!--end::Currency-->
                            <!--begin::Value-->
                            <span class="fs-2hx fw-bold text-gray-800 me-3 lh-1 ls-n2">3,274.94</span>
                            <!--end::Value-->
                            <!--begin::Label-->
                            <span class="badge badge-light-success fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>9.2%</span>
                            <!--end::Label-->
                        </div>
                        <!--end::Statistics-->
                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-500">Your Earnings</span>
                        <!--end::Description-->
                    </h3>
                    <!--end::Title-->
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </button>
                        <!--begin::Menu 2-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mb-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Ticket</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Customer</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <!--begin::Menu item-->
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <!--end::Menu item-->
                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Member Group</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">New Contact</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator mt-3 opacity-75"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                </div>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 2-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-0 px-0">
                    <!--begin::Nav-->
                    <ul class="nav d-flex justify-content-between mb-3 mx-9">
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active" data-bs-toggle="tab" id="kt_charts_widget_34_tab_1" href="#kt_charts_widget_34_tab_content_1">1d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_2" href="#kt_charts_widget_34_tab_content_2">5d</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_3" href="#kt_charts_widget_34_tab_content_3">1m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_4" href="#kt_charts_widget_34_tab_content_4">6m</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="nav-item mb-3">
                            <!--begin::Link-->
                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px" data-bs-toggle="tab" id="kt_charts_widget_34_tab_5" href="#kt_charts_widget_34_tab_content_5">1y</a>
                            <!--end::Link-->
                        </li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Tab Content-->
                    <div class="tab-content mt-n6">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade active show" id="kt_charts_widget_34_tab_content_1">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_34_chart_1" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,207.03</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_2">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_34_chart_2" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,656.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,865.25</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">+135.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_3">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_34_chart_3" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-primary">-134.06</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_4">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_34_chart_4" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,925.45</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">+145.36</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-info">+124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade" id="kt_charts_widget_34_tab_content_5">
                            <!--begin::Chart-->
                            <div id="kt_charts_widget_34_chart_5" data-kt-chart-color="info" class="min-h-auto h-200px ps-3 pe-6"></div>
                            <!--end::Chart-->
                            <!--begin::Table container-->
                            <div class="table-responsive mx-9 mt-n6">
                                <!--begin::Table-->
                                <table class="table align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr>
                                            <th class="min-w-100px"></th>
                                            <th class="min-w-100px text-end pe-0"></th>
                                            <th class="text-end min-w-50px"></th>
                                        </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Donates</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$856.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-danger">-243.05</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-gray-600 fw-bold fs-6">Podcasts</a>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,556.26</span>
                                            </td>
                                            <td class="pe-0 text-end">
                                                <span class="fw-bold fs-6 text-warning">-124.03</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tap pane-->
                    </div>
                    <!--end::Tab Content-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Chart Widget 34-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->

</x-default-layout>
