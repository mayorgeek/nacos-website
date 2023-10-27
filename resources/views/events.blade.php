@extends('layouts.app')

@section('title', "Our Events")

@section('header')
    <h1 class="animate__animated animate__slideInUp text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">Our Events</h1>
@endsection

@section('content')
    <section>
        <div class="bg-[#f2f2f2] px-4 py-12 lg:p-20">
            <h2 class="text-green-700 font-bold text-2xl text-center uppercase">Past/Upcoming Events</h2>
            <div class="mt-6 grid grid-cols-1 lg:grid-cols-3 lg:gap-x-16 gap-y-12 px-4 py-12">
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/powerbi.png" alt="DSN AI Summit">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">DSN AI Summit</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/events/oldschoolday.JPG" alt="Old school day">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">Old school day</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/events/departmental_cup.jpeg" alt="Departmental Cup">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">Departmental Cup</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/events/cmp_week.jpeg" alt="CMP Week">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">CMP Week</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/events/paint_and_sip.jpeg" alt="Paint and Sip">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">Paint and Sip</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                    <img src="./images/events/freshers_night.jpeg" alt="Freshers Night">
                    <div class="p-4">
                        <h2 class="text-gray-900 font-bold text-base">Freshers Night</h2>
                        <p class="mt-3 font-normal text-gray-900 text-sm">
                            DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
