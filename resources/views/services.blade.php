
@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-4xl mt-8">
    <h1 class="text-3xl font-bold text-gray-800">Our Services</h1>
    <p class="mt-4 text-gray-600">We provide top-notch services to help you grow and succeed.</p>

    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">Web Development</h2>
            <p class="text-gray-600 mt-2">We build responsive, modern, and scalable web applications.</p>
        </div>
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">Mobile App Development</h2>
            <p class="text-gray-600 mt-2">Custom mobile apps tailored to your needs for iOS and Android.</p>
        </div>
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">UI/UX Design</h2>
            <p class="text-gray-600 mt-2">Creating user-friendly and visually appealing designs.</p>
        </div>
        <div class="p-6 bg-white shadow rounded-lg">
            <h2 class="text-xl font-semibold">SEO & Digital Marketing</h2>
            <p class="text-gray-600 mt-2">Helping businesses rank higher and gain online visibility.</p>
        </div>
    </div>
</div>
@endsection
