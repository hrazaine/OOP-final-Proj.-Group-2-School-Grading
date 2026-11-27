@extends('layouts.master')

@section('Title', 'User Management')

@section('contents')
<div class="grid grid-cols-12 mt-8 gap-x-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header flex items-center justify-between">
                <div>
                    <h1 class="box-title">User Management</h1>
                    <p class="text-[.75rem] mb-0 text-textmuted">Manage student, teacher, and administrator accounts.</p>
                </div>
                <a href="{{ route('users.create') }}" class="ti-btn !text-white !bg-primary">Add User</a>
            </div>

            <div class="box-body">
                @if (session('success'))
                    <div class="mb-4 rounded border border-green-300 bg-green-50 p-3 text-sm text-green-700">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                    <div class="mb-4 rounded border border-red-300 bg-red-50 p-3 text-sm text-red-700">{{ session('error') }}</div>
                @endif

                <div class="table-responsive">
                    <table class="table table-auto ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                        <thead class="bg-light dark:bg-black/20">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date Registered</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ ucfirst($user->role ?? 'student') }}</td>
                                    <td>
                                        @if ($user->is_active)
                                            <span class="badge bg-success/10 !text-success">Active</span>
                                        @else
                                            <span class="badge bg-danger/10 !text-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at?->format('M j, Y') ?? '—' }}</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            <a href="{{ route('users.edit', $user->id) }}" class="ti-btn ti-btn-sm ti-btn-primary" aria-label="Edit {{ $user->name }}" title="Edit user">
                                                <i class="ri-edit-line"></i>
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Delete this user account?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger" aria-label="Delete {{ $user->name }}" title="Delete user">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-textmuted">No users have been added yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($users->hasPages())
                    <div class="mt-4">{{ $users->links() }}</div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
