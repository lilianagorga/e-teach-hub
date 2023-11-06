@extends('layouts.app')
@section('content')
    <div class="single-card">
        <div class="container flex flex-wrap justify-between items-center mx-auto card-body">
            <x-single-course :course="$course" />
          <div class="py-5">
            <x-application-icon iconType='chalkboard-user' />
          </div>
        </div>
    </div>
@endsection
