
@extends('layouts.master')

@section('Title', 'Grades Management')

@section('contents')
<div class="grid grid-cols-12 gap-6 mt-6">
    <div class="col-span-12">

        {{-- Add Student Grade --}}
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Add Student Grade</h2>
                <p class="text-[.75rem] mb-0 text-textmuted">
                    Select a student and an existing Quiz or Exam.
                </p>
            </div>

            <div class="box-body">

                @if (session('success'))
                    <div class="mb-4 rounded border border-green-300 bg-green-50 p-3 text-sm text-green-700">
                        {{ session('success') }}
                    </div>
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

                <form method="POST" action="{{ route('grades.store') }}">
                    @csrf

                    <div class="grid grid-cols-12 gap-4 items-end">

                        {{-- Student --}}
                        <div class="col-span-12 md:col-span-4">
                            <label for="user_id" class="form-label">Student</label>

                            <select id="user_id" name="user_id" class="form-control" required>
                                <option value="">Select a student</option>

                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}"
                                        @selected(old('user_id') == $student->id)>
                                        {{ $student->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Assessment --}}
                        <div class="col-span-12 md:col-span-4">
                            <label for="assessment_id" class="form-label">Quiz / Exam</label>

                            <select id="assessment_id" name="assessment_id" class="form-control" required>
                                <option value="">Select a Quiz or Exam</option>

                                @foreach ($assessments as $assessment)
                                    <option value="{{ $assessment->id }}"
                                        @selected(old('assessment_id') == $assessment->id)>
                                        {{ ucfirst($assessment->type) }} -
                                        {{ $assessment->title }}
                                        (Out of {{ $assessment->max_score }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Score --}}
                        <div class="col-span-8 md:col-span-2">
                            <label for="score" class="form-label">Student Score</label>

                            <input
                                id="score"
                                name="score"
                                type="number"
                                class="form-control"
                                value="{{ old('score') }}"
                                min="0"
                                step="0.01"
                                required
                            >
                        </div>

                        {{-- Submit --}}
                        <div class="col-span-4 md:col-span-2">
                            <button type="submit" class="ti-btn !text-white !bg-primary w-full">
                                Save Grade
                            </button>
                        </div>

                    </div>

                    @if ($students->isEmpty())
                        <p class="mt-3 mb-0 text-sm text-danger">
                            No students found. Add a student in User Management first.
                        </p>
                    @endif

                    @if ($assessments->isEmpty())
                        <p class="mt-3 mb-0 text-sm text-danger">
                            No Quiz or Exam records found. Create an assessment first.
                        </p>
                    @endif

                </form>
            </div>
        </div>

        {{-- Saved Grades --}}
        <div class="box">
            <div class="box-header">
                <h2 class="box-title">Student Grades Records</h2>
            </div>

            <div class="box-body">
                <div class="table-responsive">

                    <table class="table table-auto ti-custom-table table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">

                        <thead class="bg-light dark:bg-black/20">
                            <tr>
                                <th scope="col">Student</th>
                                <th scope="col">Assessment</th>
                                <th scope="col">Type</th>
                                <th scope="col">Score</th>
                                <th scope="col">Percentage</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($grades as $grade)
                                <tr>
                                    <td>
                                        {{ $grade->user?->name ?? 'User deleted' }}
                                    </td>

                                    <td>
                                        {{ $grade->assessment?->title ?? 'Assessment deleted' }}
                                    </td>

                                    <td>
                                        {{ ucfirst($grade->assessment?->type ?? '—') }}
                                    </td>

                                    <td>
                                        {{ $grade->score ?? '—' }}
                                        /
                                        {{ $grade->assessment?->max_score ?? '—' }}
                                    </td>

                                    <td>
                                        @if ($grade->score !== null && $grade->assessment && $grade->assessment->max_score > 0)
                                            {{ number_format(($grade->score / $grade->assessment->max_score) * 100, 2) }}%
                                        @else
                                            —
                                        @endif
                                    </td>

                                    <td>
                                        <form
                                            method="POST"
                                            action="{{ route('grades.destroy', $grade) }}"
                                            onsubmit="return confirm('Are you sure you want to delete this grade?')"
                                        >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="ti-btn ti-btn-sm ti-btn-danger !border-danger/20">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-textmuted">
                                        No student grades recorded yet.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>

                </div>

                <div class="mt-4">
                    {{ $grades->links() }}
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
