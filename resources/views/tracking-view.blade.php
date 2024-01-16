<x-app-layout>
    <x-slot name="header" class="bg-white flex item-center justify-between">
        <div class="w-full flex items-center" style="padding-top: 4rem; padding-left: 15rem;">
            <a href="{{ route('tracking') }}">
                <button :href="route('tracking')" class="flex items-center w-20 bg-white gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                            <path d="M8.00016 12.698L3.3335 8.03129M3.3335 8.03129L8.00016 3.36462M3.3335 8.03129H12.6668" stroke="#2D349A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-indigo-800 text-sm font-medium font-['Inter'] leading-tight">Back</div>
                </button>
            </a>
        </div>
    </x-slot>

    <div class="ml-64 bg-white pb-10">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5 flex bg-white">
            <!-- Payable Information Section -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 md:mb-0">
                <h2 class="bg-white relative flex items-center justify-start text-left text-zinc-950 text-lg font-semibold leading-right">
                    {{ __('Payable Information') }}

                    <div class="ml-4">
                        <a href="#" class="text-indigo-800 text-sm font-medium font-['Inter'] leading-tight hover:underline">View payable</a>
                    </div>
                </h2>

                <!-- BUR Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR Number</div>
                        </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- Supplier Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier</div>
                        </div>
                        <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                            </div>
                        </div>
                    </div>
                </div>
                    
                <!-- End-user Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">End-user</div>
                        </div>
                        <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Amount Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Total Amount</div>
                        </div>
                        <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                        </div>
                    </div>
                </div>

                <!-- Current Location Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Current Location</div>
                        </div>
                        <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Remarks Field -->
                <div class="mt-1">
                    <div class="h-full pt-3 pb-2 text-left relative">
                        <div class="justify-start items-center gap-0.5 flex pb-2">
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Remarks</div>
                        </div>
                        <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                            <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <!-- Timeline Section -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex sm:flex-nowrap flex-wrap" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                <div class="lg:w-2/3 md:w-1/2 bg-white rounded-lg overflow-hidden sm:mr-10 w-full items-end justify-start">
                    <!-- Divider -->
                    <div class="absolute w-2/4 h-screen origin-top-left rotate-90 border ml-6 mb-2" style="top: 50px; height: 1px;"></div>
                    
                    <div class="ml-16">
                        <div class="absolute text-zinc-950 text-lg font-semibold leading-loose">Payable Tracking</div>
                        <!--PAYABLE PAID-->
                        <div class="absolute bg-emerald-600 rounded-lg p-3 text-gray-100 mt-12">
                            <span class="text-base font-semibold leading-9">PAYABLE PAID</span>
                            <span class="text-base font-normal leading-9">|</span>
                            <span class="text-base font-normal leading-9">
                                Payable already sent to Commission on Audit (COA)
                            </span>
                        </div>

                        <!-- BUR Number -->
                        <div class="absolute mt-12 text-gray-900 pt-20 mt-10 flex gap-6 ml-2">
                            <div class="text-base font-medium font-['Inter'] leading-tight mr-5">BUR Number</div>
                            
                            <div class="text-black text-base font-medium font-['Inter'] leading-tight">2023-11-BUR Number</div>

                            <!-- Copy Paste Button -->
                            <button class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <path d="M2.66659 11.1668C1.93325 11.1668 1.33325 10.5668 1.33325 9.8335V3.16683C1.33325 2.4335 1.93325 1.8335 2.66659 1.8335H9.33325C10.0666 1.8335 10.6666 2.4335 10.6666 3.16683M6.66659 5.8335H13.3333C14.0696 5.8335 14.6666 6.43045 14.6666 7.16683V13.8335C14.6666 14.5699 14.0696 15.1668 13.3333 15.1668H6.66659C5.93021 15.1668 5.33325 14.5699 5.33325 13.8335V7.16683C5.33325 6.43045 5.93021 5.8335 6.66659 5.8335Z" stroke="#2D349A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>

                        

                        <!-- Timeline -->
                        <div>
                            <div class="ml-2 absolute mt-4 w-90 text-gray-900 pt-40" style="top: 130px;">
                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                    <div class="relative z-10 w-7 h-7 flex justify-center items-center ">
                                    <span class="flex flex-shrink-0 justify-center items-center w-7 h-7 bg-emerald-600 border border-gray-200 text-[10px] font-semibold uppercase text-white-600 rounded-full dark:bg-emerald-600 dark:text-white-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" /></svg>
                                    </span>
                                    </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Payable Paid
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Payable already sent to Commission on Audit (COA) and has no penalties
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->

                            <!-- Item -->
                            <div class="flex gap-x-3">
                                <!-- Left Content -->
                                <div class="w-16 text-end">
                                <span class="text-black text-xs font-medium font-['Inter'] leading-none">11:59 pm <br/>12/01/2023</span>
                                </div>
                                <!-- End Left Content -->

                                <!-- Icon -->
                                <div class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-gray-700">
                                <div class="relative z-10 w-7 h-7 flex justify-center items-center">
                                    <div class="w-2 h-2 rounded-full bg-gray-400 dark:bg-gray-600"></div>
                                </div>
                                </div>
                                <!-- End Icon -->

                                <!-- Right Content -->
                                <div class="grow pt-0.5 pb-8">
                                <h3 class="text-black text-sm font-medium font-['Inter'] leading-tight flex gap-x-1.5 font-semibold text-gray-800 dark:text-white">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </h3>
                                <p class="text-neutral-700 text-xs font-normal font-['Inter'] leading-none">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                </p>
                                </div>
                                <!-- End Right Content -->
                            </div>
                            <!-- End Item -->
                            
                        </div>
                        <!-- End Timeline --> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>