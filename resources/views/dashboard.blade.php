<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-36" style="padding-top: 4rem;">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="p-2 sm:p-2 bg-gradient-to-b from-[#4F74BB] to-indigo-800 shadow sm:rounded-lg">
                <!-- Summary Section -->
                @include('components.dashboard-summary')
            </div>

            <div class="p-5 sm:p-9 bg-white ml-4">
                <!-- Recent Added Payables Section -->
                @include('components.dashboard-recent-payables')
            </div>

            <div class="p-5 sm:p-9 bg-white ml-4">
                <!-- Recent Added Folders Section -->
                @include('components.dashboard-recent-folders')
            </div>
        </div>
    </div>
</x-app-layout>
