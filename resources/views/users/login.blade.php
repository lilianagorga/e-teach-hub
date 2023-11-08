@extends('layouts.app')
@section('content')
  <form method="POST" action="/users/authenticate">
    @csrf

    <div class="mb-6 px-4 rounded">
      <label for="email" class="inline-block text-lg text-stone-700 mb-2 font-nunito font-bold">Email</label>
      <input type="email" class="border-4 border-stone-400 rounded p-2 w-full bg-stone-300" id="email" name="email" value="{{ old('email') }}"/>
      @error('email')
      <p class="text-stone-700 text-xs mt-1 font-nunito font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <label for="password" class="inline-block text-lg text-stone-700 mb-2 font-nunito font-bold">Password</label>
      <input type="password" class="border-4 border-stone-400 rounded p-2 w-full bg-stone-300" id="password" name="password" value="{{ old('password') }}"/>
      @error('password')
      <p class="text-stone-700 text-xs mt-1 font-nunito font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <button type="submit" class="bg-stone-400 text-stone-700 rounded py-2 px-4 hover:bg-stone-100 font-nunito font-bold">Sign In</button>
    </div>

    <div class="mt-8 px-4 rounded">
      <p class="font-nunito font-bold px-2 text-stone-700 text-lg">Don't have an account?
        <a href="/register" class="text-stone-700 font-nunito font-bold">Register</a>
      </p>
    </div>
  </form>
@endsection

