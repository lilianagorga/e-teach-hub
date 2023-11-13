@extends('layouts.app')
@section('content')
  <div class="container flex justify-center mx-auto">
    <a href="/courses" class="inline-block text-dark my-8 font-bold"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
  </div>
  <div class="container flex flex-wrap justify-center mx-auto ">
      <x-single-course :course="$course" />
  </div>
@endsection
