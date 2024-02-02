<x-default-layout>
    @section('title')
        Sitemap
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('corporate.sitemap') }}
    @endsection

    <!--begin::Sitemap-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-5 px-lg-19 py-lg-16">
            <!--begin::Heading-->
            <div class="mb-15">
                <!--begin::Title-->
                <h1 class="fs-2x text-gray-900 mb-6">Sitemap</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="fs-5 text-muted fw-semibold">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
                <!--end::Text-->
            </div>
            <!--end::Heading-->
            <!--begin::Row-->
            <div class="row g-10 mb-15">
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">Premium Product</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">Webiste Tempaltes</a>
                        <a href="#" class="link-primary mb-6">Wordpress Templates</a>
                        <a href="#" class="link-primary mb-6">Audio Files</a>
                        <a href="#" class="link-primary">JS Frameworks</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">Resources</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">Our Blog</a>
                        <a href="#" class="link-primary mb-6">Our Tutorials</a>
                        <a href="#" class="link-primary mb-6">Announcements</a>
                        <a href="#" class="link-primary">Our News</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">Legal Matter</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">Terms</a>
                        <a href="#" class="link-primary mb-6">Support Policy</a>
                        <a href="#" class="link-primary mb-6">Refund Policy</a>
                        <a href="#" class="link-primary">Privacy</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            <div class="row g-10 mb-18">
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">Free Products</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">Webiste Tempaltes</a>
                        <a href="#" class="link-primary mb-6">Wordpress Templates</a>
                        <a href="#" class="link-primary mb-6">Audio Files</a>
                        <a href="#" class="link-primary">Free Solutions</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">About</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">About Us</a>
                        <a href="#" class="link-primary mb-6">Our Team</a>
                        <a href="#" class="link-primary mb-6">Careers</a>
                        <a href="#" class="link-primary">Contacts</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-sm-4">
                    <!--begin::Title-->
                    <h3 class="fw-bold text-gray-900 mb-7">Studio</h3>
                    <!--end::Title-->
                    <!--begin::Links-->
                    <div class="d-flex flex-column fw-semibold fs-4">
                        <a href="#" class="link-primary mb-6">Clients</a>
                        <a href="#" class="link-primary mb-6">Oppurtunaties</a>
                        <a href="#" class="link-primary mb-6">Hire Experts</a>
                        <a href="#" class="link-primary">Locations</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center mb-4">
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
    <!--end::Sitemap-->

</x-default-layout>
