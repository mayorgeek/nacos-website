@extends('layouts.app')

@section('title', "Lecture Materials")

@section('header')
    <h1 class="animate__animated animate__slideInUp text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">
        Lecture Materials
    </h1>
@endsection

@section('content')
    <section>
        <div class="bg-[#f2f2f2] px-4 py-12 lg:p-20">
            <h2 class="text-center text-green-700 font-bold text-2xl capitalize">Each Level Materials</h2>
            <div class="mt-6 grid grid-cols-1 lg:grid-cols-4 gap-y-8 px-4 lg:gap-x-20 lg:px-20 py-12">
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-10 px-5 text-center">
                    <h3 class="text-base font-bold text-green-700 mb-3 uppercase">
                        <a href="https://drive.google.com/drive/folders/1kwVTj70FGjnYVGw-0_SUR7W8xNwCVOfQ?usp=sharing">
                            100 Level
                        </a>
                    </h3>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-10 px-5 text-center">
                    <h3 class="text-base font-bold text-green-700 mb-3 uppercase">
                        <a href="https://drive.google.com/drive/folders/1BZG6v7gbEjntfVxah_lDLb4750rAHlVa?usp=sharing">
                            200 Level
                        </a>
                    </h3>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-10 px-5 text-center">
                    <h3 class="text-base font-bold text-green-700 mb-3 uppercase">
                        <a href="https://drive.google.com/drive/folders/1xj3dbtt51Mu-ji9VRq_gS7Bgft9BgJHK?usp=sharing">
                            300 Level
                        </a>
                    </h3>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-10 px-5 text-center">
                    <h3 class="text-base font-bold text-green-700 mb-3 uppercase">
                        <a href="https://drive.google.com/drive/folders/1gl75tLX7CR_OGd8wmqBmtQOapZbMRzl1?usp=sharing">
                            400 Level
                        </a>
                    </h3>
                </div>
            </div>
        </div>
    </section>
@endsection
