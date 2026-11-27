@extends('layouts.master')

@section('Title', 'User Management')

@section('contents')
   <!-- row opened -->
        <div class="grid grid-cols-12 mt-8 gap-x-6">
          <div class="col-span-12 xxl:col-span-12">
            <div class="box">
              <div class="box-header">
                <div class="flex justify-between">
                  <div class="box-title"> List of Users </div>
                  <div class="hs-dropdown ti-dropdown">
                    <a aria-label="anchor" href="javascript:void(0);"
                      class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                      data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                    </a>
                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                      <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                          href="{{ route('users.create') }}">New User</a></li>
                    </ul>
                  </div>
                </div>
                <p class="text-[.75rem] mb-0 text-textmuted font-normal">An order is an investor's instructions to a
                  broker or brokerage firm to purchase or sell</p>
              </div>
              <div class="box-body">
                <div class="table-responsive"> 
                  <table
                    class="table table-auto order-table ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                    <thead class="bg-light dark:bg-black/20">
                      <tr>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">
                          Custumer Name</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">
                          Email</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Role</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Status</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Date Registered</th>
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Date Updated</th>
                        
                        <th scope="col" class="border-b !border-defaultborder dark:!border-defaultborder/10">Actions
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                      <tr>
                        <td>
                          <div class="flex items-center">
                            <div class="me-2 lh-1"> <span class="avatar avatar-sm"> <img
                                  src="{{ asset('assets/images/ecommerce/01.jpg') }}
                                  " alt="" class="rounded-1"> </span> </div>
                            <div class="fs-14">{{ $user->name }}</div>
                          </div>
                        </td>
                        <td> <span class="fw-semibold"> {{$user->email}}</span> </td>
                        <td>{{ ucfirst($user->role ?? 'Unassigned') }}</td>
                        <td>
                          @if ($user->is_active)
                            <span class="badge bg-success/10 !text-success">Active</span>
                          @else
                            <span class="badge bg-danger/10 !text-danger">Inactive</span>
                          @endif
                        </td>
                        
                        <td> <span class="">{{$user->created_at}}</span> </td>
                        <td> <span class="">{{$user->updated_at}}</span> </td>
                       
                        
                        <td>
                          <div class="flex gap-2"> <a aria-label="anchor" href="javascript:void(0);"
                              class="ti-btn ti-btn-sm ti-btn-primary !border-primary/20 btn-wave waves-effect waves-light"> <i
                                class="ri-edit-line"></i></a> <a aria-label="anchor" href="javascript:void(0);"
                              class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20 btn-wave waves-effect waves-light"> <i
                                class="ri-delete-bin-7-line"></i> </a> </div>
                        </td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="box-footer !pt-0 !border-t-0">
                <nav aria-label="Page navigation mb-2">
                  <ul class="ti-pagination justify-center sm:justify-end">
                    <li class="page-item disabled">
                      <a class="page-link px-3 py-[0.375rem]">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">1</a></li>
                    <li class="page-item active"><a class="page-link px-3 py-[0.375rem]"
                        href="javascript:void(0);">2</a></li>
                    <li class="page-item"><a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">3</a></li>
                    <li class="page-item">
                      <a class="page-link px-3 py-[0.375rem]" href="javascript:void(0);">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- /row -->
@endsection
