@extends('layouts.app')
@section('content')
  <div class="container flex justify-center mx-auto">
    <a href="/subjects" class="inline-block text-dark font font-bold my-8"><i class="fa-solid fa-arrow-left pr-1"></i>Back</a>
  </div>
  <div class="container flex flex-wrap justify-center mx-auto ">
    <x-single-subject :subject="$subject" />
  </div>
@endsection
