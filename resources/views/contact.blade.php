@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-4xl mt-8">
    <h1 class="text-3xl font-bold text-gray-800">Contact Us</h1>
    <p class="mt-4 text-gray-600">We would love to hear from you! Reach out to us via the form below.</p>

    <!-- Success message (hidden by default) -->
    <div id="success-message" class="hidden bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mt-4 rounded">
        Your message has been sent successfully!
    </div>

    <form id="contact-form" class="mt-6 bg-white p-6 shadow rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Your Name</label>
            <input type="text" id="name" name="name" required class="w-full border-gray-300 rounded-lg p-2">
        </div>
        <div class="mb-4">
            <label for="topic" class="block text-gray-700">Your Main Concern</label>
            <input type="text" id="topic" name="topic" required class="w-full border-gray-300 rounded-lg p-2">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4" required class="w-full border-gray-300 rounded-lg p-2"></textarea>
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-black rounded hover:bg-blue-700">
            Send Message
        </button>
    </form>
</div>

<script>
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent actual form submission
        document.getElementById("success-message").classList.remove("hidden"); // Show success message
        this.reset(); // Clear form inputs
    });
</script>
@endsection
