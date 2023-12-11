<x-app-layout>
    <x-slot name="header" class="bg-white flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-60" style="padding-top: 4rem;">
            {{ __('Folders: 2022-2023') }}
    </h2>    
</x-slot>

<div class="left-[300px] w-96 absolute space-y-6">
                <!-- First Recent Payable -->
                <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6">
                    <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-end flex flex-wrap grid grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                        <div class="col-span-1">
                            <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                        </div>
                        <!-- Button -->
                        <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                                <td class="text-right px-6 whitespace-nowrap">
                                    <div class="left-[250px] absolute hidden sm:flex sm:items-center sm:ms-6 relative ">
                                        <x-dropdown align="right" width="44" style="position: absolute; top: 2.5rem; right: 0;">
                                            <x-slot name="trigger">
                                                <button href="javascript:void(0)" class="py-2 leading-none duration-150 rounded-lg">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path d="M10.3333 11.3333C10.5985 11.3333 10.8528 11.4387 11.0404 11.6262C11.2279 11.8138 11.3333 12.0681 11.3333 12.3333C11.3333 12.5985 11.2279 12.8529 11.0404 13.0404C10.8528 13.228 10.5985 13.3333 10.3333 13.3333C10.068 13.3333 9.81368 13.228 9.62614 13.0404C9.43861 12.8529 9.33325 12.5985 9.33325 12.3333C9.33325 12.0681 9.43861 11.8138 9.62614 11.6262C9.81368 11.4387 10.068 11.3333 10.3333 11.3333ZM10.3333 6.66667C10.5985 6.66667 10.8528 6.77202 11.0404 6.95956C11.2279 7.1471 11.3333 7.40145 11.3333 7.66667C11.3333 7.93188 11.2279 8.18624 11.0404 8.37377C10.8528 8.56131 10.5985 8.66667 10.3333 8.66667C10.068 8.66667 9.81368 8.56131 9.62614 8.37377C9.43861 8.18624 9.33325 7.93188 9.33325 7.66667C9.33325 7.40145 9.43861 7.1471 9.62614 6.95956C9.81368 6.77202 10.068 6.66667 10.3333 6.66667ZM10.3333 2C10.5985 2 10.8528 2.10536 11.0404 2.29289C11.2279 2.48043 11.3333 2.73478 11.3333 3C11.3333 3.26522 11.2279 3.51957 11.0404 3.70711C10.8528 3.89464 10.5985 4 10.3333 4C10.068 4 9.81368 3.89464 9.62614 3.70711C9.43861 3.51957 9.33325 3.26522 9.33325 3C9.33325 2.73478 9.43861 2.48043 9.62614 2.29289C9.81368 2.10536 10.068 2 10.3333 2Z" fill="#667085"/>
                                                    </svg>
                                                </button>
                                            </x-slot>

                                            <x-slot name="content">
                                                <div class="px-4 py-3 text-sm text-zinc-950 font-semibold dark:text-white mr-5">
                                                    <div>Actions</div>
                                                </div>

                                                <hr class="border-gray-200 dark:border-gray-700 ">
                                                <!-- Edit Payable Button -->    
                                                <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                                    {{ __('Edit') }}
                                                </x-dropdown-link>

                                                <!-- View Payable Button -->    
                                                <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                                    {{ __('View') }}
                                                </x-dropdown-link>

                                                <!-- Track Payable Button -->    
                                                <x-dropdown-link :href="route('profile.edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                                    {{ __('Track') }}
                                                </x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </td>
                    </div>
                </div>
</x-app-layout>
