@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md mt-8 bg-white p-6 shadow-md rounded-lg">
    <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name Field -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Name</label>
            <input type="text" name="name" id="name" required class="w-full border-gray-300 rounded-lg p-2">
            @error('name')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Field -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" required class="w-full border-gray-300 rounded-lg p-2">
            @error('email')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Field -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required class="w-full border-gray-300 rounded-lg p-2">
            @error('password')
                <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password Field -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required class="w-full border-gray-300 rounded-lg p-2">
        </div>

        <!-- Register Button -->
        <button type="submit" class="w-full bg-blue-600 text-black py-2 rounded-lg hover:bg-blue-700">
            Register
        </button>
    </form>
</div>
@endsection
