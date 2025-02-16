@extends('layouts.app')

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-2xl font-bold text-gray-900">
                    @auth
                        Welcome, {{ Auth::user()->name }}! 🎉
                    @else
                        Welcome to the Dashboard!
                    @endauth
                </h3>

                <p class="mt-2 text-gray-600">
                    @auth
                        You're logged in successfully.
                    @else
                        You are currently browsing as a guest. Log in to access all features.
                    @endauth
                </p>

                <div class="mt-6 p-4 bg-blue-100 border-l-4 border-blue-500 text-blue-700 rounded">
                    <p>
                        @auth
                            Explore your dashboard to manage your account, check reports, and customize settings.
                        @else
                            Sign up or log in to unlock all dashboard features.
                        @endauth
                    </p>
                </div>

                <div class="mt-8">
                    @auth
                        <a href="{{ route('profile.edit') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Manage Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                                Log Out
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                            Log In
                        </a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 ml-2">
                            Register
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
@endsection
