<x-app-layout>
    <!-- Title and Buttons Section-->
    <x-slot name="header" class="flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-right ml-60 flex" style="padding-top: 4rem;">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 flex">
            <div class="ml-5">
                <div class="inline-flex gap-4">
                    <x-primary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2">
                        <div class="text-white text-sm font-medium leading-tight">All</div>
                    </x-primary-button>

                    <x-secondary-button class="gap-2">
                        <div class="text-zinc-950 text-sm font-medium leading-tight">Unread</div>
                    </x-secondary-button>
                </div>
            </div>

            <div class="p-2 sm:p-5 bg-white">
                <div class="inline-flex gap-4">
                    <div class="text-black text-lg font-semibold leading-tight">Today</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>