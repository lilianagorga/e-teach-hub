@extends('layouts.app')
@section('content')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless($courses->isEmpty())
            @foreach($courses as $course)
                <x-courses-for-single-subject :course="$course"/>
            @endforeach
        @else
            <p>No courses found for this subject.</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $courses->links() }}
    </div>
@endsection

