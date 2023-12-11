<x-app-layout>
    <!-- Title and Buttons Section-->
    <x-slot name="header" class="flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-right ml-60 flex" style="padding-top: 4rem;">
            {{ __('Add New Payable') }}
        </h2>
    </x-slot>

    <div class="py-2 ml-64">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5 flex">
            <!-- Payable Information Input Field -->
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg lg:max-w-lg lg:w-1/3 md:w-1/2 w-full mb-10 md:mb-0">
                <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Information</div>

                <!-- BUR Input Field -->
                <div class="mt-1 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="BUR" :value="__('BUR Number')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="BUR" name="BUR" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter BUR Number"/>
                        <x-input-error class="mt-2" :messages="$errors->get('BUR')" />
                    </div>            
                </div>

                <!-- Supplier Input Field -->
                <div class="mt-4 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="supplier" :value="__('Supplier')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="supplier" name="supplier" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter Supplier"/>
                        <x-input-error class="mt-2" :messages="$errors->get('supplier')" />
                    </div>            
                </div>

                <!-- End-User Input Field -->
                <div class="mt-4 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="enduser" :value="__('End-user')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="enduser" name="enduser" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter End-user"/>
                        <x-input-error class="mt-2" :messages="$errors->get('enduser')" />
                    </div>            
                </div>

                <!-- Total Amount Input Field -->
                <div class="mt-4 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="amount" :value="__('Total Amount')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="amount" name="amount" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Php 0.00"/>
                        <x-input-error class="mt-2" :messages="$errors->get('amount')" />
                    </div>            
                </div>

                <!-- Current Location Select Field -->
                <div class="mt-4 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="location" :value="__('Current Location')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="location" name="location" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Select Location"/>
                        <x-input-error class="mt-2" :messages="$errors->get('location')" />
                    </div>            
                </div>

                <!-- Remarks Input Field -->
                <div class="mt-4 pr-1">
                    <div class="flex items-center">
                        <x-input-label for="remarks" :value="__('Remarks')" class="font-medium text-sm text-zinc-950"/>
                        <span class="text-red-500 p-1">*</span>
                    </div>
                    <div class="flex items-center">
                        <x-text-input id="remarks" name="remarks" type="text" class="mt-1 block w-full text-black text-sm" required autofocus autocomplete="name" placeholder="Enter Remarks"/>
                        <x-input-error class="mt-2" :messages="$errors->get('remarks')" />
                    </div>            
                </div>
            </div>

            
            <div class="bg-white dark:bg-gray-800 sm:rounded-lg flex-grow lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center" style="align-self: flex-start; margin-top: 0; padding-top: 0;">
                <!-- Particular Input Field -->
                <div>
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
                
                <div class="">
                    <div class="flex items-center mt-6 justify-between">
                        <div class="text-zinc-950 text-lg font-semibold font-['Inter'] leading-loose">Payable Preview</div>
                    </div>

                    <!-- Upload Copy Inspection and Acceptance Report Button -->
                    <div class="mt-3">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Upload Copy Inspection and Acceptance Report</div>
                        </x-secondary-button>
                    </div>

                    <!-- Upload Copy of Supplies Received and Issued Directly to End-User Button -->
                    <div class="mt-4">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Upload Copy of Supplies Received and Issued Directly to End-User</div>
                        </x-secondary-button>
                    </div>

                    <!-- Upload Copy of Requisition and Issue Slip Button -->
                    <div class="mt-4">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Upload Copy of Requisition and Issue Slip</div>
                        </x-secondary-button>
                    </div>

                    <!-- Upload Copy of Delivery Receipt Button -->
                    <div class="mt-4">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Upload Copy of Delivery Receipt</div>
                        </x-secondary-button>
                    </div>

                    <!-- Upload Copy of Sales Invoice Button -->
                    <div class="mt-4">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Upload Copy of Sales Invoice</div>
                        </x-secondary-button>
                    </div>

                    <!-- Checklist of requirements from Procurement Office Button -->
                    <div class="mt-4">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M11.3333 5.33333L8 2M8 2L4.66667 5.33333M8 2V10" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Checklist of requirements from Procurement Office</div>
                        </x-secondary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-2 ml-64 pb-10">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="pb-1 bg-white dark:bg-gray-800 sm:rounded-lg">
                <div class="w-full h-px border border-zinc-200"></div>
            </div>

            <div class="flex items-center ml-auto justify-end">
                <!-- Download Empty Form of DV Button -->
                <div class="mt-1">
                    <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                        <div class="w-4 h-4 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M14.2934 7.93346L8.1667 14.0601C7.41613 14.8107 6.39815 15.2324 5.3367 15.2324C4.27524 15.2324 3.25726 14.8107 2.5067 14.0601C1.75613 13.3096 1.33447 12.2916 1.33447 11.2301C1.33447 10.1687 1.75613 9.15069 2.5067 8.40013L8.22003 2.6868C8.72041 2.18554 9.39941 1.90358 10.1077 1.90296C10.8159 1.90233 11.4954 2.18309 11.9967 2.68346C12.498 3.18384 12.7799 3.86284 12.7805 4.5711C12.7812 5.27937 12.5004 5.95887 12 6.46013L6.27336 12.1735C6.02318 12.4236 5.68385 12.5642 5.33003 12.5642C4.97621 12.5642 4.63688 12.4236 4.3867 12.1735C4.13651 11.9233 3.99596 11.5839 3.99596 11.2301C3.99596 10.8763 4.13651 10.537 4.3867 10.2868L10.0467 4.63346" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Download Empty Form of DV</div>
                    </x-secondary-button>
                </div>

                <!-- Add Payable Button -->
                <a href="{{ route('payables-view') }}">
                    <div class="mt-1">
                        <x-primary-button class="flex items-center px-3 py-2 bg-[#2D349A] rounded-md shadow justify-center gap-2 ml-6">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                    <g clip-path="url(#clip0_3143_9012)">
                                        <path d="M2.66667 15.2335H12C12.3536 15.2335 12.6928 15.093 12.9428 14.843C13.1929 14.5929 13.3333 14.2538 13.3333 13.9001V5.56681L9.66667 1.90015H4C3.64638 1.90015 3.30724 2.04062 3.05719 2.29067C2.80714 2.54072 2.66667 2.87986 2.66667 3.23348V5.90015M9.33333 1.90015V5.90015H13.3333M2 10.5668H6M4 8.56681V12.5668" stroke="#FAFAFA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3143_9012">
                                        <rect width="16" height="16" fill="white" transform="translate(0 0.566772)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-white text-sm font-medium font-['Inter'] leading-tight">Add Payable</div>
                        </x-primary-button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>