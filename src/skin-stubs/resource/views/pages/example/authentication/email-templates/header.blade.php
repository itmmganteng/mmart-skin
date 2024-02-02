<!--begin::Header-->
<div class="bg-body d-flex flex-column-auto justify-content-cenrer align-items-start gap-2 gap-lg-4 py-4 px-10 overflow-auto" id="kt_app_header_nav">
    <a href="{{ route('dashboard') }}" class="flex-grow-1 mt-2">
        <i class="ki-duotone ki-arrow-left fs-2x text-gray-500">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </a>
    <a href="{{ route('example.authentication.email-templates.welcome-message') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.welcome-message') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-like fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="fs-8 fw-bold">Welcome<br />Message</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.reset-password') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.reset-password') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-lock-2 fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
            <span class="path5"></span>
        </i>
        <span class="fs-8 fw-bold">Reset
            <br />Password</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.subscription-confirmed') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.subscription-confirmed') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-notification-on fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
            <span class="path4"></span>
            <span class="path5"></span>
        </i>
        <span class="fs-8 fw-bold">Subscription
            <br />Confirmed</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.credit-card-declined') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.credit-card-declined') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-credit-cart fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="fs-8 fw-bold">Card
            <br />Declined</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.promo-1') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.promo-1') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-chart-pie-simple fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="fs-8 fw-bold">Promotion
            <br />Email 1</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.promo-2') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.promo-2') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-chart-line-star fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
            <span class="path3"></span>
        </i>
        <span class="fs-8 fw-bold">Promotion
            <br />Email 2</span>
    </a>
    <a href="{{ route('example.authentication.email-templates.promo-3') }}" class="btn btn-icon flex-column btn-text-gray-500 btn-icon-gray-300 btn-active-text-gray-700 btn-active-icon-gray-500 rounded-3 h-60px w-60px h-lg-90px w-lg-90px fw-semibold {{ request()->routeIs('example.authentication.email-templates.promo-3') ? 'active bg-light border border-2' : '' }}">
        <i class="ki-duotone ki-rocket fs-1 mb-2">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
        <span class="fs-8 fw-bold">Promotion
            <br />Email 3</span>
    </a>
    <a href="{{ route('dashboard') }}" class="flex-grow-1 text-end mt-2">
        <i class="ki-duotone ki-cross-square fs-2x text-gray-500">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </a>
</div>
<!--end::Header-->
