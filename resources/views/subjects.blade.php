@extends('layouts.app')
@section('content')
@include('partials._hero-subjects')
@include('partials._search-subjects')
<div class="grid {{ count($subjects) > 0 ? 'lg:grid-cols-4 max-[1024px]:gap-2 gap-4' : 'grid-cols-1' }} mx-4 justify-items-center uppercase font font-bold">
      @unless(count($subjects) == 0)
          @foreach($subjects as $subject)
              <x-subjects :subject="$subject"/>
          @endforeach
      @else
          <p class="grid-cols-1">No subjects found</p>
      @endunless
  </div>
  <div class="p-4 text-dark bg-medium rounded border-2 m-6">
      {{ $subjects->links() }}
  </div>
@endsection

