@extends('layouts.app')
@section('content')
@include('partials._hero-courses')
@include('partials._search-courses')
  <div class="grid max-[1024px]:grid-cols-1 lg:grid-cols-2 max-[1024px]:gap-2 gap-4 space-y-4 max-[1024px]:space-y-0
  mx-4 justify-items-center uppercase font font-bold">
      @unless(count($courses) == 0)
          @foreach($courses as $course)
              <x-courses :course="$course"/>
          @endforeach
      @else
          <p>No courses found</p>
      @endunless
  </div>
  <div class="mt-6 p-4 text-dark bg-medium rounded border-2 m-4">
      {{ $courses->links() }}
  </div>
@endsection

