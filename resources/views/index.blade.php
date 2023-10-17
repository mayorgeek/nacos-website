@extends('layouts.app')

@section('title', "Nigeria Association Of Computing Students Olabisi Onabanjo University Chapter")

@section('header')
    <div class="animate__animated animate__slideInUp">
        <h1 class="text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">Nigeria Association Of Computing Students.</h1>
        <p class="mt-4 text-medium text-white text-base">Olabisi Onabanjo University Chapter</p>
    </div>
@endsection

@section('content')
    <div class="bg-[#f2f2f2]">
        <section>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-y-8 px-4 lg:gap-x-8 lg:px-28 py-28">
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-8 px-6 text-center">
                    <img class="mx-auto mb-6" src="./images/computer.png" alt="">
                    <h3 class="text-xs font-bold text-green-700 mb-3">Advanced Computing</h3>
                    <p class="text-xs font-normal text-green-700">
                        We Develop, We Create, We Build Capacity, providing access to technical contents
                    </p>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-8 px-6 text-center">
                    <img class="mx-auto mb-6" src="./images/computer.png" alt="">
                    <h3 class="text-xs font-bold text-green-700 mb-3">Advanced Computing</h3>
                    <p class="text-xs font-normal text-green-700">
                        We Develop, We Create, We Build Capacity, providing access to technical contents
                    </p>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-8 px-6 text-center">
                    <img class="mx-auto mb-6" src="./images/computer.png" alt="">
                    <h3 class="text-xs font-bold text-green-700 mb-3">Advanced Computing</h3>
                    <p class="text-xs font-normal text-green-700">
                        We Develop, We Create, We Build Capacity, providing access to technical contents
                    </p>
                </div>
                <div class="bg-white shadow-lg shadow-gray-500 rounded-xl py-8 px-6 text-center">
                    <img class="mx-auto mb-6" src="./images/computer.png" alt="">
                    <h3 class="text-xs font-bold text-green-700 mb-3">Advanced Computing</h3>
                    <p class="text-xs font-normal text-green-700">
                        We Develop, We Create, We Build Capacity, providing access to technical contents
                    </p>
                </div>
            </div>
        </section>
        <section>
            <h1 class="text-green-700 font-bold text-2xl text-center">What We Do</h1>
            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-14 gap-y-12 lg:gap-y-0 py-20 px-4 lg:px-40">
                <div class="space-y-12">
                    <div>
                        <img class="" src="./images/Mini-computer.png" alt="">
                        <h3 class="text-green-700 font-bold text-base mt-4">Advanced Computing</h3>
                        <p class="text-green-700 text-xs mt-2">
                            We Develop, We Create, We Build Capacity, providing access to technical contents
                        </p>
                    </div>
                    <div>
                        <img class="" src="./images/Mini-computer.png" alt="">
                        <h3 class="text-green-700 font-bold text-base mt-4">Advanced Computing</h3>
                        <p class="text-green-700 text-xs mt-2">
                            We Develop, We Create, We Build Capacity, providing access to technical contents
                        </p>
                    </div>
                </div>
                <img class="w-full" src="./images/Executives.jpg" alt="">
                <div class="space-y-12">
                    <div>
                        <img class="" src="./images/Mini-computer.png" alt="">
                        <h3 class="text-green-700 font-bold text-base mt-4">Advanced Computing</h3>
                        <p class="text-green-700 text-xs mt-2">
                            We Develop, We Create, We Build Capacity, providing access to technical contents
                        </p>
                    </div>
                    <div>
                        <img class="" src="./images/Mini-computer.png" alt="">
                        <h3 class="text-green-700 font-bold text-base mt-4">Advanced Computing</h3>
                        <p class="text-green-700 text-xs mt-2">
                            We Develop, We Create, We Build Capacity, providing access to technical contents
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h1 class="text-green-700 font-bold uppercase text-center text-2xl">Our Leadership</h1>
            <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-x-4 gap-y-12 px-4 py-12 lg:p-20">
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Elihs.jpg" alt="Lamidi Olashile Moses">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Lamidi Olashile Moses</h3>
                        <p class="text-gray-900 font-normal text-base">President</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Peju.jpg" alt="ADESANWO Adepeju Mary">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">ADESANWO Adepeju Mary</h3>
                        <p class="text-gray-900 font-normal text-base">Vice President</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/BigAunty.jpg" alt="Adeyinka Kudoro">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adeyinka Kudoro</h3>
                        <p class="text-gray-900 font-normal text-base">General Secretary</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Victor.jpg" alt="ADEbanjo Victor Oluwasegun">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">ADEbanjo Victor Oluwasegun</h3>
                        <p class="text-gray-900 font-normal text-base">Ass General Secretary</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Ire.jpg" alt="Odeneye Iremide Pluwateniola">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Odeneye Iremide Pluwateniola</h3>
                        <p class="text-gray-900 font-normal text-base">Financial Secretary</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Ziah.jpg" alt="Akanni Olasunkanmi">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Akanni Olasunkanmi</h3>
                        <p class="text-gray-900 font-normal text-base">Social Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Dl_Spenser.jpg" alt="Adenibi Dennis">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adenibi Dennis</h3>
                        <p class="text-gray-900 font-normal text-base">Social Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/adeemma.jpeg" alt="Adesemowo EMMANUEL">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adesemowo EMMANUEL</h3>
                        <p class="text-gray-900 font-normal text-base">ICT Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Teju.jpg" alt="Tejuosho Emmanuel Ayomide">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Tejuosho Emmanuel Ayomide</h3>
                        <p class="text-gray-900 font-normal text-base">ICT Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/moyo.jpg" alt="Udebhulu Gideon Moyosore">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Udebhulu Gideon Moyosore</h3>
                        <p class="text-gray-900 font-normal text-base">Welfare Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Oriade.jpg" alt="Adeyinka Samuel Oriade">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adeyinka Samuel Oriade</h3>
                        <p class="text-gray-900 font-normal text-base">Welfare Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Zickel.jpg" alt="Tiamiyu Olugbenga Ezekiel">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Tiamiyu Olugbenga Ezekiel</h3>
                        <p class="text-gray-900 font-normal text-base">Sport Director</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-76 lg:h-72 rounded-t-lg object-cover" src="./images/Kuku.jpg" alt="Muburak Afolabi Kuku">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Muburak Afolabi Kuku</h3>
                        <p class="text-gray-900 font-normal text-base">Public Relation Officer</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="py-20 px-4 lg:p-20">
                <h1 class="text-green-700 font-bold text-2xl uppercase text-center">Testimonials</h1>

                <div class="my-16 grid grid-cols-1 lg:grid-cols-3 lg:gap-x-28 gap-y-10 lg:gap-y-0">
                    <div class="bg-white shadow-lg shadow-gray-400 rounded-lg p-6 space-y-3 border-b-2 border-green-800">
                        <img src="./images/Quote.png" alt="" class="w-6">
                        <p class="text-xs font-normal text-green-700">
                            With NACOS I have made more connections and built a
                            very good network to leverage on anytime
                        </p>
                        <h3 class="text-green-700 text-center text-xs font-black">Iremide Odeneye</h3>
                        <blockquote class="text-xs text-center text-green-700">200 level</blockquote>
                    </div>
                    <div class="bg-white shadow-lg shadow-gray-400 rounded-lg p-6 space-y-3 border-b-2 border-green-800">
                        <img src="./images/Quote.png" alt="" class="w-6">
                        <p class="text-xs font-normal text-green-700">
                            With NACOS I have made more connections and built a
                            very good network to leverage on anytime
                        </p>
                        <h3 class="text-green-700 text-center text-xs font-black">Iremide Odeneye</h3>
                        <blockquote class="text-xs text-center text-green-700">200 level</blockquote>
                    </div>
                    <div class="bg-white shadow-lg shadow-gray-400 rounded-lg p-6 space-y-3 border-b-2 border-green-800">
                        <img src="./images/Quote.png" alt="" class="w-6">
                        <p class="text-xs font-normal text-green-700">
                            With NACOS I have made more connections and built a
                            very good network to leverage on anytime
                        </p>
                        <h3 class="text-green-700 text-center text-xs font-black">Iremide Odeneye</h3>
                        <blockquote class="text-xs text-center text-green-700">200 level</blockquote>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="px-4 lg:p-20">
                <h2 class="text-green-700 font-bold text-2xl text-center uppercase">Past/Upcoming Events</h2>
                <div class="my-10 grid grid-cols-1 lg:grid-cols-3 lg:gap-x-20 gap-y-12 lg:gap-y-0 lg:px-28 py-12">
                    <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                        <img src="./images/powerbi.png" alt="">
                        <div class="p-4">
                            <h2 class="text-gray-900 font-bold text-base">DSN AI Summit</h2>
                            <p class="mt-3 font-normal text-gray-900 text-sm">
                                DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                            </p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                        <img src="./images/powerbi.png" alt="">
                        <div class="p-4">
                            <h2 class="text-gray-900 font-bold text-base">DSN AI Summit</h2>
                            <p class="mt-3 font-normal text-gray-900 text-sm">
                                DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                            </p>
                        </div>
                    </div>
                    <div class="bg-white shadow-lg shadow-gray-500 rounded-t-lg">
                        <img src="./images/powerbi.png" alt="">
                        <div class="p-4">
                            <h2 class="text-gray-900 font-bold text-base">DSN AI Summit</h2>
                            <p class="mt-3 font-normal text-gray-900 text-sm">
                                DSN AI bootcamp, an all-expenses-paid learning bootcamp that builds Africa s...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
