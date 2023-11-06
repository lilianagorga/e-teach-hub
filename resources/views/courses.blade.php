@extends('layouts.app')
@push('title')
    <title>courses</title>
@endpush
@section('content')
@include('partials._hero-courses')
@include('partials._search-courses')
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 justify-items-center uppercase font-nunito font-bold">
      @unless(count($courses) == 0)
          @foreach($courses as $course)
              <x-courses :course="$course"/>
          @endforeach
      @else
          <p>No courses found</p>
      @endunless
  </div>
  <div class="mt-6 p-4 text-stone-700 bg-stone-400 rounded border-2 m-4">
      {{ $courses->links() }}
  </div>
@endsection

