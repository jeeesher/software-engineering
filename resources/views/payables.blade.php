<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Payables</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) 
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Page Heading -->
        <div class="w-[1728px] h-[114px] relative">
            <div class="w-[1728px] h-[114px] left-0 top-0 absolute bg-white"></div>
            <div class="w-[382.88px] h-[86px] left-[28px] top-[14px] absolute justify-center items-center inline-flex">
                <img class="w-[382.88px] h-[86px]" src="{{ asset('css/images/PLM LOGO.png') }}" alt="PLM LOGO"/>
            </div>
            <div class="w-[661px] left-[1037px] top-[33px] absolute justify-start items-center gap-8 inline-flex">
                <div class="w-[444px] h-[50px] flex-col justify-center items-start gap-[11.52px] inline-flex">
                    <div class="w-[444px] h-[50px] pl-[9.22px] py-[4.61px] bg-zinc-100 rounded-[9.57px] justify-between items-center inline-flex">
                        <div class="w-[23.04px] h-[27.65px] relative"></div>
                        <div class="grow shrink basis-0 text-neutral-700 text-base font-normal font-['Nunito Sans'] leading-[23.04px]">Search here</div>
                    </div>
                </div>
                <div class="w-[185px] h-[50px] justify-start items-center flex">
                    <div class="w-[50px] h-[50px] pl-[9.63px] pr-[11.49px] pt-[9.63px] pb-[11.49px] rounded-[4.81px] border-2 justify-center items-center flex">
                        <div class="w-[28.88px] h-[28.88px] relative flex-col justify-start items-start flex"></div>
                    </div>
                    <div class="w-[135px] h-[50px] px-[14.44px] rounded-[9.63px] justify-end items-center gap-[14.44px] flex">
                        <div class="w-[120.66px] rounded-[9.63px] justify-end items-center gap-[9.63px] flex">
                            <div class="text-center text-slate-600 text-base font-normal font-['Inter'] leading-9">Mara Calinao</div>
                            <div class="w-3 h-[7.22px] relative"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>