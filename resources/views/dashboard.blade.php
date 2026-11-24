@extends('layouts.master')

@section('Title')
School Grading System
@endsection

@section('contents')
<!-- Start::page-header -->
        <!-- Page Header -->
        <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
          <div class="my-auto">
            <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Student Grading System</h5>
            <nav>
              <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                    href="javascript:void(0);"> Dashboard <i
                      class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                  </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                    href="javascript:void(0);">Student Grading System</a> </li>
                  </a> </li>  
              </ol>
            </nav>
          </div>

          <div class="flex xl:my-auto right-content align-items-center">
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                <i class="mdi mdi-filter-variant"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-star"></i>
              </button>
            </div>
            <div class="pe-1 xl:mb-0">
              <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                <i class="mdi mdi-refresh"></i>
              </button>
            </div>
            <div class="xl:mb-0">
              <div class="hs-dropdown ti-dropdown">
                <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                </button>
                <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                  <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Page Header Close -->
        <!-- End::page-header -->

        </div>
        <!-- row -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium mb-1 text-textmuted">Total Students</p>
                    <h4 class="mb-0 font-medium">1,234</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md  ms-auto">
                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient"> <i
                        class="bi bi-cart-check text-[1.2rem] !text-white"></i> </div>
                  </div>
                </div>
                <div class="flex mt-2"> <span class="badge !text-primary !text-xs bg-primary/10 !rounded-full">+24% <i
                      class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                    class="text-textmuted ms-auto underline mt-auto">view more</a> </div>
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium mb-1 text-textmuted">Total Expenses</p>
                    <h4 class="mb-0 font-medium">$73,579</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md ms-auto">
                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-danger-gradient"> <i
                        class="bi bi-currency-dollar text-[1.2rem] !text-white"></i> </div>
                  </div>
                </div>
                <div class="flex mt-2"> <span class="badge  bg-danger/10 !text-danger !text-xs !rounded-full">+10% <i
                      class="fe fe-arrow-up !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium mb-1 text-textmuted">Total Sales</p>
                    <h4 class="mb-0 font-medium">$34,876</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md  ms-auto">
                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient"> <i
                        class="bi bi-archive text-[1.2rem] !text-white"></i> </div>
                  </div>
                </div>
                <div class="flex mt-2"> <span class="badge !text-success !text-xs bg-success/10 !rounded-full">+0.26% <i
                      class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium text-textmuted mb-1">Total Products</p>
                    <h4 class="mb-0 font-medium">26,231</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md ms-auto">
                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-warning-gradient"> <i
                        class="bi bi-handbag text-[1.2rem] !text-white"></i> </div>
                  </div>
                </div>
                <div class="flex mt-2"> <span class="badge bg-warning/10 !text-warning  !text-xs !rounded-full">+06% <i
                      class="fe fe-arrow-down !text-[0.75rem]"></i></span> <a href="javascript:void(0);"
                    class="text-textmuted  ms-auto underline mt-auto">view more</a> </div>
              </div>
            </div>
          </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="grid grid-cols-12 gap-x-6">
          <div class="xxl:col-span-3 md:col-span-12 col-span-12">
            <div class="box overflow-hidden">
              <div class="box-body !p-0">
                <div class="box-header !border-b-0 !pb-0">
                  <div class="flex justify-between">
                    <h4 class="box-title mb-2">Recent Orders</h4>
                    <div class="hs-dropdown ti-dropdown">
                      <a aria-label="anchor" href="javascript:void(0);"
                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                      </a>
                      <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                            href="javascript:void(0);">Action</a></li>
                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                            href="javascript:void(0);">Another action</a></li>
                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                            href="javascript:void(0);">Something else here</a></li>
                      </ul>
                    </div>
                  </div>
                  <div>
                    <p class="text-[.75rem] text-textmuted font-normal mb-0">Tracking Your Latest Shopping Adventures.</p>
                  </div>
                </div>
                <div class="">
                    <ul class="pt-4">
                        <li class="px-4">
                            <div class="mb-6">
                                <div class="flex items-center">
                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-primary/10 !text-primary  me-3"><i class="fe fe-box"></i></span></a>
                                    <div class="w-full">
                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Fashion</h6></a>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 90%;"></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <p class="mb-3 fs-13 text-textmuted">
                                            <i class="fe fe-arrow-up-right me-1 text-success brround"></i>93.0%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="px-4">
                            <div class="mb-6">
                                <div class="flex">
                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-danger/10 !text-danger me-3"><i class="fe fe-home"></i></span></a>
                                    <div class="w-full">
                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Home Furniture</h6></a>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated !bg-danger" style="width: 80%;"></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <p class="mb-3 fs-13 text-textmuted">
                                            <i class="fe fe-arrow-up-right me-1 text-success brround"></i>80.5%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="px-4">
                            <div class="mb-6">
                                <div class="flex">
                                    <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-success/10 !text-success me-3"><i class="fe fe-layers"></i></span></a>
                                    <div class="w-full">
                                        <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Groceries</h6></a>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated !bg-success" style="width: 60%;"></div>
                                        </div>
                                    </div>
                                    <div class="ms-auto my-auto">
                                        <p class="mb-3 fs-13 text-textmuted">
                                            <i class="fe fe-arrow-up-right me-1 text-success brround"></i>60.7%
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="px-4">
                          <div class="mb-5">
                              <div class="flex">
                                  <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-info/10 !text-info me-3"><i class="fe fe-tv"></i></span></a>
                                  <div class="w-full">
                                      <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Electronics</h6></a>
                                      <div class="progress progress-xs">
                                          <div class="progress-bar progress-bar-striped progress-bar-animated !bg-info" style="width: 60%;"></div>
                                      </div>
                                  </div>
                                  <div class="ms-auto my-auto">
                                      <p class="mb-3 fs-13 text-textmuted">
                                          <i class="fe fe-arrow-up-right me-1 text-success brround"></i>60.7%
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </li>
                      <li class="px-4">
                        <div class="mb-5">
                            <div class="flex">
                                <a href="javascript:void(0);"><span class="avatar avatar-md br-5 bg-warning/10 !text-warning me-3"><i class="fe fe-target"></i></span></a>
                                <div class="w-full">
                                    <a href="javascript:void(0);"><h6 class="mb-2 mt-1 text-[0.925rem] font-medium text-default">Toys & Games</h6></a>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated !bg-warning" style="width: 60%;"></div>
                                    </div>
                                </div>
                                <div class="ms-auto my-auto">
                                    <p class="mb-3 fs-13 text-textmuted">
                                        <i class="fe fe-arrow-up-right me-1 text-success brround"></i>60.7%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>   
            </div>
            </div>
          </div>
          <div class="xxl:col-span-6 md:col-span-12 col-span-12">
            <div class="box">
              <div class="box-header !border-b-0 !pb-0">
                <div class="flex justify-between">
                  <h4 class="box-title mb-2">Earnings</h4>
                  <div class="hs-dropdown ti-dropdown">
                    <a aria-label="anchor" href="javascript:void(0);"
                      class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                      data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                    </a>
                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Action</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Another action</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div>
                  <p class="text-[.75rem] text-textmuted font-normal mb-0">Unlock Insights, Uncover Opportunities with Every Graph,Track Your Rewards with Clarity and Precision.</p>
                </div>
              </div>
              <div class="box-body !pb-0">
                <div id="earnings"></div>
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-12 col-span-12">
            <div class="box overflow-hidden">
              <div class="box-header">
                <div class="flex justify-between">
                  <h4 class="box-title mb-2">Sales By Category</h4>
                  <div class="hs-dropdown ti-dropdown">
                    <a aria-label="anchor" href="javascript:void(0);"
                      class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                      data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                    </a>
                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Action</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Another action</a></li>
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="javascript:void(0);">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div>
                  <p class="text-[.75rem] text-textmuted font-normal mb-0">Sales Performance of all states in the
                    United States.</p>
                </div>
              </div>
              <div class="box-body">
                <div id="salesDonut"></div>
              </div>
              <div class="box-body !p-0">
                <div class="grid grid-cols-12 border-t border-t-dashed border-defaultborder dark:border-defaultborder/10">
                  <div class="col-span-4 p-0">
                    <div class="ps-4 py-3 pe-3 text-center border-e border-e-dashed border-defaultborder dark:border-defaultborder/10"> <span
                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend mobile d-inline-block">Electronics
                      </span>
                      <div><span class="text-md font-medium text-[1.2rem]">7,724</span> </div>
                    </div>
                  </div>
                  <div class="col-span-4 p-0">
                    <div class="p-3 text-center border-e border-e-dashed border-defaultborder dark:border-defaultborder/10"> <span
                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend desktop d-inline-block">Women's
                      </span>
                      <div><span class="text-md font-medium text-[1.2rem]">4,987</span></div>
                    </div>
                  </div>
                  <div class="col-span-4 p-0">
                    <div class="p-3 text-center"> <span
                        class="text-textmuted text-[0.813rem] mb-1 crm-lead-legend laptop d-inline-block">Men's </span>
                      <div><span class="text-md font-medium text-[1.2rem]">8,093</span> </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- row closed -->

        


      </div>
    </div>
    <!-- end::main-content -->
@endsection
