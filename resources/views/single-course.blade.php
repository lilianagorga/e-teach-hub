@extends('layouts.app')
@section('content')
    <div class="single-card">
        <div class="container flex flex-wrap justify-between mx-auto">
            <x-single-course :course="$course" />
        </div>
    </div>
@endsection
