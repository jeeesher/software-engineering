<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-36" style="padding-top: 4rem;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Summary Section -->
                <div class="w-full h-44 relative">
                    <div class="w-full h-full left-0 top-0 absolute bg-gradient-to-b from-[#4F74BB] to-indigo-800 rounded-lg shadow"></div>
                    <div class="w-20 h-8 left-[35.05px] top-[19.74px] absolute text-center text-indigo-50 text-xl font-medium font-['Inter'] leading-loose">Summary</div>
                    <div class="w-full h-16 left-[39.62px] top-[80.84px] absolute justify-start items-end flex flex-wrap gap-40 ">
                        <div class="w-20 h-16 relative">
                            <div class="left-0 top-0 absolute text-center text-zinc-100 text-base font-normal font-['Inter'] leading-normal">Total Payables</div>
                            <div class="left-1 top-[36.69px] absolute text-center text-white text-2xl font-medium font-['Inter'] leading-9">00</div>
                        </div>
                        <div class="w-20 h-16 relative">
                            <div class="left-[2.94px] top-[-0px] absolute text-center text-zinc-100 text-base font-normal font-['Inter'] leading-normal">Total Paid</div>
                            <div class="left-1 top-[31.69px] absolute text-center text-white text-2xl font-medium font-['Inter'] leading-9">00</div>
                        </div>
                        <div class="w-20 h-16 relative">
                            <div class="left-0 top-0 absolute text-center text-zinc-100 text-base font-normal font-['Inter'] leading-normal">Total Suppliers</div>
                            <div class="left-[0.05px] top-[33.06px] absolute text-center text-white text-2xl font-medium font-['Inter'] leading-9">00</div>
                        </div>
                        <div class="w-48 h-16 relative">
                            <div class="left-0 top-0 absolute text-center text-zinc-100 text-base font-normal font-['Inter'] leading-normal">Total Pending for Voucher</div>
                            <div class="left-[3.16px] top-[33.06px] absolute text-center text-white text-2xl font-medium font-['Inter'] leading-9">00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
