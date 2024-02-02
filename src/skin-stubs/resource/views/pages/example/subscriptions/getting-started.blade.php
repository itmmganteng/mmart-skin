<x-default-layout>
    @section('title')
    Getting Started
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('subscriptions.getting-started') }}
    @endsection

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body p-0">
            <!--begin::Wrapper-->
            <div class="card-px text-center py-20 my-10">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bold mb-10">Welcome to Subscriptions App</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold mb-10">There are no subscriptions added yet.
                <br />Kickstart your business by adding a your first subscription</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="apps/subscriptions/add.html" class="btn btn-primary">Add Subscription</a>
                <!--end::Action-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Illustration-->
            <div class="text-center px-4">
                <img class="mw-100 mh-300px" alt="" src="{{ asset('assets/media/illustrations/sketchy-1/5.png') }}" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</x-default-layout>
