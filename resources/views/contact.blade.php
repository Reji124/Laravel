@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-3xl mt-12 p-8 bg-gradient-to-br from-blue-50 to-white shadow-xl rounded-lg border border-gray-300">
    <h1 class="text-4xl font-extrabold text-blue-700 text-center">Get in Touch</h1>
    <p class="mt-3 text-lg text-gray-700 text-center">We'd love to hear from you! Fill out the form below and we'll get back to you soon.</p>

    <div id="success-message" class="hidden bg-green-100 border-l-4 border-green-500 text-green-800 p-4 mt-4 rounded-lg text-center">
        Your message has been sent successfully!
    </div>

    <form id="contact-form" class="mt-6 space-y-5">
        @csrf
        <div>
            <label for="name" class="block text-lg font-medium text-gray-900">Your Name</label>
            <input type="text" id="name" name="name" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm bg-white">
        </div>
        <div>
            <label for="topic" class="block text-lg font-medium text-gray-900">Your Main Concern</label>
            <input type="text" id="topic" name="topic" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm bg-white">
        </div>
        <div>
            <label for="message" class="block text-lg font-medium text-gray-900">Message</label>
            <textarea id="message" name="message" rows="4" required class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 shadow-sm bg-white"></textarea>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white text-lg font-semibold py-3 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
            Send Message
        </button>
    </form>
</div>

<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); 
        document.getElementById("success-message").classList.remove("hidden"); 
        this.reset(); 
    });
</script>
@endsection
