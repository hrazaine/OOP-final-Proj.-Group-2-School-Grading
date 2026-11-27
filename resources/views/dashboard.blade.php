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
                    <div class="avatar avatar-lg rounded-md ms-auto">
                     <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient">
                      <i class="bi bi-backpack text-[1.2rem] !text-white"></i>
                     </div>
                    </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium mb-1 text-textmuted">Total Teachers</p>
                    <h4 class="mb-0 font-medium">120</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md ms-auto">
                   <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient">
                      <i class="bi bi-mortarboard text-[1.2rem] !text-white"></i>
                   </div>
                  </div>
                </div>
                <div 
                      class=></i></span> <a 
                   ></a> </div>
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                  <div>
                    <p class="font-medium mb-1 text-textmuted">Total Faculties</p>
                    <h4 class="mb-0 font-medium">12</h4>
                  </div>
                  <div class="avatar avatar-lg rounded-md  ms-auto">
                    <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-success-gradient"> <i
                        class="bi bi-archive text-[1.2rem] !text-white"></i> </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="xxl:col-span-3 md:col-span-6 col-span-12">
            <div class="box">
              <div class="box-body">
                <div class="flex">
                    <div>
                    <p class="font-medium mb-1 text-textmuted">Total Courses</p>
                    <h4 class="mb-0 font-medium">12</h4>
                    </div>
                   <div class="avatar avatar-lg rounded-md ms-auto">
                     <div class="avatar !h-[2.5rem] !w-[2.5rem] !mb-0 rounded-md bg-primary-gradient">
                      <i class="bi bi-mortarboard text-[1.2rem] !text-white"></i>
                     </div>
                  </div>
              </div>
            </div>
           </div>
        <!-- row closed -->
@endsection
