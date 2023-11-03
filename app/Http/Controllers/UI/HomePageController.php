<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use App\Models\UI\Listing;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View {
        return view('index', [
            'subjects' => Subject::latest()->paginate(2)
        ]);
    }

    public function subjects(): View {
        return view('subjects');
    }

    public function courses(): View {
        return view('courses');
    }
}
