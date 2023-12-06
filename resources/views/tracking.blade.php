<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Tracking</title>

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
                        <div class="w-[23.04px] h-[27.65px] relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="28" viewBox="0 0 24 28" fill="none">
                                <path d="M20.3778 22.6405L14.6174 16.8801M16.5376 12.0798C16.5376 12.9624 16.3637 13.8362 16.026 14.6516C15.6883 15.467 15.1932 16.2078 14.5692 16.8319C13.9451 17.4559 13.2043 17.951 12.3889 18.2887C11.5736 18.6264 10.6997 18.8002 9.81712 18.8002C8.93458 18.8002 8.06068 18.6264 7.24532 18.2887C6.42996 17.951 5.6891 17.4559 5.06505 16.8319C4.441 16.2078 3.94598 15.467 3.60824 14.6516C3.27051 13.8362 3.09668 12.9624 3.09668 12.0798C3.09668 10.2974 3.80472 8.58807 5.06505 7.32774C6.32538 6.06742 8.03475 5.35938 9.81712 5.35938C11.5995 5.35937 13.3089 6.06742 14.5692 7.32774C15.8295 8.58807 16.5376 10.2974 16.5376 12.0798Z" stroke="#434343" stroke-width="1.92012" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="grow shrink basis-0 text-neutral-700 text-base font-normal font-['Nunito Sans'] leading-[23.04px]">Search here</div>
                    </div>
                </div>
                <div class="w-[185px] h-[50px] justify-start items-center flex">
                    <div class="w-[50px] h-[50px] pl-[9.63px] pr-[11.49px] pt-[9.63px] pb-[11.49px] rounded-[4.81px] border-2 justify-center items-center flex">
                        <div class="w-[28.88px] h-[28.88px] relative flex-col justify-start items-start flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M19.8797 9.04966C19.8797 11.708 17.7247 13.863 15.0664 13.863C12.4081 13.863 10.2531 11.708 10.2531 9.04966C10.2531 6.39133 12.4081 4.23633 15.0664 4.23633C17.7247 4.23633 19.8797 6.39133 19.8797 9.04966Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.0664 17.473C10.4143 17.473 6.64307 21.2443 6.64307 25.8963H23.4897C23.4897 21.2443 19.7185 17.473 15.0664 17.473Z" stroke="#434343" stroke-width="2.40667" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-[135px] h-[50px] px-[14.44px] rounded-[9.63px] justify-end items-center gap-[14.44px] flex">
                        <div class="w-[120.66px] rounded-[9.63px] justify-end items-center gap-[9.63px] flex">
                            <div class="text-center text-slate-600 text-base font-normal font-['Inter'] leading-9">Mara Calinao</div>
                            <div class="w-3 h-[7.22px] relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none">
                                    <g clip-path="url(#clip0_1839_824)">
                                        <path d="M10.5057 0.742096C10.9757 0.272166 11.7376 0.272166 12.2075 0.742096C12.6774 1.21203 12.6774 1.97394 12.2075 2.44387L7.39416 7.2572C6.92423 7.72713 6.16232 7.72713 5.69239 7.2572L0.879059 2.44387C0.409129 1.97394 0.409129 1.21203 0.879059 0.742096C1.34899 0.272166 2.1109 0.272166 2.58083 0.742096L6.54328 4.70454L10.5057 0.742096Z" fill="#64748B"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1839_824">
                                        <rect width="12.0333" height="7.22" fill="white" transform="translate(0.526611 0.389648)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Side Nav Bar -->
        <div class="w-72 h-96 left-0 top-[114px] absolute">
                <div class="w-[276.96px] h-[1003px] left-0 top-0 absolute bg-indigo-800"></div>
                    <div class="w-56 h-11 left-[39px] top-[33px] absolute text-white text-2xl font-semibold font-['Nunito Sans'] leading-9">Accounts Payble</div>
                    <div class="left-[21.39px] top-[84px] absolute flex-col justify-start items-start gap-3.5 inline-flex">

                        <!-- Dahboard -->
                        <div class="w-56 px-2.5 py-1 rounded justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-9 rounded justify-start items-center gap-2.5 flex">
                                <div class="w-9 h-9 bg-indigo-800 rounded-md shadow justify-center items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path d="M7.51514 19.1466V10.8133H12.5151V19.1466M2.51514 8.31331L10.0151 2.47998L17.5151 8.31331V17.48C17.5151 17.922 17.3395 18.3459 17.027 18.6585C16.7144 18.9711 16.2905 19.1466 15.8485 19.1466H4.1818C3.73978 19.1466 3.31585 18.9711 3.00329 18.6585C2.69073 18.3459 2.51514 17.922 2.51514 17.48V8.31331Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text-white text-xl font-normal font-['Nunito Sans'] leading-7">Dashboard</div>
                            </div>
                        </div>

                        <!-- Payables -->
                        <div class="w-56 px-2.5 py-1 rounded justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-9 rounded justify-start items-center gap-2.5 flex">
                                <div class="w-9 h-9 bg-indigo-800 rounded-md shadow justify-center items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                                        <path d="M17.0265 4.41767H19.0321C19.564 4.41767 20.0741 4.62896 20.4502 5.00508C20.8263 5.38119 21.0376 5.89131 21.0376 6.42322V20.4621C21.0376 20.994 20.8263 21.5041 20.4502 21.8803C20.0741 22.2564 19.564 22.4677 19.0321 22.4677H6.99872C6.46681 22.4677 5.95669 22.2564 5.58058 21.8803C5.20446 21.5041 4.99316 20.994 4.99316 20.4621V6.42322C4.99316 5.89131 5.20446 5.38119 5.58058 5.00508C5.95669 4.62896 6.46681 4.41767 6.99872 4.41767H9.00428M10.0071 2.41211H16.0237C16.5775 2.41211 17.0265 2.86107 17.0265 3.41489V5.42044C17.0265 5.97426 16.5775 6.42322 16.0237 6.42322H10.0071C9.45323 6.42322 9.00428 5.97426 9.00428 5.42044V3.41489C9.00428 2.86107 9.45323 2.41211 10.0071 2.41211Z" stroke="#FAFAFA" stroke-width="2.00957" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text-white text-xl font-normal font-['Nunito Sans'] leading-7">Payables</div>
                            </div>
                        </div>

                        <!-- Tracking -->
                        <div class="w-56 px-2.5 py-1 bg-cyan-700 rounded justify-start items-center gap-2.5 inline-flex">
                            <div class="w-9 h-9 bg-cyan-700 rounded-md shadow justify-center items-center flex">
                                <div class="w-5 h-5 relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_1910_3962)">
                                            <path d="M2.51514 9.2334L18.3485 1.7334L10.8485 17.5667L9.1818 10.9001L2.51514 9.2334Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1910_3962">
                                            <rect width="20" height="20" fill="white" transform="translate(0.0151367 0.0668945)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="text-white text-xl font-bold font-['Nunito Sans'] leading-7">Tracking</div>
                        </div>
                        <!-- Notifications -->
                        <div class="w-56 px-2.5 py-1 rounded justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-9 justify-start items-center gap-2.5 flex">
                                <div class="w-9 h-9 rounded-md shadow justify-center items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <path d="M8.59851 18.1932C8.738 18.4469 8.94305 18.6585 9.19225 18.8059C9.44146 18.9532 9.72566 19.031 10.0152 19.031C10.3047 19.031 10.5889 18.9532 10.8381 18.8059C11.0873 18.6585 11.2924 18.4469 11.4318 18.1932M5.01514 7.35986C5.01514 6.03378 5.54192 4.76201 6.4796 3.82433C7.41728 2.88665 8.68905 2.35986 10.0151 2.35986C11.3412 2.35986 12.613 2.88665 13.5507 3.82433C14.4884 4.76201 15.0151 6.03378 15.0151 7.35986C15.0151 13.1932 17.5151 14.8599 17.5151 14.8599H2.51514C2.51514 14.8599 5.01514 13.1932 5.01514 7.35986Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="text-white text-xl font-normal font-['Nunito Sans'] leading-7">Notifications</div>
                            </div>
                        </div>

                        <!-- Folders -->
                        <div class="w-56 px-2.5 py-1 rounded justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-9 justify-start items-center gap-2.5 flex">
                                <div class="w-9 h-9 bg-indigo-800 rounded-md shadow justify-center items-center flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                        <g clip-path="url(#clip0_1910_3976)">
                                            <path d="M1.68164 8.65365H18.3483M3.34831 16.987H16.6816C17.1237 16.987 17.5476 16.8114 17.8602 16.4988C18.1727 16.1863 18.3483 15.7623 18.3483 15.3203V6.98698C18.3483 6.54495 18.1727 6.12103 17.8602 5.80847C17.5476 5.49591 17.1237 5.32031 16.6816 5.32031H10.0733C9.7988 5.31889 9.52888 5.24969 9.28756 5.11885C9.04623 4.98801 8.84095 4.79958 8.68997 4.57031L8.00664 3.57031C7.85566 3.34104 7.65039 3.15262 7.40906 3.02178C7.16773 2.89094 6.89782 2.82173 6.62331 2.82031H3.34831C2.90628 2.82031 2.48236 2.99591 2.1698 3.30847C1.85724 3.62103 1.68164 4.04495 1.68164 4.48698V15.3203C1.68164 16.237 2.43164 16.987 3.34831 16.987Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1910_3976">
                                                <rect width="20" height="20" fill="white" transform="translate(0.0151367 0.320312)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="text-white text-xl font-normal font-['Nunito Sans'] leading-7">Folders</div>
                            </div>
                        </div>
                    </div>

                    <!-- Settings -->
                    <div class="w-56 px-2.5 py-1 left-[27.58px] top-[887.75px] absolute rounded justify-start items-center gap-2.5 inline-flex">
                        <div class="grow shrink basis-0 h-9 justify-start items-center gap-2.5 flex">
                            <div class="w-9 h-9 bg-indigo-800 rounded-md shadow justify-center items-center flex">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path d="M10.3918 2.2334H10.0252C9.58314 2.2334 9.15921 2.40899 8.84665 2.72155C8.53409 3.03411 8.3585 3.45804 8.3585 3.90007V4.05007C8.3582 4.34234 8.28105 4.62939 8.13478 4.88243C7.98851 5.13547 7.77828 5.3456 7.52516 5.49173L7.16683 5.70007C6.91347 5.84635 6.62606 5.92336 6.3335 5.92336C6.04094 5.92336 5.75353 5.84635 5.50016 5.70007L5.37516 5.6334C4.99272 5.41278 4.53836 5.35294 4.11183 5.46699C3.6853 5.58104 3.32146 5.85968 3.10016 6.24173L2.91683 6.5584C2.69622 6.94084 2.63637 7.3952 2.75042 7.82173C2.86447 8.24826 3.14311 8.61211 3.52516 8.8334L3.65016 8.91673C3.90206 9.06216 4.11151 9.27097 4.25771 9.52242C4.4039 9.77388 4.48174 10.0592 4.4835 10.3501V10.7751C4.48466 11.0687 4.40821 11.3575 4.26187 11.6122C4.11553 11.8668 3.90451 12.0782 3.65016 12.2251L3.52516 12.3001C3.14311 12.5214 2.86447 12.8852 2.75042 13.3117C2.63637 13.7383 2.69622 14.1926 2.91683 14.5751L3.10016 14.8917C3.32146 15.2738 3.6853 15.5524 4.11183 15.6665C4.53836 15.7805 4.99272 15.7207 5.37516 15.5001L5.50016 15.4334C5.75353 15.2871 6.04094 15.2101 6.3335 15.2101C6.62606 15.2101 6.91347 15.2871 7.16683 15.4334L7.52516 15.6417C7.77828 15.7879 7.98851 15.998 8.13478 16.251C8.28105 16.5041 8.3582 16.7911 8.3585 17.0834V17.2334C8.3585 17.6754 8.53409 18.0993 8.84665 18.4119C9.15921 18.7245 9.58314 18.9001 10.0252 18.9001H10.3918C10.8339 18.9001 11.2578 18.7245 11.5703 18.4119C11.8829 18.0993 12.0585 17.6754 12.0585 17.2334V17.0834C12.0588 16.7911 12.136 16.5041 12.2822 16.251C12.4285 15.998 12.6387 15.7879 12.8918 15.6417L13.2502 15.4334C13.5035 15.2871 13.7909 15.2101 14.0835 15.2101C14.3761 15.2101 14.6635 15.2871 14.9168 15.4334L15.0418 15.5001C15.4243 15.7207 15.8786 15.7805 16.3052 15.6665C16.7317 15.5524 17.0955 15.2738 17.3168 14.8917L17.5002 14.5667C17.7208 14.1843 17.7806 13.7299 17.6666 13.3034C17.5525 12.8769 17.2739 12.513 16.8918 12.2917L16.7668 12.2251C16.5125 12.0782 16.3015 11.8668 16.1551 11.6122C16.0088 11.3575 15.9323 11.0687 15.9335 10.7751V10.3584C15.9323 10.0647 16.0088 9.77594 16.1551 9.52131C16.3015 9.26668 16.5125 9.05524 16.7668 8.9084L16.8918 8.8334C17.2739 8.61211 17.5525 8.24826 17.6666 7.82173C17.7806 7.3952 17.7208 6.94084 17.5002 6.5584L17.3168 6.24173C17.0955 5.85968 16.7317 5.58104 16.3052 5.46699C15.8786 5.35294 15.4243 5.41278 15.0418 5.6334L14.9168 5.70007C14.6635 5.84635 14.3761 5.92336 14.0835 5.92336C13.7909 5.92336 13.5035 5.84635 13.2502 5.70007L12.8918 5.49173C12.6387 5.3456 12.4285 5.13547 12.2822 4.88243C12.136 4.62939 12.0588 4.34234 12.0585 4.05007V3.90007C12.0585 3.45804 11.8829 3.03411 11.5703 2.72155C11.2578 2.40899 10.8339 2.2334 10.3918 2.2334Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10.2085 13.0667C11.5892 13.0667 12.7085 11.9474 12.7085 10.5667C12.7085 9.18602 11.5892 8.06673 10.2085 8.06673C8.82778 8.06673 7.7085 9.18602 7.7085 10.5667C7.7085 11.9474 8.82778 13.0667 10.2085 13.0667Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-white text-xl font-normal font-['Nunito Sans'] leading-7">Settings</div>
                        </div>
                    </div>
                </div>

                <!-- Tracking -->
                <div class="left-[335.12px] top-[126.50px] absolute text-black text-2xl font-medium font-['Nunito Sans'] leading-9">Tracking

                    <!-- Tabs -->
                    <ul class="left-[120px] absolute w-96 h-11 px-3 py-2 bg-zinc-100 rounded-md shadow justify-start items-start gap-2 inline-flex">
                        <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                            <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2022-2023</a>
                        </li>
                        <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                            <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2019-2021</a>
                        </li>
                        <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                            <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2017-2018</a>
                        </li>
                    </ul>

                    <!-- Delete Button -->
                    <div class="left-[900px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100">
                        <button class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M2 4.00016H14M12.6667 4.00016V13.3335C12.6667 14.0002 12 14.6668 11.3333 14.6668H4.66667C4 14.6668 3.33333 14.0002 3.33333 13.3335V4.00016M5.33333 4.00016V2.66683C5.33333 2.00016 6 1.3335 6.66667 1.3335H9.33333C10 1.3335 10.6667 2.00016 10.6667 2.66683V4.00016M6.66667 7.3335V11.3335M9.33333 7.3335V11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <button class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</button>
                        </button>
                    </div>

                    <!-- Filter Button -->
                    <div class="left-[1020px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100">
                        <button class="relative flex jutify-center items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group">
                            <span class="p-2 hover:bg-gray-100">
                                <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <p class="p-2">Filter</p>
                            <div class="absolute top-full hidden group-focus:block min-w-full w-max bg-white shadow-md mt-1 rounded ">
                                <div class="w-60 h-10 px-3 py-1 border-b border-zinc-200 justify-start items-center gap-2.5 inline-flex">
                                    <div class="grow shrink basis-0 h-8 justify-start items-center gap-2.5 flex">
                                        <div class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-tight">Select Filter</div>
                                    </div>
                                </div>
                                <ul class="text-left border rounded">
                                    <li class="px-4 py-1 hover:bg-gray-100 ">
                                        Newest
                                    </li>
                                    <li class="px-4 py-1 hover:bg-gray-100 ">
                                        Oldest
                                    </li>
                                </ul>
                            </div>
                        </button>  
                    </div>

                    <!-- Export Button -->
                    <div class="left-[1140px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100">
                    <button class="relative flex jutify-center items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group">
                            <span class="p-2 hover:bg-gray-100">
                                <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M2.66669 9.93284C2.17138 9.42679 1.79773 8.81465 1.57405 8.1428C1.35036 7.47095 1.28249 6.75701 1.3756 6.05504C1.4687 5.35308 1.72033 4.68151 2.11142 4.0912C2.50251 3.50089 3.02281 3.00732 3.63291 2.64788C4.24301 2.28843 4.92691 2.07255 5.6328 2.01656C6.33869 1.96058 7.04807 2.06597 7.7072 2.32475C8.36633 2.58353 8.95793 2.98892 9.43718 3.5102C9.91643 4.03149 10.2708 4.655 10.4734 5.33351H11.6667C12.3104 5.33344 12.937 5.54039 13.454 5.9238C13.971 6.30722 14.351 6.84675 14.5379 7.46271C14.7247 8.07868 14.7085 8.7384 14.4916 9.34443C14.2747 9.95045 13.8686 10.4707 13.3334 10.8282M7.99996 8.00018V14.0002M7.99996 14.0002L5.33329 11.3335M7.99996 14.0002L10.6666 11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                            <p>Export</p>
                            <div class="absolute top-full hidden group-focus:block min-w-full w-max bg-white shadow-md mt-1 rounded ">
                                <div class="w-60 h-10 px-3 py-1 border-b border-zinc-200 justify-start items-center gap-2.5 inline-flex">
                                    <div class="grow shrink basis-0 h-8 justify-start items-center gap-2.5 flex">
                                        <div class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-tight">Export as</div>
                                    </div>
                                </div>
                                <ul class="text-left border rounded">
                                    <li class="px-4 py-1 hover:bg-gray-100 ">
                                        Excel
                                    </li>
                                    <li class="px-4 py-1 hover:bg-gray-100 ">
                                        PDF
                                    </li>
                                </ul>
                            </div>
                        </button>  
                    </div>

                    <!-- Table -->
                    <div class="w-200 h-96 relative top-[65px] absolute flex-col justify-start items-start inline-flex">
                        <div class="overflow-auto rounded-lg shadow hidden md:block flex justify-center items-center">
                            <table class="mx-auto my-4 text-center min-w-full">
                                <thead class="bg-gray-50 border-b-2 border-gray-200">
                                    <tr>
                                        <!-- Table Header -->
                                        <th class="w-20 p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" 
                                                class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600" 
                                                indeterminate="indeterminate"/>
                                            </div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">BUR Number</div>    
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Supplier</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Particular</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Amount</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">End-user</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Current Location</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Remarks</div>
                                        </th>
                                        <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                            <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none"> </div>
                                        </th>
                                    </tr>
                                </thead>
                                <!-- 1st Row -->
                                    <tbody class="divide-y divide-gray-100">
                                        <tr class="bg-white">
                                            <td class="p-3 whitespace-wrap">
                                                <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                    <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                                </div>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Bold text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-emerald-700 text-xs font-medium font-['Inter'] leading-none">Accounting</div>
                                                </div>
                                            </span>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            </td>
                                            <td>  
                                                <div class="relative inline-block group">
                                                    <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group">
                                                        <span class="rounded-md group-hover:bg-gray-100 p-2">
                                                            <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                                <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                            </svg>
                                                        </span>
                                                        <div class="w-32 h-24 absolute top-full left-0 opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                            <div class="text-left p-3 border-b border-zinc-200">
                                                                <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                            </div>
                                                            <ul class="text-left border rounded">
                                                                <li class="px-2 py-2 w-32 hover:bg-gray-100">
                                                                    <a class="text-zinc-950 text-xs font-normal font-['Inter'] leading-none block">View Track</a>
                                                                </li>
                                                                <li class="px-2 py-2 w-32 hover:bg-gray-100">
                                                                    <a class="text-zinc-950 text-xs font-normal font-['Inter'] leading-none block">Edit Track</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </button>       
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 2nd Row -->
                                        <tr class="bg-white">
                                            <td class="p-3 whitespace-wrap">
                                                <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                    <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                                </div>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Bold text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-emerald-700 text-xs font-medium font-['Inter'] leading-none">Accounting</div>
                                                </div>
                                            </span>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td>
                                                <div class="w-4 h-4 relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                    </svg>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- 3rd Row -->
                                        <tr class="bg-white">
                                            <td class="p-3 whitespace-wrap">
                                                <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                    <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                                </div>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Bold text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                            </td>
                                            <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                                Regular text column
                                            </td>
                                            <td>
                                                <div class="w-4 h-4 relative">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                    </svg>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>    
        </div>
    </body>
</html>