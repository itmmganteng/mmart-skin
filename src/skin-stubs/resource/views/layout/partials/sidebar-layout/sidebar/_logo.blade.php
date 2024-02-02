<!--begin::Logo-->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
	<!--begin::Logo image-->
	<a href="{{ route('dashboard') }}">
        <div class="app-sidebar-logo-default d-flex align-items-center theme-light-show">
            <img alt="Logo" src="{{ asset(config('settings.KT_APP_LOGO', 'assets/media/logos/m-mart.svg')) }}" class="h-40px app-sidebar-logo-default" />
            <div class="ms-3 app-sidebar-logo-default">
                <h1 class="page-heading text-gray-900 fw-semibold fs-1" style="font-family: Rubik; margin-bottom: -6px">
                    {{ config('settings.KT_APP_NAME') }}
                </h1>
                <small class="text-gray-700 fw-light" style="font-family: Rubik;">
                    {{ config('settings.KT_APP_SLOGAN') }}
                </small>
            </div>
        </div>
        <div class="app-sidebar-logo-default d-flex align-items-center theme-dark-show">
            <img alt="Logo" src="{{ asset(config('settings.KT_APP_LOGO', 'assets/media/logos/m-mart.svg')) }}" class="h-40px app-sidebar-logo-default" />
            <div class="ms-3 app-sidebar-logo-default">
                <h1 class="page-heading text-gray-900 fw-semibold fs-1" style="font-family: Rubik; margin-bottom: -6px">
                    {{ config('settings.KT_APP_NAME') }}
                </h1>
                <small class="text-gray-800 fw-light" style="font-family: Rubik;">
                    {{ config('settings.KT_APP_SLOGAN') }}
                </small>
            </div>
        </div>
        <img alt="Logo" src="{{ asset(config('settings.KT_APP_LOGO', 'assets/media/logos/m-mart.svg')) }}" class="h-30px app-sidebar-logo-minimize"/>
	</a>
	<!--end::Logo image-->
	<!--begin::Sidebar toggle-->
	<!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
	<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">{!! getIcon('black-left-line', 'fs-3 rotate-180 ms-1') !!}</div>
	<script type="text/javascript">
		var sidebar_toggle = document.getElementById("kt_app_sidebar_toggle");  // Get the sidebar toggle button element
		@if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on")
			document.body.setAttribute("data-kt-app-sidebar-minimize", "on");  // Set the 'data-kt-app-sidebar-minimize' attribute for the body tag
			sidebar_toggle.setAttribute("data-kt-toggle-state", "active");  // Set the 'data-kt-toggle-state' attribute for the sidebar toggle button
			sidebar_toggle.classList.add("active");  // Add the 'active' class to the sidebar toggle button
		@endif
	</script>
	<!--end::Sidebar toggle-->
</div>
<!--end::Logo-->
