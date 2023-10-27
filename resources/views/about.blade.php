@extends('layouts.app')

@section('title', "About Us")

@section('header')
    <h1 class="animate__animated animate__slideInUp text-4xl lg:text-5xl text-white font-bold max-w-lg leading-snug">About Us</h1>
@endsection

@section('content')
    <div class="bg-[#f2f2f2]">
        <section>
            <div class="px-4 py-12 lg:p-20">
                <div>
                    <h3 class="text-green-700 font-bold text-center text-lg">
                        We are The Largest and Most Organised Student Body in olabisi Onabanjo University with registered members of about Five Hundred (500) in well Four (4) levels.
                    </h3>
                    <p class="mt-8 text-center font-normal text-sm">
                        Nigeria Association of Computing Students (NACOS) was founded by groups of students in July 1993 as Nigeria Association of Computer Science (NACOS) with the backing of the Nigeria Computer Society (NCS) as its parent body. <br><br>

                        We provides avenues for students (in any IT-related field) to highlight and champion issues of interest in a coordinated and organized manner. <br><br>

                        Nigeria Association of Computing Students (NACOS) was founded in July 1993 as Nigeria Association of Computer Science (NACOS) <br><br>

                        We provides avenues for students (in any IT-related field) to highlight and champion issues of interest in a coordinated and organized manner.
                    </p>
                </div>
                <div class="mt-20 bg-green-700 p-6 lg:p-10">
                    <ul class="flex items-center space-x-3">
                        <li>
                            <button
                                type="button"
                                class="border border-white bg-white px-4 py-1.5 text-green-700 font-medium text-base uppercase shadow-xl cursor-default"
                            >
                                Mission
                            </button>
                        </li>
{{--                        <li>--}}
{{--                            <button--}}
{{--                                type="button"--}}
{{--                                class="border border-white px-4 py-1.5 text-white font-medium text-base uppercase cursor-default"--}}
{{--                            >--}}
{{--                                Aims--}}
{{--                            </button>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <button--}}
{{--                                type="button"--}}
{{--                                class="border border-white px-4 py-1.5 text-white font-medium text-base uppercase cursor-default"--}}
{{--                            >--}}
{{--                                Visions--}}
{{--                            </button>--}}
{{--                        </li>--}}
                    </ul>
                    <hr class="my-6">
                    <p class="text-white text-sm font-normal">
                        Nigeria Association of Computing Students (NACOS) was founded by groups of students in July 1993 as Nigeria Association of Computer Science (NACOS) . <br> <br>

                        We provides avenues for students (in any IT-related field) to highlight and champion issues of interest in a coordinated and organized manner. <br> <br>

                        Nigeria Association of Computing Students (NACOS) was founded in July 1993 as Nigeria Association of Computer Science (NACOS)
                    </p>
                </div>
            </div>
        </section>
        <section>
            <h1 class="text-green-700 font-bold text-2xl text-center uppercase">Meet OUR Executives</h1>
            <div class="grid grid-cols-1 lg:grid-cols-4 lg:gap-x-4 gap-y-12 px-4 py-12 lg:p-20">
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Elihs.jpg" alt="Lamidi Olashile Moses">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Lamidi Olashile Moses</h3>
                        <p class="text-gray-900 font-normal text-base">President</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Peju.jpg" alt="ADESANWO Adepeju Mary">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">ADESANWO Adepeju Mary</h3>
                        <p class="text-gray-900 font-normal text-base">Vice President</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/BigAunty.jpg" alt="Adeyinka Kudoro">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adeyinka Kudoro</h3>
                        <p class="text-gray-900 font-normal text-base">General Secretary</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Victor.jpg" alt="ADEbanjo Victor Oluwasegun">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adebanjo Victor Oluwasegun</h3>
                        <p class="text-gray-900 font-normal text-base">Ass General Secretary</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Ire.jpg" alt="Odeneye Iremide Pluwateniola">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Odeneye Iremide Oluwateniola</h3>
                        <p class="text-gray-900 font-normal text-base">Financial Secretary</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Ziah.jpg" alt="Akanni Olasunkanmi">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Akanni Olasunkanmi</h3>
                        <p class="text-gray-900 font-normal text-base">Social Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Dl_Spenser.jpg" alt="Adenibi Dennis">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adenibi Dennis</h3>
                        <p class="text-gray-900 font-normal text-base">Social Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/adeemma.jpeg" alt="Adesemowo EMMANUEL">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adesemowo EMMANUEL</h3>
                        <p class="text-gray-900 font-normal text-base">ICT Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Teju.jpg" alt="Tejuosho Emmanuel Ayomide">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Tejuosho Emmanuel Ayomide</h3>
                        <p class="text-gray-900 font-normal text-base">ICT Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/moyo.jpg" alt="Udebhulu Gideon Moyosore">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Udebhulu Gideon Moyosore</h3>
                        <p class="text-gray-900 font-normal text-base">Welfare Director 1</p>
                    </div>
                </div>
                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Oriade.jpg" alt="Adeyinka Samuel Oriade">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Adeyinka Samuel Oriade</h3>
                        <p class="text-gray-900 font-normal text-base">Welfare Director 2</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Zickel.jpg" alt="Tiamiyu Olugbenga Ezekiel">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Tiamiyu Olugbenga Ezekiel</h3>
                        <p class="text-gray-900 font-normal text-base">Sport Director</p>
                    </div>
                </div>

                <div class="bg-white border border-green-700 rounded-lg">
                    <img class="w-full h-72 rounded-t-lg object-cover" src="./images/Kuku.jpg" alt="Muburak Afolabi Kuku">
                    <div class="p-5 text-center">
                        <h3 class="uppercase text-gray-900 font-bold text-base">Kuku Mubaraq Afolabi</h3>
                        <p class="text-gray-900 font-normal text-base">Public Relation Officer</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
