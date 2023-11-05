@extends('layouts.app')
@include('partials._hero-courses')
@include('partials._search-courses')
@push('title')
    <title>courses</title>
@endpush
@section('content')
    <h1 class="text-end font-bold bg-stone-300 text-stone-700 uppercase py-3.5 pl-6 pr-44">Courses</h1>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($courses) == 0)
            @foreach($courses as $course)
                <x-courses :course="$course"/>
            @endforeach
        @else
            <p>No courses found</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $courses->links() }}
    </div>
@endsection
