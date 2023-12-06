<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!--Background Color-->
        <div class="w-screen h-screen relative bg-[#2D349A]">
        <!--Background Photo-->
            <img class="w-[1304px] h-screen left-[616px] top-[-5px] absolute" src="{{ asset('css/images/image 2.png') }}" alt="Background"/>
            <!--Form Container-->
            <div class="w-[760.57px] h-[977.88px] left-[74px] top-[69px] absolute">
                <div class="w-[760.57px] h-[977.88px] left-0 top-0 absolute bg-white rounded-xl">
                    <div class="w-96 h-96 left-[131.13px] top-[229.80px] absolute rounded-xl flex-col justify-start items-start gap-12 inline-flex">
                        <div class="flex-col justify-start items-center gap-11 flex">
                            <!--Headings-->
                            <div class="flex-col justify-start items-center gap-7 flex">
                            <div class="w-96 text-[#2D6B9A] text-6xl font-bold font-['Inter'] leading-9">PLM Module</div>
                            <div class="w-96 text-[#2D6B9A] text-4xl font-medium font-['Inter'] leading-9">Sign In</div>
                        </div>
                        <div class="flex-col justify-start items-center gap-6 flex">
                            <div class="flex-col justify-start items-start gap-6 flex">
                                <!--Login Form-->
                                <div id="content">
                                    @yield('login')
                                </div>
                                <div class="flex-col justify-start items-start gap-5 flex">
                                    <div class="justify-start items-center gap-5 inline-flex">
                                        <div class="w-6 h-6 relative">
                                            <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#4F74BB] dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-white dark:border-gray-600">
                                        </div>
                                        <div class="w-72 text-zinc-900 text-base font-light font-['Inter'] leading-9">Keep me signed in</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Login With Microsoft -->
                            <div class="flex-col justify-center items-center flex relative">
                                <div class="p-2.5 w-96 bg-white justify-center items-center gap-2.5 inline-flex">
                                    <div class="w-36 text-center text-[#999DA3] text-lg font-normal font-['Inter'] leading-normal relative z-10 bg-white">or sign in with</div>
                                    <div class="line"></div>
                                </div>
                            </div>
                            <div class="w-96 h-14 flex items-center justify-center bg-[#E4E7EB] text-[#4B5768] rounded hover:bg-[#2C56A6] hover:text-[#EFF0FF]">
                                <img class="w-6 h-7 left-[124.89px] top-[16.24px]" src="{{ asset('css/images/image 1.png') }}" alt="Microsoft Logo" />
                                <button class="text-center text-xl font-normal font-['Inter'] leading-7 ml-4">Continue with Microsoft</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Images -->
                <div class="w-96 h-20 left-[131.13px] top-[102.41px] absolute">
                    <img class="w-20 h-20 left-0 top-0 absolute rounded-xl" src="{{ asset('css/images/image 5.png') }}" alt="PLM Logo" />
                    <img class="w-80 h-14 left-[99.91px] top-[17.48px] absolute" src="{{ asset('css/images/image 4.png') }}" alt="PLM Header" />
                </div>
            </div>
        </div>
    </body>
</html>