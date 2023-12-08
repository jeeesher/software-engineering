<x-app-layout>        
    <!-- Title and Buttons Section-->
    <x-slot name="header" class="flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-right ml-60 flex" style="padding-top: 4rem;">
            {{ __('Payables') }}

            <div class="flex gap-6 items-center ml-auto">
                <!-- Year Filter Dropdown-->
                <div class="flex items-center px-3 py-2 bg-zinc-100 rounded-md shadow justify-center gap-2 hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF]">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M10.6667 1.33331V3.99998M5.33333 1.33331V3.99998M2 6.66665H14M3.33333 2.66665H12.6667C13.403 2.66665 14 3.2636 14 3.99998V13.3333C14 14.0697 13.403 14.6666 12.6667 14.6666H3.33333C2.59695 14.6666 2 14.0697 2 13.3333V3.99998C2 3.2636 2.59695 2.66665 3.33333 2.66665Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2022-2023</div>
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M7.99992 3.33331V12.6666M7.99992 12.6666L12.6666 7.99998M7.99992 12.6666L3.33325 7.99998" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Due Status Filter Dropdown-->
                <div class="flex items-center px-3 py-2 bg-zinc-100 rounded-md shadow justify-center gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M6.66675 1.33331H9.33341M8.00008 9.33331L10.0001 7.33331M13.3334 9.33331C13.3334 12.2788 10.9456 14.6666 8.00008 14.6666C5.05456 14.6666 2.66675 12.2788 2.66675 9.33331C2.66675 6.38779 5.05456 3.99998 8.00008 3.99998C10.9456 3.99998 13.3334 6.38779 13.3334 9.33331Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Due next year</div>
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M7.99992 3.33331V12.6666M7.99992 12.6666L12.6666 7.99998M7.99992 12.6666L3.33325 7.99998" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Delete Button -->
                <div class="flex items-center px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2 3.99998H14M12.6667 3.99998V13.3333C12.6667 14 12 14.6666 11.3333 14.6666H4.66667C4 14.6666 3.33333 14 3.33333 13.3333V3.99998M5.33333 3.99998V2.66665C5.33333 1.99998 6 1.33331 6.66667 1.33331H9.33333C10 1.33331 10.6667 1.99998 10.6667 2.66665V3.99998M6.66667 7.33331V11.3333M9.33333 7.33331V11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</div>
                </div>

                <!-- Filter/Sort Dropdown -->
                <div class="flex items-center px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Filter</div>
                </div>

                <!-- Export Dropdown -->
                <div class="flex items-center px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2.66672 9.93266C2.17141 9.4266 1.79777 8.81447 1.57408 8.14262C1.35039 7.47077 1.28252 6.75682 1.37563 6.05486C1.46873 5.3529 1.72036 4.68133 2.11145 4.09102C2.50254 3.50071 3.02284 3.00714 3.63294 2.64769C4.24304 2.28825 4.92694 2.07236 5.63283 2.01638C6.33872 1.96039 7.0481 2.06578 7.70723 2.32457C8.36636 2.58335 8.95796 2.98873 9.43721 3.51002C9.91646 4.0313 10.2708 4.65481 10.4734 5.33333H11.6667C12.3104 5.33325 12.937 5.54021 13.454 5.92362C13.9711 6.30703 14.3511 6.84657 14.5379 7.46253C14.7247 8.07849 14.7085 8.73821 14.4916 9.34424C14.2747 9.95027 13.8686 10.4705 13.3334 10.828M7.99999 8V14M7.99999 14L5.33332 11.3333M7.99999 14L10.6667 11.3333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Export</div>
                </div>

                <!-- Add New Payable Button -->
                <div class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3.33334 7.99998H12.6667M8.00001 3.33331V12.6666" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Add New Payable</div>
                </div>
            </div>
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="p-4 sm:p-8 bg-gradient-to-b from-[#4F74BB] to-indigo-800 shadow sm:rounded-lg">

            </div>
        </div>
    </div>
</x-app-layout>