@extends('layouts.app')
@section('content')
  <form method="POST" action="/users">
    @csrf
    <div class="mb-6 px-4 rounded font font-bold">
      <label for="name" class="inline-block text-lg text-dark mb-2 ">Name</label>
      <input type="text" class="border-4 border-stone-400 bg-light rounded p-2 w-full" id="name" name="name" value="{{ old('name') }}"/>
      @error('name')
      <p class="text-dark text-xs mt-1 font font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <label for="email" class="inline-block text-lg text-dark mb-2 font font-bold">Email</label>
      <input type="email" class="border-4 border-stone-400 bg-light rounded p-2 w-full" id="email" name="email" value="{{ old('email') }}"/>
      @error('email')
      <p class="text-dark text-xs mt-1 font font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <label for="password" class="inline-block text-lg text-dark mb-2 font font-bold">Password</label>
      <input type="password" class="border-4 border-medium bg-light rounded p-2 w-full" id="password" name="password" value="{{ old('password') }}"/>
      @error('password')
      <p class="text-dark text-xs mt-1 font font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <label for="password_confirmation" class="inline-block text-lg text-dark mb-2 font font-bold">Confirm Password</label>
      <input type="password" class="border-4 border-medium rounded p-2 w-full bg-light" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}"/>
      @error('password_confirmation ')
      <p class="text-dark text-xs mt-1 font font-bold">{{ $message }}</p>
      @enderror
    </div>

    <div class="mb-6 px-4 rounded">
      <button type="submit" class="bg-light text-dark rounded py-2 px-4 hover-bg-extra-light font font-bold">Sign Up</button>
    </div>

    <div class="mt-8 px-4 rounded">
      <p class="font font-bold px-2 text-dark text-lg">Already have an account?
        <a href="/login" class="text-dark font font-bold">Login</a>
      </p>
    </div>
  </form>
@endsection

