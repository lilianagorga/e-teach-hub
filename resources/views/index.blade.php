@extends('layouts.app')
@include('users.login')
@include('users.register')
@include('partials._hero')
@include('partials._search')
@section('content')
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>e-teach-hub</title>
        </head>
        <body>
            <h1 class="text-left font-bold bg-stone-300 text-stone-700 uppercase pl-48 pr-12 py-3.5">Home</h1>
            <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
                @unless(count($subjects) == 0)
                    @foreach($subjects as $subject)
                        <x-subject :subject="$subject"/>
                    @endforeach
                @else
                    <p>No subjects found</p>
                @endunless
            </div>
            <div class="mt-6 p-4">
                {{ $subjects->links() }}
            </div>
        </body>
    </html>
@endsection
