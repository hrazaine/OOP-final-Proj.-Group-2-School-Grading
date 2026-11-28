@extends('layouts.master')

@section('Title', 'Edit User')

@section('contents')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Edit User</h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name</label>
                    <input type="text" name="fullname" class="form-control"
                           id="fullname" value="{{ old('fullname', $user->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control"
                           id="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Role</label>
                    <select name="role" id="role" class="form-control" required>
                        <option value="admin" @selected(old('role', $user->role) === 'admin')>Admin</option>
                        <option value="teacher" @selected(old('role', $user->role) === 'teacher')>Teacher</option>
                        <option value="student" @selected(old('role', $user->role) === 'student')>Student</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Account Status</label>
                    <select name="is_active" id="is_active" class="form-control" required>
                        <option value="1" @selected((string) old('is_active', (int) $user->is_active) === '1')>Active</option>
                        <option value="0" @selected((string) old('is_active', (int) $user->is_active) === '0')>Inactive</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="birthdate" class="form-label">Birthdate</label>
                    <input type="date" name="birthdate" id="birthdate" class="form-control"
                           value="{{ old('birthdate', $user->birthdate?->format('Y-m-d')) }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">New Password <span class="text-textmuted">(leave blank to keep current)</span></label>
                    <input type="password" name="password" id="password" class="form-control" minlength="8" autocomplete="new-password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm New Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" minlength="8" autocomplete="new-password">
                </div>

                <button type="submit" class="btn btn-primary">Update User</button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
            </form>

        </div>
    </div>
</div>
@endsection

