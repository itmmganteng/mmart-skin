<x-default-layout>
    @section('title')
    Bidding
    @endsection

    @section('breadcrumbs')
    {{ Breadcrumbs::render('utilities.modals.forms.bidding') }}
    @endsection

    <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Heading-->
            <div class="card-px text-center pt-15 pb-15">
                <!--begin::Title-->
                <h2 class="fs-2x fw-bold mb-0">Submit a bid Modal Example</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold py-7">Click on the below buttons to launch
                    <br />a bidding modal example.</p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_bidding">Start Bidding</a>
                <!--end::Action-->
            </div>
            <!--end::Heading-->
            <!--begin::Illustration-->
            <div class="text-center pb-15 px-5">
                <img src="{{ asset('assets/media/illustrations/sketchy-1/2.png') }}" alt="" class="mw-100 h-200px h-sm-325px" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <!--begin::Modal - New Target-->
    <div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
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
                    <form id="kt_modal_bidding_form" class="form" action="#">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Place your bids</h1>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">If you need more info, please check
                                <a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Bid Amount</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Specify the bid amount to place in.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Bid options-->
                            <div class="d-flex flex-stack gap-5 mb-3">
                                <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">10</button>
                                <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">50</button>
                                <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
                            </div>
                            <!--begin::Bid options-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount" name="bid_amount" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Currency Type</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Select the currency type.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select2-->
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Currency Type" name="currency_type">
                                <option value=""></option>
                                <option value="dollar" selected="selected">Dollar</option>
                                <option value="crypto">Crypto</option>
                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-8">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Currency</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Dollar type-->
                            <div class="" data-kt-modal-bidding-type="dollar">
                                <!--begin::Select2-->
                                <select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected="selected">
                                        <b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
                                        <b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                    <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
                                        <b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
                                        <b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                                    <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
                                        <b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                    <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
                                        <b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                    <option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
                                        <b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Dollar type-->
                            <!--begin::Crypto type-->
                            <div class="d-none" data-kt-modal-bidding-type="crypto">
                                <!--begin::Select2-->
                                <select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                    <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected="selected">Bitcoin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
                                    <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>
                                </select>
                                <!--end::Select2-->
                            </div>
                            <!--end::Crypto type-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Notice-->
                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-wallet fs-2tx text-primary me-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                            <!--end::Icon-->
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1">
                                <!--begin::Content-->
                                <div class="fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Top up funds</h4>
                                    <div class="fs-6 text-gray-700">Not enough funds in your wallet?
                                        <a href="utilities/modals/wizards/top-up-wallet.html" class="text-bolder">Top up wallet</a>.</div>
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">Cancel</button>
                            <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
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
    <!--end::Modal - New Target-->
</x-default-layout>
