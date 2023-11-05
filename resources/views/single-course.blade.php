@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <x-single-course :course="$course" />
        </div>
    </div>
@endsection
