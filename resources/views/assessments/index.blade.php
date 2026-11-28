@extends('layouts.master')

@section('Title', $type.' Management')

@section('contents')
<div class="grid grid-cols-12 gap-6 mt-6">
    <div class="col-span-12">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Add {{ $type }}</h2>
                <p class="text-[.75rem] mb-0 text-textmuted">Assign this {{ strtolower($type) }} to a user managed in User Management.</p>
            </div>
            <div class="box-body">
                @if (session('success'))
                    <div class="mb-4 rounded border border-green-300 bg-green-50 p-3 text-sm text-green-700">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="mb-4 rounded border border-red-300 bg-red-50 p-3 text-sm text-red-700">
                        <ul class="list-disc ps-5 mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('assessments.store', ['type' => strtolower($type)]) }}">
                    @csrf
                    <div class="grid grid-cols-12 gap-4 items-end">
                        <div class="col-span-12 md:col-span-4">
                            <label for="user_id" class="form-label">Student / User</label>
                            <select id="user_id" name="user_id" class="form-control" required>
                                <option value="">Select a user</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>
                                        {{ $user->name }} ({{ $user->email }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-span-12 md:col-span-3">
                            <label for="title" class="form-label">{{ $type }} title</label>
                            <input id="title" name="title" type="text" class="form-control" value="{{ old('title') }}" maxlength="255" required>
                        </div>
                        <div class="col-span-6 md:col-span-1">
                            <label for="score" class="form-label">Score</label>
                            <input id="score" name="score" type="number" class="form-control" value="{{ old('score') }}" min="0" step="0.01">
                        </div>
                        <div class="col-span-6 md:col-span-1">
                            <label for="max_score" class="form-label">Out of</label>
                            <input id="max_score" name="max_score" type="number" class="form-control" value="{{ old('max_score', 100) }}" min="0.01" step="0.01" required>
                        </div>
                        <div class="col-span-8 md:col-span-2">
                            <label for="assessment_date" class="form-label">Date</label>
                            <input id="assessment_date" name="assessment_date" type="date" class="form-control" value="{{ old('assessment_date') }}">
                        </div>
                        <div class="col-span-4 md:col-span-1">
                            <button type="submit" class="ti-btn !text-white !bg-primary w-full">Add</button>
                        </div>
                    </div>
                    @if ($users->isEmpty())
                        <p class="mt-3 mb-0 text-sm text-danger">Create a user in User Management before adding an assessment.</p>
                    @endif
                </form>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h2 class="box-title">{{ $type }} Records</h2>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-auto ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                        <thead class="bg-light dark:bg-black/20">
                            <tr>
                                <th scope="col">Student / User</th>
                                <th scope="col">{{ $type }}</th>
                                <th scope="col">Score</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        //assessment records
                        <tbody>
                            @forelse ($assessments as $assessment)
                                <tr>
                                    <td>
                                        <div class="font-medium">{{ $assessment->user?->name ?? 'User deleted' }}</div>
                                        @if ($assessment->user)
                                            <div class="text-xs text-textmuted">{{ $assessment->user->email }}</div>
                                        @endif
                                    </td>
                                    <td>{{ $assessment->title }}</td>
                                    <td>{{ $assessment->score ?? '—' }} / {{ $assessment->max_score }}</td>
                                    <td>{{ $assessment->assessment_date?->format('M j, Y') ?? '—' }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('assessments.destroy', $assessment) }}" onsubmit="return confirm('Delete this {{ strtolower($type) }} record?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-textmuted">No {{ strtolower($type) }} records yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
