<x-default-layout>
    @section('title')
        Careers Apply
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('careers.careers-apply') }}
    @endsection

    <!--begin::Careers - Apply-->
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-lg-17">
            <!--begin::Hero-->
            <div class="position-relative mb-17">
                <!--begin::Overlay-->
                <div class="overlay overlay-show">
                    <!--begin::Image-->
                    <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url('{{ asset('assets/media/stock/1600x800/img-1.jpg') }}')"></div>
                    <!--end::Image-->
                    <!--begin::layer-->
                    <div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
                    <!--end::layer-->
                </div>
                <!--end::Overlay-->
                <!--begin::Heading-->
                <div class="position-absolute text-white mb-8 ms-10 bottom-0">
                    <!--begin::Title-->
                    <h3 class="text-white fs-2qx fw-bold mb-3 m">Careers at KeenThemes</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 fw-semibold">You sit down. You stare at your screen. The cursor blinks.</div>
                    <!--end::Text-->
                </div>
                <!--end::Heading-->
            </div>
            <!--end::-->
            <!--begin::Layout-->
            <div class="d-flex flex-column flex-lg-row mb-17">
                <!--begin::Content-->
                <div class="flex-lg-row-fluid me-0 me-lg-20">
                    <!--begin::Form-->
                    <form action="m-0" class="form mb-15" method="post" id="kt_careers_form">
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">First Name</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="first_name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Last Name</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="last_name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="" name="email" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="fs-5 fw-semibold mb-2">Mobile No</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="mobileno" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Age</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="age" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">City</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="city" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                <span class="required">Position</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Your payment statements may very based on selected position">
                                    <i class="ki-duotone ki-information fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Select-->
                            <select name="position" data-control="select2" data-placeholder="Select a position..." class="form-select form-select-solid">
                                <option value="Web Developer">Web Developer</option>
                                <option value="Web Designer">Web Designer</option>
                                <option value="Art Director">Art Director</option>
                                <option value="Finance Manager">Finance Manager</option>
                                <option value="Project Manager">Project Manager</option>
                                <option value="System Administrator">System Administrator</option>
                            </select>
                            <!--end::Select-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="row mb-5">
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Expected Salary</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="salary" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6 fv-row">
                                <!--end::Label-->
                                <label class="required fs-5 fw-semibold mb-2">Srart Date</label>
                                <!--end::Label-->
                                <!--end::Input-->
                                <input type="text" class="form-control form-control-solid" placeholder="" name="start_date" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5 fv-row">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold mb-2">Website (If Any)</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="website" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-5">
                            <label class="fs-6 fw-semibold mb-2">Experience (Optional)</label>
                            <textarea class="form-control form-control-solid" rows="2" name="experience" placeholder=""></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Application</label>
                            <textarea class="form-control form-control-solid" rows="4" name="application" placeholder=""></textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Separator-->
                        <div class="separator mb-8"></div>
                        <!--end::Separator-->
                        <!--begin::Submit-->
                        <button type="submit" class="btn btn-primary" id="kt_careers_submit_button">
                            <!--begin::Indicator label-->
                            <span class="indicator-label">Apply Now</span>
                            <!--end::Indicator label-->
                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            <!--end::Indicator progress-->
                        </button>
                        <!--end::Submit-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Job-->
                    <div class="mb-10 mb-lg-0">
                        <!--begin::Description-->
                        <div class="m-0">
                            <!--begin::Title-->
                            <h4 class="fs-1 text-gray-800 w-bolder mb-6">Job Details</h4>
                            <!--end::Title-->
                            <!--begin::Text-->
                            <p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                            <!--end::Text-->
                        </div>
                        <!--end::Description-->
                        <!--begin::Accordion-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_3_1">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Requirements</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_3_1" class="collapse show fs-6 ms-1">
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_3_2">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What is your job role?</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_3_2" class="collapse fs-6 ms-1">
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_3_3">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Candidate Benefits</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_3_3" class="collapse fs-6 ms-1">
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Content-->
                            <!--begin::Separator-->
                            <div class="separator separator-dashed"></div>
                            <!--end::Separator-->
                        </div>
                        <!--end::Section-->
                        <!--begin::Section-->
                        <div class="m-0">
                            <!--begin::Heading-->
                            <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_3_4">
                                <!--begin::Icon-->
                                <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
                                    <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Title-->
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Application Terms</h4>
                                <!--end::Title-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Body-->
                            <div id="kt_job_3_4" class="collapse fs-6 ms-1">
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10 mb-n1">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with REST API</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="mb-4">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center ps-10">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Git knowledge is a plus</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Section-->
                        <!--end::Accordion-->
                    </div>
                    <!--end::Job-->
                </div>
                <!--end::Content-->
                <!--begin::Sidebar-->
                <div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
                    <!--begin::Careers about-->
                    <div class="card bg-light">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Top-->
                            <div class="mb-7">
                                <!--begin::Title-->
                                <h2 class="fs-1 text-gray-800 w-bolder mb-6">About Us</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <p class="fw-semibold fs-6 text-gray-600">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
                                <!--end::Text-->
                            </div>
                            <!--end::Top-->
                            <!--begin::Item-->
                            <div class="mb-8">
                                <!--begin::Title-->
                                <h4 class="text-gray-700 w-bolder mb-0">Requirements</h4>
                                <!--end::Title-->
                                <!--begin::Section-->
                                <div class="my-2">
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="mb-8">
                                <!--begin::Title-->
                                <h4 class="text-gray-700 w-bolder mb-0">Our Achievements</h4>
                                <!--end::Title-->
                                <!--begin::Section-->
                                <div class="my-2">
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with JavaScript</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Good time-management skills</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center mb-3">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with React</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Row-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Bullet-->
                                        <span class="bullet me-3"></span>
                                        <!--end::Bullet-->
                                        <!--begin::Label-->
                                        <div class="text-gray-600 fw-semibold fs-6">Experience with HTML / CSS</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Link-->
                            <a href="pages/blog/post.html" class="link-primary fs-6 fw-semibold">Explore More</a>
                            <!--end::Link-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Careers about-->
                </div>
                <!--end::Sidebar-->
            </div>
            <!--end::Layout-->
            <!--begin::Section-->
            <div class="mb-19">
                <!--begin::Top-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-gray-900 mb-5">Publications</h3>
                    <!--end::Title-->
                    <!--begin::Text-->
                    <div class="fs-5 text-muted fw-semibold">Our goal is to provide a complete and robust theme solution
                    <br />to boost all of our customer’s project deployments</div>
                    <!--end::Text-->
                </div>
                <!--end::Top-->
                <!--begin::Row-->
                <div class="row g-10">
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Publications post-->
                        <div class="card-xl-stretch me-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x400/img-73.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x400/img-73.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making a the from also not been afraid to and step away been focused create eye</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Jane Miller</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Mar 21 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Publications post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Publications post-->
                        <div class="card-xl-stretch mx-md-3">
                            <!--begin::Overlay-->
                            <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x400/img-74.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x400/img-74.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Cris Morgan</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on Apr 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Publications post-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-md-4">
                        <!--begin::Publications post-->
                        <div class="card-xl-stretch ms-md-6">
                            <!--begin::Overlay-->
                            <a class="d-block overlay mb-4" data-fslightbox="lightbox-hot-sales" href="{{ asset('assets/media/stock/600x400/img-47.jpg') }}">
                                <!--begin::Image-->
                                <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('assets/media/stock/600x400/img-47.jpg') }}')"></div>
                                <!--end::Image-->
                                <!--begin::Action-->
                                <div class="overlay-layer bg-dark card-rounded bg-opacity-25">
                                    <i class="ki-duotone ki-eye fs-2x text-white"></i>
                                </div>
                                <!--end::Action-->
                            </a>
                            <!--end::Overlay-->
                            <!--begin::Body-->
                            <div class="m-0">
                                <!--begin::Title-->
                                <a href="pages/user-profile/overview.html" class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">Admin Panel - How To Started the Dashboard Tutorial</a>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3 mb-5">We’ve been focused on making the from v4 to v5 but we’ve also not been afraid to step away been focused</div>
                                <!--end::Text-->
                                <!--begin::Content-->
                                <div class="fs-6 fw-bold">
                                    <!--begin::Author-->
                                    <a href="apps/projects/users.html" class="text-gray-700 text-hover-primary">Carles Nilson</a>
                                    <!--end::Author-->
                                    <!--begin::Date-->
                                    <span class="text-muted">on May 14 2021</span>
                                    <!--end::Date-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Publications post-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
            <!--begin::Card-->
            <div class="card mb-4 bg-light text-center">
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
    <!--end::Careers - Apply-->

</x-default-layout>
