<x-auth-layout>

    @section('title')
    Promotion Email 3
    @endsection
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Header-->
            @include('pages.example.authentication.email-templates.header')
            <!--end::Header-->
            <!--begin::Body-->
            <div class="scroll-y flex-column-fluid px-10 py-10" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header_nav" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="background-color:#D5D9E2; --kt-scrollbar-color: #d9d0cc; --kt-scrollbar-hover-color: #d9d0cc">
                <!--begin::Email template-->
                <style>
                    html,
                    body {
                        padding: 0;
                        margin: 0;
                        font-family: Inter, Helvetica, "sans-serif";
                    }

                    a:hover {
                        color: #0a503a;
                    }

                </style>
                <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
                    <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                            <tbody>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                                        <!--begin:Email content-->
                                        <div style="margin-bottom:55px; text-align:left">
                                            <!--begin:Logo-->
                                            <div style="margin:-10px 60px 54px 60px; text-align:center;">
                                                <a href="https://keenthemes.com" rel="noopener" target="_blank">
                                                    <img alt="Logo" src="{{ asset('assets/media/email/logo-2.svg') }}" style="height: 35px" />
                                                </a>
                                            </div>
                                            <!--end:Logo-->
                                            <!--begin:Text-->
                                            <div style="font-size: 14px; text-align:center; font-weight: 500; margin:0 60px 36px 60px; font-family:Arial,Helvetica,sans-serif">
                                                <p style="color:#181C32; font-size: 30px; font-weight:700; line-height:1.4; margin-bottom:6px">New NFT Products</p>
                                                <p style="margin-bottom:2px; color:#3F4254; line-height:1.6">This is where the process of creating buyer personas comes in handy. Make sure you have a clear understanding target audience.</p>
                                            </div>
                                            <!--end:Text-->
                                            <!--begin:Items-->
                                            <div style="display: flex; justify-content:center; flex-wrap: wrap; margin:0 40px 42px 40px">
                                                <!--begin:Item-->
                                                <div style="width:220px; margin:18px 20px">
                                                    <!--begin:Media-->
                                                    <img alt="" style="width:100%; border-radius:12px; margin-bottom:9px" src="{{ asset('assets/media/email/img-5.jpg') }}" />
                                                    <!--end:Media-->
                                                    <!--begin:Text-->
                                                    <a href="#" style="color:#181C32; font-size: 14px; font-weight:600; display:block; margin-bottom:9px">Apart from arranging the order of topics according</a>
                                                    <!--begin:Text-->
                                                    <!--begin:Price-->
                                                    <span style="color:#7E8299; font-size: 10px; font-weight:600; display:block; line-height:1.1">Price: $2,343</span>
                                                    <!--begin:Price-->
                                                    <!--begin:Username-->
                                                    <a href="#" style="color:#5E6278; font-size: 10px; font-weight:600">Jane Cooper</a>
                                                    <!--begin:Username-->
                                                </div>
                                                <!--end:Item-->
                                                <!--begin:Item-->
                                                <div style="width:220px; margin:18px 20px">
                                                    <!--begin:Media-->
                                                    <img alt="" style="width:100%; border-radius:12px; margin-bottom:9px" src="{{ asset('assets/media/email/img-4.jpg') }}" />
                                                    <!--end:Media-->
                                                    <!--begin:Text-->
                                                    <a href="#" style="color:#181C32; font-size: 14px; font-weight:600; display:block; margin-bottom:9px">Apart from arranging the order of topics according</a>
                                                    <!--begin:Text-->
                                                    <!--begin:Price-->
                                                    <span style="color:#7E8299; font-size: 10px; font-weight:600; display:block; line-height:1.1">Price: $2,343</span>
                                                    <!--begin:Price-->
                                                    <!--begin:Username-->
                                                    <a href="#" style="color:#5E6278; font-size: 10px; font-weight:600">Jane Cooper</a>
                                                    <!--begin:Username-->
                                                </div>
                                                <!--end:Item-->
                                                <!--begin:Item-->
                                                <div style="width:220px; margin:18px 20px">
                                                    <!--begin:Media-->
                                                    <img alt="" style="width:100%; border-radius:12px; margin-bottom:9px" src="{{ asset('assets/media/email/img-3.jpg') }}" />
                                                    <!--end:Media-->
                                                    <!--begin:Text-->
                                                    <a href="#" style="color:#181C32; font-size: 14px; font-weight:600; display:block; margin-bottom:9px">Apart from arranging the order of topics according</a>
                                                    <!--begin:Text-->
                                                    <!--begin:Price-->
                                                    <span style="color:#7E8299; font-size: 10px; font-weight:600; display:block; line-height:1.1">Price: $2,343</span>
                                                    <!--begin:Price-->
                                                    <!--begin:Username-->
                                                    <a href="#" style="color:#5E6278; font-size: 10px; font-weight:600">Jane Cooper</a>
                                                    <!--begin:Username-->
                                                </div>
                                                <!--end:Item-->
                                                <!--begin:Item-->
                                                <div style="width:220px; margin:18px 20px">
                                                    <!--begin:Media-->
                                                    <img alt="" style="width:100%; border-radius:12px; margin-bottom:9px" src="{{ asset('assets/media/email/img-6.jpg') }}" />
                                                    <!--end:Media-->
                                                    <!--begin:Text-->
                                                    <a href="#" style="color:#181C32; font-size: 14px; font-weight:600; display:block; margin-bottom:9px">Apart from arranging the order of topics according</a>
                                                    <!--begin:Text-->
                                                    <!--begin:Price-->
                                                    <span style="color:#7E8299; font-size: 10px; font-weight:600; display:block; line-height:1.1">Price: $2,343</span>
                                                    <!--begin:Price-->
                                                    <!--begin:Username-->
                                                    <a href="#" style="color:#5E6278; font-size: 10px; font-weight:600">Jane Cooper</a>
                                                    <!--begin:Username-->
                                                </div>
                                                <!--end:Item-->
                                            </div>
                                            <!--end:Items-->
                                            <!--begin:Text-->
                                            <div style="font-size:14px; text-align:left; font-weight:500; margin:0 60px 33px 60px; font-family:Arial,Helvetica,sans-serif">
                                                <p style="color:#181C32; font-size: 18px; font-weight:600; margin-bottom:27px">Hey Esther,</p>
                                                <p style="color:#3F4254; line-height:1.6">Lots of people make mistakes while
                                                    <a href="#" style="font-family:Arial,Helvetica,sans-serif margin-right:3px">creating paragraphs.</a>Some writers just put whitespace in their text in random places for aesthetic purposes but don’t think about the coherence and structure of the text. In many cases, the
                                                    <a href="#" style="font-family:Arial,Helvetica,sans-serif; margin-right:3px">coherence within paragraphs</a>and between paragraphs remains unclear. These kinds of mistakes can mess up the structure of your articles.</p>
                                            </div>
                                            <!--end:Text-->
                                            <!--begin:Action-->
                                            <a href="apps/projects/targets.html" target="_blank" style="background-color:#50cd89; border-radius:6px; display:inline-block; margin-left:60px; padding:11px 19px; color: #FFFFFF; font-size: 14px; font-weight:500; font-family:Arial,Helvetica,sans-serif">Download Now</a>
                                            <!--end:Action-->
                                        </div>
                                        <!--end:Email content-->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
                                        <p style="color:#181C32; font-size: 16px; font-weight: 600; margin-bottom:9px">It’s all about customers!</p>
                                        <p style="margin-bottom:2px">Call our customer care number: +31 6 3344 55 56</p>
                                        <p style="margin-bottom:4px">You may reach us at
                                            <a href="https://devs.keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600">devs.keenthemes.com</a>.</p>
                                        <p>We serve Mon-Fri, 9AM-18AM</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo" src="{{ asset('assets/media/email/icon-linkedin.svg') }}" />
                                        </a>
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo" src="{{ asset('assets/media/email/icon-dribbble.svg') }}" />
                                        </a>
                                        <a href="#" style="margin-right:10px">
                                            <img alt="Logo" src="{{ asset('assets/media/email/icon-facebook.svg') }}" />
                                        </a>
                                        <a href="#">
                                            <img alt="Logo" src="{{ asset('assets/media/email/icon-twitter.svg') }}" />
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">
                                        <p>&copy; Copyright KeenThemes.
                                            <a href="https://keenthemes.com" rel="noopener" target="_blank" style="font-weight: 600;font-family:Arial,Helvetica,sans-serif">Unsubscribe</a>&nbsp; from newsletter.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end::Email template-->
            </div>
            <!--end::Body-->
        </div>
    </div>
</x-auth-layout>
