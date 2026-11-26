@extends('layouts.master')

@section('Title', 'Add New User')

@section('contents')
<!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6 mt-4 text-defaultsize">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Create User
                                    </div>
                                    
                                </div>
                                <div class="box-body">
                                    <form method ="POST" action="{{ route('users.store')}}">
                                        @csrf
                                    <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !font-normal">Full Name</label>
                                            <input type="text" class="form-control " name="fullname">
                                            @error('fullname')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !mb-2">Email Address</label>
                                            <input type="text" class="form-control " name="email">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !mb-2">Birthdate</label>
                                            <input type="date" class="form-control " name="birthdate">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !mb-2">Password</label>
                                            <input type="password" class="form-control " name="password">
                                        </div>
  
                                    </div>

                                    <button type="submit" class="mt-4 ti-btn !text-white !bg-primary">Create User</button>
                                </div>
                                  </form>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

@endsection
