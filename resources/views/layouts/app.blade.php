<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Nigeria Association of Computing Students (NACOS) is the Umbrella body for students studying Computer Science, Computer Engineering, Information Systems, Cybersecurity and all IT related courses in Nigeria.">

    <title>@yield('title') - NACOS_OOU</title>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Animate CSS -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
<header>
    <!-- Jumbotron -->
    <div
        class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center text-gray-100"
        style="background-image: url('./images/Rectangle_2.png'); height: 500px">
        <div
            class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
            style="background-color: rgba(0, 0, 0, 0.1); background-size: cover;">
            <div class="">
                <div class="flex items-center justify-between px-4 lg:px-10 py-2">
                    <div class="flex items-center">
                        <img class="w-10" src="./images/nacos_logo.png" alt="">
                        <p>NACOS_OOU</p>
                    </div>
                    <nav>
                        <ul class="hidden lg:flex items-center space-x-8">
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('home')}}">Home</a></li>
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('about')}}">About</a></li>
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('lecture_materials')}}">Lecture Materials</a></li>
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('events')}}">Events</a></li>
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('gallery')}}">Gallery</a></li>
                            <li><a class="hover:text-white hover:underline transition ease-in-out underline-offset-4" href="{{route('contact')}}">Contact</a></li>
                        </ul>

                        <!-- Mobile Menu Button -->
                        <button id="mobile-menu-btn-open" type="button" class="lg:hidden cursor-default" onclick="toggleMobileMenu()">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>

                        <!-- Mobile Menu -->
                        <div id="mobile-menu" class="animate__animated hidden h-screen absolute z-50 top-0 left-0 right-0 bottom-0 bg-white p-12 text-gray-900">
                            <button
                                id="mobile-menu-btn-close"
                                type="button"
                                class="hidden cursor-default inline-flex items-center space-x-2 w-fit text-green-600"
                                onclick="toggleMobileMenu()"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                <p>Close</p>
                            </button>
                            <ul class="mt-8 space-y-6">
                                <li><a class="" href="{{route('home')}}">Home</a></li>
                                <li><a class="" href="{{route('about')}}">About</a></li>
                                <li><a class="" href="{{route('lecture_materials')}}">Lecture Materials</a></li>
                                <li><a class="" href="{{route('events')}}">Events</a></li>
                                <li><a class="" href="{{route('gallery')}}">Gallery</a></li>
                                <li><a class="" href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <hr>

                <div class="flex flex-col h-full items-center justify-center text-center pt-36 px-4">
                    @yield('header')
                </div>
            </div>
        </div>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-20 gap-y-10 lg:gap-y-0 px-7 lg:px-14 py-7 bg-black text-gray-100">
        <div class="">
            <h2 class="text-white text-xl font-bold">NACOS - OOU</h2>
            <p class="mt-2 font-light text-sm leading-7 tracking-wide">
                Nigeria Association of Computing
                Students (NACOS) is the Umbrella body for
                students studying Computer Science,
                Computer Engineering, Information
                Systems, Cybersecurity and all IT related
                courses in Nigeria.
            </p>
        </div>
        <div class="">
            <h3 class="text-white text-base font-bold">
                Get In Touch
            </h3>
            <ul class="mt-2">
                <li class="flex items-center space-x-2">
                    <div>
                        <img src="./images/location.png">
                    </div>
                    <a href="https://www.oouagoiwoye.edu.ng/">Olabisi Onabanjo University Ago-Iwoye Ogun State</a>
                </li>
                <li class="mt-2 flex items-center space-x-2">
                    <div>
                        <img src="./images/mail.png">
                    </div>
                    <a href="mailto:support@nacosoou.com.ng">support@nacosoou.com.ng</a>
                </li>
                <li class="mt-2 flex items-center space-x-2">
                    <div>
                        <img src="./images/phone.png">
                    </div>
                    <a href="tel:+2349114340805">+2349114340805</a>
                </li>
            </ul>
        </div>
        <div class="">
            <h3 class="text-white text-base font-bold">
                Quick Links
            </h3>
            <ul class="mt-2 space-y-2">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('about') }}">Executives</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
            </ul>
        </div>
    </div>
</footer>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
