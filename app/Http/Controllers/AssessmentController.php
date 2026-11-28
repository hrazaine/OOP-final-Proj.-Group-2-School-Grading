<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AssessmentController extends Controller
{
    public function index(string $type): View
    {
        $type = ucfirst($type);
        $assessments = Assessment::with('user')
            ->where('type', $type)
            ->latest('assessment_date')
            ->latest('id')
            ->get();
        $users = User::orderBy('name')->get();

        return view('assessments.index', compact('type', 'assessments', 'users'));
    }

    public function store(Request $request, string $type): RedirectResponse
    {
        $type = ucfirst($type);
        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'title' => ['required', 'string', 'max:255'],
            'score' => ['nullable', 'numeric', 'min:0', 'lte:max_score'],
            'max_score' => ['required', 'numeric', 'gt:0'],
            'assessment_date' => ['nullable', 'date'],
        ]);

        Assessment::create([...$validated, 'type' => $type]);

        return redirect()
            ->route('assessments.index', ['type' => strtolower($type)])
            ->with('success', $type.' added successfully.');
    }

    public function destroy(Assessment $assessment): RedirectResponse
    {
        $type = strtolower($assessment->type);
        $assessment->delete();

        return redirect()
            ->route('assessments.index', ['type' => $type])
            ->with('success', ucfirst($type).' deleted successfully.');
    }
}
