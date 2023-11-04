<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\UI\Listing;
use Illuminate\View\View;

class Dashboard extends Controller
{
    public function index(): View {
        $subjects = Subject::latest()->paginate(2);
        return view('index', compact('subjects'));
    }

    public function showSubject(Subject $subject): View {
        return view('subjects', ['subject' => $subject]);
    }

    public function courses(): View {
        return view('courses');
    }
}
