<x-app-layout>
    <x-slot name="header" class="bg-white flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-60 flex" style="padding-top: 4rem;">
            {{ __('Folders: 2022-2023') }}
          
            <div class="flex items-center ml-auto">
                <!-- Script for the Dropdowns -->
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const dropdowns = document.querySelectorAll('.custom-dropdown');

                        dropdowns.forEach(dropdown => {
                            const button = dropdown.querySelector('button');
                            const content = dropdown.querySelector('.custom-dropdown-content');
                            const options = content.querySelectorAll('.custom-option');

                            button.addEventListener('click', function() {
                                content.classList.toggle('show');
                            });

                            options.forEach(option => {
                                option.addEventListener('click', function() {
                                    const selectedValue = this.dataset.value;
                                    button.querySelector('.text-zinc-950').innerText = selectedValue;
                                    content.classList.remove('show');

                                    // Remove 'clicked' class from all options
                                    options.forEach(opt => {
                                        opt.classList.remove('clicked');
                                    });

                                    // Add 'clicked' class to the selected option
                                    this.classList.add('clicked');
                                });
                            });

                            document.addEventListener('click', function(event) {
                                if (!dropdown.contains(event.target)) {
                                    content.classList.remove('show');
                                }
                            });
                        });
                    });
                </script>

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
                        <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Add New Document</div>
                    </x-primary-button>
                </a>
            </div>
        </h2>  
    </x-slot>


    <div class="left-[300px] w-96 absolute space-y-6">
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <!-- View Payable Button -->    
                                    <x-dropdown-link :href="route('folders-yearly')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                    <!-- Delete Payable Button -->    
                                    <x-dropdown-link :href="route('folders-yearly')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        
        <!-- 2nd Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        <!-- thrid Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>  
        <!-- 4th Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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

                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- 5th Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- 6th Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- 7th Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- 8th Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>                   
    </div>

    <!-- 2nd Row-->
    <div class="left-[750px] w-96 absolute space-y-6">
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        
        <!-- 2nd Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>  
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>      
    </div>

     <!-- 3rd row -->
     <div class="left-[1200px] w-96 absolute space-y-6">
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        
        <!-- 2nd Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>  
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>       
        <!-- First Recent Payable -->
        <div class="w-150 h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6 shadow-sm border rounded-lg">
            <div class="w-full h-11 left-[31.82px] top-[15.23px] relative justify-start items-start gap-1 inline-flex items-center flex grid-cols-2 row-gap-2 md:grid-cols-7 text-black">
                <div class="col-span-1">
                    <div class="text-zinc-950 text-base font-semibold font-['Inter'] leading-normal">BUR Number</div>
                </div>
                <!-- Button -->
                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                    <td class="text-right px-6 whitespace-nowrap">
                        <div class="left-[200px] absolute hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                    <x-dropdown-link :href="route('payables-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('View') }}
                                    </x-dropdown-link>

                                     <!-- Delete Payable Button -->    
                                     <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                        {{ __('Delete') }}
                                    </x-dropdown-link>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    </td>
                </td>
            </div>
        </div>                   
    </div>
</x-app-layout>
