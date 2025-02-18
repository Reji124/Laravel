@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-8">
                <div class="flex items-center justify-between">
                    <h3 class="text-3xl font-extrabold text-gray-900">
                        @auth
                            Welcome, {{ Auth::user()->name }}! 🎉
                        @else
                            Welcome to the Dashboard!
                        @endauth
                    </h3>
                </div>

                <p class="mt-4 text-gray-700 text-lg">
                    @auth
                        You're successfully logged in. Explore your dashboard below.
                    @else
                        You are currently browsing as a guest. Log in to access all features.
                    @endauth
                </p>

                <div class="mt-6 p-5 bg-blue-50 border-l-4 border-blue-500 text-blue-800 rounded-lg">
                    <p class="text-lg">
                        @auth
                            Manage your account, check reports, and customize settings effortlessly.
                        @else
                            Sign up or log in to unlock full dashboard functionality.
                        @endauth
                    </p>
                </div>

                <div class="mt-8 flex space-x-4">
                    @auth
                        <a href="{{ route('profile.edit') }}"
                           class="px-5 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                            Manage Profile
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit"
                                    class="px-5 py-3 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 transition">
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                           class="px-5 py-3 bg-green-600 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 transition">
                            Log In
                        </a>

                        <a href="{{ route('register') }}"
                           class="px-5 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection

