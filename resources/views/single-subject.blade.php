@extends('layouts.app')
@section('content')
    <div class="single-card">
        <div class="container flex flex-wrap justify-between mx-auto">
          <x-single-subject :subject="$subject" />
        </div>
    </div>
@endsection
