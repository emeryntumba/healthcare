@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-bold mb-6">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-sm">
            @csrf
            <div class="mb-4">
                <label for="name" class="block  text-sm font-bold mb-2">Name:</label>
                <input type="text" name="name" id="name" required autofocus
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror"
                       value="{{ old('name') }}">
                @error('name')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block  text-sm font-bold mb-2">Email:</label>
                <input type="email" name="email" id="email" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-red-500 @enderror"
                       value="{{ old('email') }}">
                @error('email')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block  text-sm font-bold mb-2">Password:</label>
                <input type="password" name="password" id="password" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password') border-red-500 @enderror">
                @error('password')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block  text-sm font-bold mb-2">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('password_confirmation') border-red-500 @enderror">
                @error('password_confirmation')
                <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                        class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Register
                </button>
                <a href="{{ url('/login') }}"
                   class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Already have an account?
                </a>
            </div>
        </form>
        <div class="mt-4">
            <p class="text-gray-600 text-sm">Already have an account? <a href="{{ url('/login') }}"  class="text-pink-500 hover:text-pink-700">Login</a></p>
        </div>
    </div>
@endsection
