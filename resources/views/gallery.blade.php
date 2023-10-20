@extends('layouts.app')

@section('title', "Gallery")

@section('header')
    <h1 class="animate__animated animate__slideInUp text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">Photo Speaks</h1>
@endsection

@section('content')
    <section class="bg-[#f2f2f2] px-4 py-12 lg:p-20">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/00.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/01.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/02.JPG" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/03.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/04.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/05.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/06.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/07.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/08.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/09.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/10.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/11.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/12.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/13.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/14.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/15.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/16.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/17.jpeg" alt="">
            <img class="w-full h-72 object-cover rounded-sm" src="./images/gallery/18.jpeg" alt="">
        </div>
    </section>
@endsection
