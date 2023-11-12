@extends('layouts.app')
@section('content')
@include('partials._hero-courses')
@include('partials._search-courses')
  <div class="grid {{ count($courses) > 0 ? 'lg:grid-cols-4 max-[1024px]:gap-2 gap-4' : 'grid-cols-1' }} mx-4 justify-items-center uppercase font font-bold">
      @unless(count($courses) == 0)
          @foreach($courses as $course)
              <x-courses :course="$course"/>
          @endforeach
      @else
          <p class="grid-cols-1">No courses found</p>
      @endunless
  </div>
  <div class="p-4 text-dark bg-medium rounded border-2 m-6">
      {{ $courses->links() }}
  </div>
@endsection

