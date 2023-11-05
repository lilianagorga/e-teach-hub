@extends('layouts.app')
@include('partials._hero-subjects')
@include('partials._search-subjects')
@push('title')
    <title>subjects</title>
@endpush
@section('content')
    <h1 class="text-center font-bold bg-stone-300 text-stone-700 uppercase py-3.5">Subjects</h1>
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless(count($subjects) == 0)
            @foreach($subjects as $subject)
                <x-subjects :subject="$subject"/>
            @endforeach
        @else
            <p>No subjects found</p>
        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $subjects->links() }}
    </div>
@endsection
