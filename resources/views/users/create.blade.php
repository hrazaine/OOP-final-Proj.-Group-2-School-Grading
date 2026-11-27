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
                                    @if ($errors->any())
                                        <div class="mb-4 rounded border border-red-300 bg-red-50 p-3 text-sm text-red-700">
                                            <ul class="list-disc ps-5 mb-0">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('users.store') }}">
                                        @csrf
                                    <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="fullname" class="form-label !font-normal">Full Name</label>
                                            <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('fullname') }}" required>
                                            @error('fullname')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="email" class="form-label !mb-2">Email Address</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="birthdate" class="form-label !mb-2">Birthdate</label>
                                            <input id="birthdate" type="date" class="form-control" name="birthdate" value="{{ old('birthdate') }}">
                                            @error('birthdate')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="password" class="form-label !mb-2">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" minlength="8" autocomplete="new-password" required>
                                            @error('password')
                                            <span class="text-sm text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="password_confirmation" class="form-label !mb-2">Confirm Password</label>
                                            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" minlength="8" autocomplete="new-password" required>
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="role" class="form-label !mb-2">Role</label>
                                            <select id="role" name="role" class="form-control" required>
                                                <option value="student" @selected(old('role', 'student') === 'student')>Student</option>
                                                <option value="teacher" @selected(old('role') === 'teacher')>Teacher</option>
                                                <option value="admin" @selected(old('role') === 'admin')>Admin</option>
                                            </select>
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="is_active" class="form-label !mb-2">Account Status</label>
                                            <select id="is_active" name="is_active" class="form-control" required>
                                                <option value="1" @selected(old('is_active', '1') === '1')>Active</option>
                                                <option value="0" @selected(old('is_active') === '0')>Inactive</option>
                                            </select>
                                        </div>

                                    </div>

                                    <button type="submit" class="mt-4 ti-btn !text-white !bg-primary">Create User</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

@endsection
