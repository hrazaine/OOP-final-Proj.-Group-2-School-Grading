<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\Grade;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GradeController extends Controller
{
    public function index()
    {
        $grades = Grade::with(['user', 'assessment'])
            ->latest()
            ->paginate(15);

        $students = User::where('role', 'student')
            ->orderBy('name')
            ->get();

        $assessments = Assessment::orderBy('title')->get();

        return view('grades.index', compact(
            'grades',
            'students',
            'assessments'
        ));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'assessment_id' => ['required', 'exists:assessments,id'],
            'user_id' => [
                'required',
                'exists:users,id',
                Rule::unique('grades')
                    ->where('assessment_id', $request->assessment_id),
            ],
            'score' => ['nullable', 'numeric', 'min:0'],
        ]);

        $assessment = Assessment::findOrFail(
            $validated['assessment_id']
        );

        if (
            $validated['score'] !== null &&
            $validated['score'] > $assessment->max_score
        ) {
            return back()
                ->withErrors([
                    'score' => 'The score cannot exceed the maximum score.',
                ])
                ->withInput();
        }

        Grade::create($validated);

        return redirect()
            ->route('grades.index')
            ->with('success', 'Student grade saved successfully!');
    }

    public function destroy(Grade $grade)
    {
        $grade->delete();

        return redirect()
            ->route('grades.index')
            ->with('success', 'Grade deleted successfully!');
    }
}
