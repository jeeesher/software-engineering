<x-app-layout>
    <!-- Title and Buttons Section-->
    <x-slot name="header" class="flex item-center justify-between ml-60">
        <div class="w-full flex items-center" style="padding-top: 4rem; padding-left: 15rem;">
            <a href="{{ route('payables') }}">
                <button :href="route('payables')" class="flex items-center w-20 bg-white gap-2">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                            <path d="M8.00016 12.698L3.3335 8.03129M3.3335 8.03129L8.00016 3.36462M3.3335 8.03129H12.6668" stroke="#2D349A" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-indigo-800 text-sm font-medium font-['Inter'] leading-tight">Back</div>
                </button>
            </a>
        </div>
        
        
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-right ml-60 flex" style="padding-top: 2rem;">
            {{ __('View Payable') }}

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
                
                <!-- Edit Button -->
                <a href="{{ route('payables-edit') }}">
                    <x-secondary-button :href="route('payables-edit')" class="bg-white border border-zinc-200 gap-2 ml-6">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <g clip-path="url(#clip0_3076_8858)">
                                    <path d="M7.33325 2.66667H2.66659C2.31296 2.66667 1.97382 2.80714 1.72378 3.05719C1.47373 3.30724 1.33325 3.64638 1.33325 4V13.3333C1.33325 13.687 1.47373 14.0261 1.72378 14.2761C1.97382 14.5262 2.31296 14.6667 2.66659 14.6667H11.9999C12.3535 14.6667 12.6927 14.5262 12.9427 14.2761C13.1928 14.0261 13.3333 13.687 13.3333 13.3333V8.66667M12.3333 1.66665C12.5985 1.40144 12.9582 1.25244 13.3333 1.25244C13.7083 1.25244 14.068 1.40144 14.3333 1.66665C14.5985 1.93187 14.7475 2.29158 14.7475 2.66665C14.7475 3.04173 14.5985 3.40144 14.3333 3.66665L7.99992 9.99999L5.33325 10.6667L5.99992 7.99999L12.3333 1.66665Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_3076_8858">
                                    <rect width="16" height="16" fill="white"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Edit</div>
                    </x-secondary-button>
                </a>

                <!-- Folders Button -->
                <x-secondary-button class="bg-white border border-zinc-200 gap-2 ml-6">
                    <div class="w-4 h-4 relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3.99992 9.33333L4.96659 7.4C5.0779 7.1791 5.24846 6.99353 5.4592 6.86402C5.66995 6.73451 5.91256 6.66618 6.15992 6.66667H13.3333M13.3333 6.66667C13.5369 6.66631 13.738 6.71262 13.921 6.80206C14.104 6.89149 14.2641 7.02166 14.389 7.18258C14.5138 7.3435 14.6002 7.53089 14.6414 7.73037C14.6826 7.92985 14.6775 8.13611 14.6266 8.33333L13.5933 12.3333C13.5193 12.6199 13.352 12.8738 13.1178 13.0548C12.8837 13.2359 12.5959 13.3339 12.2999 13.3333H2.66659C2.31296 13.3333 1.97382 13.1929 1.72378 12.9428C1.47373 12.6928 1.33325 12.3536 1.33325 12V3.33333C1.33325 2.6 1.93325 2 2.66659 2H5.28659C5.50619 2.00114 5.72212 2.0565 5.91519 2.16117C6.10825 2.26585 6.27247 2.41659 6.39325 2.6L6.93992 3.4C7.0607 3.58341 7.22492 3.73415 7.41798 3.83883C7.61105 3.9435 7.82698 3.99886 8.04659 4H11.9999C12.3535 4 12.6927 4.14048 12.9427 4.39052C13.1928 4.64057 13.3333 4.97971 13.3333 5.33333V6.66667Z" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Go to Folders</div>
                </x-secondary-button>

                <!-- Payable Tracking Button -->
                <a href="{{ route('tracking') }}">
                    <x-primary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2 ml-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M10.6667 1.33337V4.66671H14M4.66667 5.33337V11.2C4.66667 11.4 4.8 11.6 4.93333 11.7334C5.06667 11.8667 5.26667 12 5.46667 12H10M2 8.00004V13.8667C2 14.0667 2.13333 14.2667 2.26667 14.4C2.4 14.5334 2.6 14.6667 2.8 14.6667H7.33333M14 4.00004V8.33337C14 8.86671 13.5333 9.33337 13 9.33337H8.33333C7.8 9.33337 7.33333 8.86671 7.33333 8.33337V2.33337C7.33333 1.80004 7.8 1.33337 8.33333 1.33337H11.3333L14 4.00004Z" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Payable Tracking</div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3.33325 8.00004H12.6666M12.6666 8.00004L7.99992 3.33337M12.6666 8.00004L7.99992 12.6667" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </x-primary-button>
                </a>
            </div>
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <!-- Payable Information Section -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Information</div>
                <div class="flex flex-wrap w-full mx-auto">
                    <!-- BUR Number and Total Amount Information -->
                    <div class="pr-4 lg:w-1/3">
                        <div class="h-full pt-3 pb-2 rounded-lg text-left relative">
                            <div class="justify-start items-center gap-0.5 flex pb-2">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">BUR Number</div>
                            </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                            </div>

                            <div class="justify-start items-center gap-0.5 flex pb-2 pt-6">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Total Amount</div>
                            </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Supplier and Current Location Information -->
                    <div class="pr-4 lg:w-1/3">
                        <div class="h-full pt-3 pb-2 pl-2 rounded-lg text-left relative">
                            <div class="justify-start items-center gap-0.5 flex pb-2">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Supplier</div>
                            </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                            </div>

                            <div class="justify-start items-center gap-0.5 flex pb-2 pt-6">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Current Location</div>
                            </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End-user and Remarks Information -->
                    <div class="pr-4 lg:w-1/3">
                        <div class="h-full pt-3 pl-4 pb-2 rounded-lg text-left relative">
                            <div class="justify-start items-center gap-0.5 flex pb-2">
                                <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">End-user</div>
                            </div>
                            <div class="w-96 h-9 px-3 py-2 bg-white rounded-md shadow border border-gray-200 justify-start items-center gap-2 inline-flex">
                                <div class="grow shrink basis-0 h-5 justify-start items-center gap-2 flex">
                                    <div class="grow shrink basis-0 text-zinc-500 text-sm font-normal font-['Inter'] leading-tight">Text</div>
                                </div>
                            </div>

                            <div class="justify-start items-center gap-0.5 flex pb-2 pt-6">
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
            </div>
        </div>
    </div>

    <div class="py-2 ml-64 pb-10">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="pt-5 pb-3 bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="w-full h-px border border-zinc-200"></div>
            </div>

            <!-- Particular and Payable View Section -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg mx-auto flex sm:flex-nowrap flex-wrap">
                <!-- Particular Section -->
                <div class="lg:w-2/3 md:w-1/2 bg-white rounded-lg overflow-hidden sm:mr-10 w-full items-end justify-start relative">
                    <div class="flex items-center">
                        <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Particular</div>
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

                <!-- Payable View Section -->
                <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg flex flex-col md:ml-auto md:py-8 mt-8 md:mt-0" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                    <div class="flex items-center justify-between">
                        <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Preview</div>
                    </div>
                    <div class="mt-3 border shadow h-96">
                        <!-- file preview -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
