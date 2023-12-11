<x-app-layout>
    <!-- Title and Buttons Section-->
    <x-slot name="header" class="flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-right ml-60 flex" style="padding-top: 4rem;">
            {{ __('Edit Payable') }}

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
                
                <!-- Cancel Edit Button -->
                <a href="{{ route('payables-view') }}">
                    <x-secondary-button :href="route('payables-view')" class="bg-white border border-zinc-200 gap-2 ml-6">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M10 6.00708L6 10.0071M6 6.00708L10 10.0071M3.33333 2.00708H12.6667C13.403 2.00708 14 2.60403 14 3.34041V12.6737C14 13.4101 13.403 14.0071 12.6667 14.0071H3.33333C2.59695 14.0071 2 13.4101 2 12.6737V3.34041C2 2.60403 2.59695 2.00708 3.33333 2.00708Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Cancel Edit</div>
                    </x-secondary-button>
                </a>

                <!-- Save Edit Button -->
                <a href="{{ route('payables-view') }}">
                    <div class="mt-1">
                        <x-primary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2 ml-6">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M11.3333 14.0071V8.67375H4.66667V14.0071M4.66667 2.00708V5.34041H10M12.6667 14.0071H3.33333C2.97971 14.0071 2.64057 13.8666 2.39052 13.6166C2.14048 13.3665 2 13.0274 2 12.6737V3.34041C2 2.98679 2.14048 2.64765 2.39052 2.3976C2.64057 2.14756 2.97971 2.00708 3.33333 2.00708H10.6667L14 5.34041V12.6737C14 13.0274 13.8595 13.3665 13.6095 13.6166C13.3594 13.8666 13.0203 14.0071 12.6667 14.0071Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Save Edit</div>
                        </x-primary-button>
                    </div>
                </a>
            </div>
        </h2>
    </x-slot>

    <div class="py-2 ml-64 pb-5">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5 flex">
            <!-- Payable Information Input Field -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 w-full mb-10 md:mb-0">
                <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Information</div>

                <!-- BUR Input Field -->
                <div class="mt-1">
                    <div class="flex items-center">
                        <x-input-label for="BUR" :value="__('BUR Number')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="BUR" name="BUR" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter BUR Number"/>
                        <x-input-error class="mt-2" :messages="$errors->get('BUR')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>

                <!-- Supplier Input Field -->
                <div class="mt-4">
                    <div class="flex items-center">
                        <x-input-label for="supplier" :value="__('Supplier')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="supplier" name="supplier" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter Supplier"/>
                        <x-input-error class="mt-2" :messages="$errors->get('supplier')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>

                <!-- End-User Input Field -->
                <div class="mt-4">
                    <div class="flex items-center">
                        <x-input-label for="enduser" :value="__('End-user')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="enduser" name="enduser" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter End-user"/>
                        <x-input-error class="mt-2" :messages="$errors->get('enduser')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>

                <!-- Total Amount Input Field -->
                <div class="mt-4">
                    <div class="flex items-center">
                        <x-input-label for="amount" :value="__('Total Amount')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="amount" name="amount" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Php 0.00"/>
                        <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>

                <!-- Current Location Select Field -->
                <div class="mt-4">
                    <div class="flex items-center">
                        <x-input-label for="location" :value="__('Current Location')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="location" name="location" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Select Location"/>
                        <x-input-error class="mt-2" :messages="$errors->get('location')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>

                <!-- Remarks Input Field -->
                <div class="mt-4">
                    <div class="flex items-center">
                        <x-input-label for="remarks" :value="__('Remarks')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="remarks" name="remarks" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter Remarks"/>
                        <x-input-error class="mt-2" :messages="$errors->get('remarks')" />
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>            
                </div>
            </div>

            
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex flex-col flex-grow lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                <!-- Particular Input Field -->
                <div>
                    <div class="flex items-center">
                        <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Particular</div>
                        <div class="ml-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M8 13.3334H14M11 2.3334C11.2652 2.06819 11.6249 1.91919 12 1.91919C12.1857 1.91919 12.3696 1.95577 12.5412 2.02684C12.7128 2.09791 12.8687 2.20208 13 2.3334C13.1313 2.46472 13.2355 2.62063 13.3066 2.79221C13.3776 2.96379 13.4142 3.14769 13.4142 3.3334C13.4142 3.51912 13.3776 3.70302 13.3066 3.8746C13.2355 4.04618 13.1313 4.20208 13 4.3334L4.66667 12.6667L2 13.3334L2.66667 10.6667L11 2.3334Z" stroke="#2563EB" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>

                    <div x-data="{ 
                        tableItems: [
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' },
                            { quantity: 'Bold text column', particular: 'Regular text column', 'subamount': 'Regular text column', 'totalamount': 'Regular text column' }
                        ]}" class="max-w-screen-xl mx-auto w-full">
                        
                        <div class="mt-3 shadow-sm border rounded-lg overflow-x-auto">
                            <table class="w-full table-auto text-sm text-left">
                                <thead class="bg-gray-50 text-gray-600 font-medium border-b">
                                    <tr>
                                    <th class="py-3 px-6">Quantity</th>
                                    <th class="py-3 px-6">Particular</th>
                                    <th class="py-3 px-6">Sub Amount</th>
                                    <th class="py-3 px-6">Total Amount</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 divide-y">
                                    <template x-for="(item, idx) in tableItems" :key="idx">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis font-semibold" x-text="item.quantity"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" x-text="item.particular"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" x-text="item.subamount"></td>
                                        <td class="px-6 py-4 whitespace-nowrap max-w-[100px] overflow-ellipsis" x-text="item.totalamount"></td>
                                    </tr>
                                    </template>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div>
                    <div class="flex items-center mt-6 justify-between">
                        <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Preview</div>
                        <!-- Upload New Copy of Payable Button -->
                        <x-secondary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2 ml-6">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10.0071V12.6737C14 13.0274 13.8595 13.3665 13.6095 13.6166C13.3594 13.8666 13.0203 14.0071 12.6667 14.0071H3.33333C2.97971 14.0071 2.64057 13.8666 2.39052 13.6166C2.14048 13.3665 2 13.0274 2 12.6737V10.0071M11.3333 5.34041L8 2.00708M8 2.00708L4.66667 5.34041M8 2.00708V10.0071" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-sm font-medium font-['Inter'] leading-tight">Upload New Copy of Payable</div>
                        </x-secondary-button>
                    </div>
                    <div class="mt-3 border shadow h-48">
                        <!-- file preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>