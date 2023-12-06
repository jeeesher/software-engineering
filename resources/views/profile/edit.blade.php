<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-40" style="padding-top: 4rem;">
            {{ __('My Account') }}
        </h2>
    </x-slot>

    <div class="py-12 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg border border-gray-200">
                <div>
                    @include('profile.partials.update-password-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
