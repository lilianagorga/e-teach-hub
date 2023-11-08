@extends('layouts.app')
@section('content')
@include('partials._hero-subjects')
@include('partials._search-subjects')
  <div class="grid max-[1024px]:grid-cols-1 lg:grid-cols-2 max-[1024px]:gap-2 gap-4 space-y-4 max-[1024px]:space-y-0
  mx-4 justify-items-center uppercase font font-bold">
      @unless(count($subjects) == 0)
          @foreach($subjects as $subject)
              <x-subjects :subject="$subject"/>
          @endforeach
      @else
          <p>No subjects found</p>
      @endunless
  </div>
  <div class="mt-6 p-4 text-dark bg-medium rounded border-2 m-4">
      {{ $subjects->links() }}
  </div>
@endsection

