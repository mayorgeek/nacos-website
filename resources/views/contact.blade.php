@extends('layouts.app')

@section('title', 'Contact Us')

@section('header')
    <h1 class="animate__animated animate__slideInUp text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">Contact Us</h1>
@endsection

@section('content')
    <section>
        <div class="bg-[#f2f2f2] px-4 py-12 lg:p-20 grid grid-cols-1 lg:grid-cols-2 lg:gap-x-28">
            <div class="max-w-lg">
                <form action="{{ route('contact.action') }}" method="POST">
                    @csrf
                    <h2 class="text-green-700 font-bold text-2xl">Get in touch</h2>
                    <h4 class="mt-2 text-green-700 font-bold text-base">Our team would love to hear from you.</h4>

                    <div class="mt-4">
                        <input
                            name="fullname"
                            type="text"
                            placeholder="Full Name"
                            class="block mb-5 w-full bg-white border border-gray-500 px-3 py-2 text-sm font-normal text-gray-700">

                        <input
                            name="email_address"
                            type="text"
                            placeholder="Email address"
                            class="block mb-5 w-full bg-white border border-gray-500 px-3 py-2 text-sm font-normal text-gray-700">

                        <input
                            name="subject"
                            type="text"
                            placeholder="Subject"
                            class="block mb-5 w-full bg-white border border-gray-500 px-3 py-2 text-sm font-normal text-gray-700">

                        <textarea
                            name="message"
                            id=""
                            cols="30"
                            rows="10"
                            placeholder="Message"
                            class="block mb-5 w-full bg-white border border-gray-500 px-3 py-2 text-sm font-normal text-gray-700"
                        ></textarea>

                        <div class="flex items-center text-sm font-medium text-gray-900 space-x-3">
                            <input type="checkbox" class="check" required>
                            <p>you agree to our privacy policy </p>
                        </div>
                    </div>

                    <button type="submit" class="mt-4 w-full bg-green-700 hover:bg-green-800 transition ease-in-out text-center font-bold text-white text-base py-2.5 shadow-lg rounded-md cursor-default">
                        Send message
                    </button>
                </form>
            </div>
            <img class="hidden lg:block h-[36rem] object-cover rounded-sm shadow-lg" src="./images/Group 39618.png" alt="">
        </div>
    </section>
@endsection
