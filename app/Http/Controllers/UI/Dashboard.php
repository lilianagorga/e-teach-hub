<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\View\View;

class Dashboard extends Controller
{
    public function index(): View {
        return view('index');
    }

    public function showSubjects(Request $request): View {
      $subjectName = $request->input('search');

      $query = Subject::query();

      if ($subjectName) {
        $query->where('name', 'like', '%' . $subjectName . '%');
      }

      $subjects = $query->paginate(4);

      return view('subjects', compact('subjects'));
    }

    public function showCourses(Request $request): View {
      $courseName = $request->input('search');

      $query = Course::query();

      if ($courseName) {
        $query->where('name', 'like', '%' . $courseName . '%');
      }

      $courses = $query->paginate(4);
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
