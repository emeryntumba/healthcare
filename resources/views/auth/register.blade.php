@extends('layouts.app')
@section('title', 'Register')
@section('content')
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="text-4xl font-bold mb-6">Register</h1>
        <form method="POST" action="{{ route('register') }}" class="w-full max-w-md shadow-2xl px-10 py-5">
            @csrf
            <x-forms.input name="name" label="Name" type="text" required autofocus />
            <x-forms.input name="email" label="Email" type="email" required />
            <x-forms.input name="password" label="Password" type="password" required />
            <x-forms.input name="password_confirmation" label="Confirm Password" type="password" required />

            <div class="flex items-center justify-between">
                <x-forms.button label="Register" type="submit" />
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
