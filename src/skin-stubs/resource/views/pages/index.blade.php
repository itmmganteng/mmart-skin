<x-system-layout>
    @section('title', 'Welcome')
    <!--begin::Page bg image-->
    <style>
        body { background-image: url('{{ asset('assets/media/auth/bg3.jpg')}}'); } [data-bs-theme="dark"]
        body { background-image: url('{{ asset('assets/media/auth/bg3-dark.jpg')}}'); }
    </style>
    <!--end::Page bg image-->
    <div class="card card-flush w-lg-650px py-5">
        <!--begin::Card body-->
        <div class="card-body py-15 py-lg-20">

        <!--begin::Logo-->
        <div class="mb-7">
            <a href="index.html" class="">
                <img alt="Logo" src="{{ asset('assets/media/logos/m-mart.svg') }}" class="h-40px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Title-->
        <h1 class="fw-bolder text-gray-900 mb-5">Welcome to M Mart Template</h1>
        <!--end::Title-->
        <!--begin::Text-->
        <div class="fw-semibold fs-6 text-gray-500 mb-7">This is your opportunity to get creative and make a name
        <br />that gives readers an idea</div>
        <!--end::Text-->
        <!--begin::Illustration-->
        <div class="mb-0">
            <img src="{{ asset('assets/media/auth/ok.png')}}" class="mw-100 mh-300px theme-light-show" alt="" />
            <img src="{{ asset('assets/media/auth/ok-dark.png')}}" class="mw-100 mh-300px theme-dark-show" alt="" />
        </div>
        <!--end::Illustration-->
        <!--begin::Link-->
        <div class="mb-0">
            <a href="{{ route('example') }}" class="btn btn-sm btn-primary">Go To Dashboard</a>
        </div>
        <!--end::Link-->
        </div>
    </div>
</x-system-layout>
