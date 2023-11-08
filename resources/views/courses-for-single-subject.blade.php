@extends('layouts.app')
@section('content')
    <div class="lg:grid">
      <div class="lg-grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless($courses->isEmpty())
          @foreach($courses as $course)
            <x-courses-for-single-subject :course="$course"/>
          @endforeach
      </div>
        @else
          <div class="card mt-20 lg-grid lg:grid-cols-1 text-center rounded font-bold font uppercase text-dark">
            <p class="px-10 py-8">Seems there are no courses for this subject.</p>
            <p class="px-10 pb-4">Hurry up to search other amazing courses in our teach hub</p>
          </div>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $courses->links() }}
    </div>
@endsection

