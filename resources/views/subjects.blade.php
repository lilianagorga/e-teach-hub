@extends('layouts.app')
@push('title')
  <title>subjects</title>
@endpush
@section('content')
@include('partials._hero-subjects')
@include('partials._search-subjects')
  <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 justify-items-center uppercase font-nunito font-bold">
      @unless(count($subjects) == 0)
          @foreach($subjects as $subject)
              <x-subjects :subject="$subject"/>
          @endforeach
      @else
          <p>No subjects found</p>
      @endunless
  </div>
  <div class="mt-6 p-4 text-stone-700 bg-stone-400 rounded border-2 m-4">
      {{ $subjects->links() }}
  </div>
@endsection

