<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use App\Models\UI\Listing;
use Illuminate\View\View;

class Dashboard extends Controller
{
    public function index(): View {
        return view('index');
    }

    public function showSubjects(): View {
        $subjects = Subject::latest()->paginate(2);
        return view('subjects', compact('subjects'));
    }

    public function showCourses(): View {
        $courses = Course::latest()->paginate(2);
        return view('courses', compact('courses'));
    }

    public function showSingleSubject(Subject $subject): View {
        return view('single-subject', compact('subject'));
    }

    public function showCoursesForSingleSubject(Subject $subject): View {
        $courses = Course::where('subject_id', $subject->id)->latest()->paginate(2);
        return view('courses-for-single-subject', compact(['subject', 'courses']));
    }

    public function showSingleCourse(Course $course): View {
        return view('single-course', compact('course'));
    }
}
