@extends('layouts.app')
@section('title', 'Login')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-bold mb-6">Login</h1>
        <form method="POST" action="{{ route('login') }}" class="w-full max-w-md shadow-2xl p-10">
            @csrf
            <x-forms.input name="email" label="Email" type="email" required autofocus />
            <x-forms.input name="password" label="Password" type="password" required />
            <div class="flex items-center justify-between">
                <x-forms.button label="Login" type="submit" />
                <a href="{{ url('/password.request') }}"
                   class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Forgot Password?
                </a>
            </div>
        </form>

        <div class="mt-4">
            <p class="text-gray-600 text-sm">Don't have an account? <a href="{{ url('/register') }}"  class="text-pink-500 hover:text-pink-700">Register</a></p>
        </div>
    </div>
@endsection
