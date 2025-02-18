@extends('layouts.app')

@section('content')
<div class = "bg-gradient-to-r from-indigo-500 to-blue-500 py-16">
<div class="container mx-auto max-w-4xl mt-8">
    <h1 class="text-3xl font-bold text-gray-800">Our Services</h1>
    <p class="mt-4 text-gray-600">We provide top-notch services to help you grow and succeed.</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-8 bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
            <h2 class="text-xl font-semibold">Web Development</h2>
            <p class="text-gray-600 mt-2">We build responsive, modern, and scalable web applications.</p>
        </div>
        <div class="p-8 bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
            <h2 class="text-xl font-semibold">Mobile Application Development</h2>
            <p class="text-gray-600 mt-2">From concept to launch, we deliver user-friendly mobile apps for both iOS and Android platforms.</p>
        </div>
        <div class="p-8 bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
            <h2 class="text-xl font-semibold">Innovative UI/UX Design</h2>
            <p class="text-gray-600 mt-2">We craft beautiful, intuitive interfaces that offer seamless experiences for your users.</p>
        </div>
        <div class="p-8 bg-white rounded-lg shadow-lg transition-transform transform hover:scale-105 hover:shadow-xl">
            <h2 class="text-xl font-semibold">CEO & Digital Marketing</h2>
            <p class="text-gray-600 mt-2">Helping businesses rank higher and gain online visibility.</p>
        </div>
    </div>
</div>
</div>
@endsection
