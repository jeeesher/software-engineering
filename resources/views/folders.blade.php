<x-app-layout>
    <x-slot name="header" class="bg-white flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-60" style="padding-top: 4rem;">
            {{ __('Folders') }}

           <!-- Delete Button -->
           <x-secondary-button class="bg-white border border-zinc-200 gap-2 ml-6">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2 3.99998H14M12.6667 3.99998V13.3333C12.6667 14 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 14 3.33333 13.3333V3.99998M5.33333 3.99998V2.66665C5.33333 1.99998 6 1.33331 6.66667 1.33331H9.33333C10 1.33331 10.6667 1.99998 10.6667 2.66665V3.99998M6.66667 7.33331V11.3333M9.33333 7.33331V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                </x-secondary-button>

        <!-- Export Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6 relative">
                    <div class="custom-dropdown inline-flex items-center relative">
                        <x-secondary-button class="bg-white shadow border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M2.66672 9.93266C2.17141 9.4266 1.79777 8.81447 1.57408 8.14262C1.35039 7.47077 1.28252 6.75682 1.37563 6.05486C1.46873 5.3529 1.72036 4.68133 2.11145 4.09102C2.50254 3.50071 3.02284 3.00714 3.63294 2.64769C4.24304 2.28825 4.92694 2.07236 5.63283 2.01638C6.33872 1.96039 7.0481 2.06578 7.70723 2.32457C8.36636 2.58335 8.95796 2.98873 9.43721 3.51002C9.91646 4.0313 10.2708 4.65481 10.4734 5.33333H11.6667C12.3104 5.33325 12.937 5.54021 13.454 5.92362C13.9711 6.30703 14.3511 6.84657 14.5379 7.46253C14.7247 8.07849 14.7085 8.73821 14.4916 9.34424C14.2747 9.95027 13.8686 10.4705 13.3334 10.828M7.99999 8V14M7.99999 14L5.33332 11.3333M7.99999 14L10.6667 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                        </x-secondary-button>

                        <div class="custom-dropdown-content mt-2" style="width: 121px;">
                            <div class="px-4 py-3 text-sm text-zinc-950 font-semibold dark:text-white">
                                <div>Export as</div>
                            </div>

                            <hr class="border-gray-200 dark:border-gray-700 ">
                            
                            <div class="custom-option" data-value="Export">
                                <div class="option-content justify-between">
                                    <div class="text">Excel</div>
                                    <div class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#71717A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-option" data-value="Export">
                                <div class="option-content justify-between">
                                    <div class="text">Pdf</div>
                                    <div class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#71717A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                    

                <!-- Add New Payable Button -->
                <a href="{{ route('payables-add') }}">
                    <x-primary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2 ml-6">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M3.33334 7.99998H12.6667M8.00001 3.33331V12.6666" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Add New Folder</div>
                    </x-primary-button>
                </a>
    </h2>
    </x-slot>

    <div class="left-[500px] absolute w-150 h-28 justify-start items-start gap-12 inline-flex">
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Accounts Payable_Year</div>
            <div class="w-24 h-24 left-[17.31px] top-0 absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                <path d="M51.7883 21.6955L46.5049 16.4122C45.3341 15.2413 43.7445 14.583 42.0862 14.583H11.3424C9.04036 14.583 7.17578 16.4476 7.17578 18.7497V81.2497C7.17578 83.5518 9.04036 85.4163 11.3424 85.4163H90.5091C92.8112 85.4163 94.6758 83.5518 94.6758 81.2497V27.083C94.6758 24.7809 92.8112 22.9163 90.5091 22.9163H54.7341C53.6299 22.9163 52.5695 22.4768 51.7883 21.6955Z" fill="url(#paint0_linear_512_23528)"/>
                <path d="M45.8966 30.0295L52.7049 23.2212C52.8987 23.0274 53.1633 22.917 53.4404 22.917H90.5091C92.8112 22.917 94.6758 24.7816 94.6758 27.0837V81.2503C94.6758 83.5524 92.8112 85.417 90.5091 85.417H11.3424C9.04036 85.417 7.17578 83.5524 7.17578 81.2503V32.292C7.17578 31.717 7.64245 31.2503 8.21745 31.2503H42.9508C44.0549 31.2503 45.1154 30.8107 45.8966 30.0295Z" fill="url(#paint1_linear_512_23528)"/>
                <defs>
                    <linearGradient id="paint0_linear_512_23528" x1="50.9258" y1="13.9747" x2="50.9258" y2="31.2018" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBA600"/>
                    <stop offset="1" stop-color="#C28200"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_512_23528" x1="50.9258" y1="22.6128" x2="50.9258" y2="85.3816" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFD869"/>
                    <stop offset="1" stop-color="#FEC52B"/>
                    </linearGradient>
                </defs>
            </svg>
            </div>
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Accounts Payable_Year</div>
            <div class="w-24 h-24 left-[17.31px] top-0 absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                <path d="M51.7883 21.6955L46.5049 16.4122C45.3341 15.2413 43.7445 14.583 42.0862 14.583H11.3424C9.04036 14.583 7.17578 16.4476 7.17578 18.7497V81.2497C7.17578 83.5518 9.04036 85.4163 11.3424 85.4163H90.5091C92.8112 85.4163 94.6758 83.5518 94.6758 81.2497V27.083C94.6758 24.7809 92.8112 22.9163 90.5091 22.9163H54.7341C53.6299 22.9163 52.5695 22.4768 51.7883 21.6955Z" fill="url(#paint0_linear_512_23528)"/>
                <path d="M45.8966 30.0295L52.7049 23.2212C52.8987 23.0274 53.1633 22.917 53.4404 22.917H90.5091C92.8112 22.917 94.6758 24.7816 94.6758 27.0837V81.2503C94.6758 83.5524 92.8112 85.417 90.5091 85.417H11.3424C9.04036 85.417 7.17578 83.5524 7.17578 81.2503V32.292C7.17578 31.717 7.64245 31.2503 8.21745 31.2503H42.9508C44.0549 31.2503 45.1154 30.8107 45.8966 30.0295Z" fill="url(#paint1_linear_512_23528)"/>
                <defs>
                    <linearGradient id="paint0_linear_512_23528" x1="50.9258" y1="13.9747" x2="50.9258" y2="31.2018" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBA600"/>
                    <stop offset="1" stop-color="#C28200"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_512_23528" x1="50.9258" y1="22.6128" x2="50.9258" y2="85.3816" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFD869"/>
                    <stop offset="1" stop-color="#FEC52B"/>
                    </linearGradient>
                </defs>
            </svg>
            </div>
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Accounts Payable_Year</div>
            <div class="w-24 h-24 left-[16.62px] top-0 absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                <path d="M51.7883 21.6955L46.5049 16.4122C45.3341 15.2413 43.7445 14.583 42.0862 14.583H11.3424C9.04036 14.583 7.17578 16.4476 7.17578 18.7497V81.2497C7.17578 83.5518 9.04036 85.4163 11.3424 85.4163H90.5091C92.8112 85.4163 94.6758 83.5518 94.6758 81.2497V27.083C94.6758 24.7809 92.8112 22.9163 90.5091 22.9163H54.7341C53.6299 22.9163 52.5695 22.4768 51.7883 21.6955Z" fill="url(#paint0_linear_512_23528)"/>
                <path d="M45.8966 30.0295L52.7049 23.2212C52.8987 23.0274 53.1633 22.917 53.4404 22.917H90.5091C92.8112 22.917 94.6758 24.7816 94.6758 27.0837V81.2503C94.6758 83.5524 92.8112 85.417 90.5091 85.417H11.3424C9.04036 85.417 7.17578 83.5524 7.17578 81.2503V32.292C7.17578 31.717 7.64245 31.2503 8.21745 31.2503H42.9508C44.0549 31.2503 45.1154 30.8107 45.8966 30.0295Z" fill="url(#paint1_linear_512_23528)"/>
                <defs>
                    <linearGradient id="paint0_linear_512_23528" x1="50.9258" y1="13.9747" x2="50.9258" y2="31.2018" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBA600"/>
                    <stop offset="1" stop-color="#C28200"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_512_23528" x1="50.9258" y1="22.6128" x2="50.9258" y2="85.3816" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFD869"/>
                    <stop offset="1" stop-color="#FEC52B"/>
                    </linearGradient>
                </defs>
            </svg>
            </div>
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Accounts Payable_Year</div>
            <div class="w-24 h-24 left-[16.93px] top-0 absolute">
            <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
            <path d="M51.7883 21.6955L46.5049 16.4122C45.3341 15.2413 43.7445 14.583 42.0862 14.583H11.3424C9.04036 14.583 7.17578 16.4476 7.17578 18.7497V81.2497C7.17578 83.5518 9.04036 85.4163 11.3424 85.4163H90.5091C92.8112 85.4163 94.6758 83.5518 94.6758 81.2497V27.083C94.6758 24.7809 92.8112 22.9163 90.5091 22.9163H54.7341C53.6299 22.9163 52.5695 22.4768 51.7883 21.6955Z" fill="url(#paint0_linear_512_23528)"/>
            <path d="M45.8966 30.0295L52.7049 23.2212C52.8987 23.0274 53.1633 22.917 53.4404 22.917H90.5091C92.8112 22.917 94.6758 24.7816 94.6758 27.0837V81.2503C94.6758 83.5524 92.8112 85.417 90.5091 85.417H11.3424C9.04036 85.417 7.17578 83.5524 7.17578 81.2503V32.292C7.17578 31.717 7.64245 31.2503 8.21745 31.2503H42.9508C44.0549 31.2503 45.1154 30.8107 45.8966 30.0295Z" fill="url(#paint1_linear_512_23528)"/>
                <defs>
                    <linearGradient id="paint0_linear_512_23528" x1="50.9258" y1="13.9747" x2="50.9258" y2="31.2018" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#EBA600"/>
                    <stop offset="1" stop-color="#C28200"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_512_23528" x1="50.9258" y1="22.6128" x2="50.9258" y2="85.3816" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#FFD869"/>
                    <stop offset="1" stop-color="#FEC52B"/>
                    </linearGradient>
                </defs>
            </svg>
            </div>
        </div>
    </div>

</x-app-layout>