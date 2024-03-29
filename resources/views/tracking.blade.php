<x-app-layout>
    <x-slot name="header" class="flex item-center justify-between">
        <h2 class="font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-60 flex" style="padding-top: 4rem;">
            {{ __('Tracking') }}
        
            <!-- Tabs -->
            <ul class="ml-48 absolute w-96 h-11 px-3 py-2 bg-zinc-100 rounded-md shadow justify-start items-start gap-2 inline-flex">
                <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                    <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2022-2023</a>
                </li>
                <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                    <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2019-2021</a>
                </li>
                <li class="grow shrink basis-0 h-7 px-3 py-1 hover:bg-white rounded justify-center items-center gap-2.5 flex">
                    <a href= "#" class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">2017-2018</a>
                </li>
            </ul>

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

                <!-- Sort Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6 relative">
                    <div class="custom-dropdown inline-flex items-center relative">
                        <x-secondary-button class="bg-white border border-zinc-200 gap-2">
                            <div class="w-4 h-4 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Sort</div>
                        </x-secondary-button>

                        <div class="custom-dropdown-content mt-2" style="width: 121px;">
                            <div class="px-4 py-3 text-sm text-zinc-950 font-semibold dark:text-white">
                                <div>Sort by</div>
                            </div>

                            <hr class="border-gray-200 dark:border-gray-700 ">
                            
                            <div class="custom-option" data-value="Sort">
                                <div class="option-content justify-between py-3">
                                    <div class="text">Newest</div>
                                    <div class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#71717A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-option" data-value="Sort">
                                <div class="option-content justify-between py-2">
                                    <div class="text">Oldest</div>
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
                                <div class="option-content justify-between py-3">
                                    <div class="text">Excel</div>
                                    <div class="svg-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M13.3334 4L6.00008 11.3333L2.66675 8" stroke="#71717A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="custom-option" data-value="Export">
                                <div class="option-content justify-between py-2">
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
            </div>
        </h2>    
    </x-slot>

    <!-- Payables Table -->
    <div class="py-2 ml-64 pb-10">
        <div x-data="dataHandler()" class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5">
            <div class="shadow-sm border rounded-lg">
                <table class="w-full table-auto text-sm text-left">
                    <thead class="text-gray-500 font-medium border-b-2 bg-gray-50 border-gray-200">
                        <tr>
                            <th class="py-3 px-6 flex items-center gap-x-4">
                                <div>
                                    <input type="checkbox" id="checkbox-all-items" class="checkbox-item peer hidden"
                                        x-model="areAllChecked"
                                        @click="handleCheckboxItems">
                                    <label for="checkbox-all-items" class="relative flex w-5 h-5 bg-white peer-checked:bg-indigo-600 rounded-md border ring-offset-2 ring-indigo-600 duration-150 peer-active:ring cursor-pointer after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:w-1.5 after:h-2.5 after:border-r-2 after:border-b-2 after:border-white after:rotate-45"></label>
                                </div>
                                BUR Number
                            </th>
                            <th class="py-3 px-6">Supplier</th>
                            <th class="py-3 px-6">Particular</th>
                            <th class="py-3 px-6">Amount</th>
                            <th class="py-3 px-6">End-user</th>
                            <th class="py-3 px-6">Current Location</th>
                            <th class="py-3 px-6">Remarks</th>
                            <th class="py-3 px-6"></th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 divide-y">
                        <template x-for="(item, idx) in tableItems" :key="idx">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap flex items-center gap-x-4 font-semibold max-w-[170px] overflow-ellipsis">
                                    <div>
                                        <input type="checkbox" :id="'checkbox-' + idx" :name="'checkbox-' + idx" class="checkbox-item peer hidden"
                                            :checked="checkboxItems[`checkbox${idx}`]"
                                            @click="handleCheckboxChange($event, idx)">
                                        <label :for="'checkbox-' + idx" class="relative flex w-5 h-5 bg-white peer-checked:bg-indigo-600 rounded-md border ring-offset-2 ring-indigo-600 duration-150 peer-active:ring cursor-pointer after:absolute after:inset-x-0 after:top-[3px] after:m-auto after:w-1.5 after:h-2.5 after:border-r-2 after:border-b-2 after:border-white after:rotate-45"></label>
                                    </div>
                                    <span x-text="item.BUR"></span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.supplier"></td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.particular"></td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.amount"></td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.enduser"></td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[200px] overflow-ellipsis">
                                    <template x-if="item.location === 'Accounting' || item.location === 'Budget' || item.location === 'Treasurer' || item.location === 'OVPFM' || item.location === 'PLM President'">
                                        <span>
                                            <div class="w-26 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-left items-center gap-1.5 inline-flex">
                                                <div class="w-2 h-2 relative">
                                                    <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                </div>
                                                <div x-text="item.location" class="text-emerald-700 text-xs font-medium font-['Inter'] leading-none"></div>
                                            </div>
                                        </span>
                                    </template>
                                    <template x-if="item.location === 'COA'">
                                        <span>
                                            <div class="w-26 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-left items-center gap-1.5 inline-flex">
                                                <div class="w-2 h-2 relative">
                                                    <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                </div>
                                                <div x-text="item.location" class="text-gray-700 text-xs font-medium font-['Inter'] leading-none"></div>
                                            </div>
                                        </span>
                                    </template>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap max-w-[160px] overflow-ellipsis" x-text="item.remarks"></td>
                                <td class="text-right px-6 whitespace-nowrap">
                                    <div class="hidden sm:flex sm:items-center sm:ms-6 relative">
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
                                                <!-- Edit Track Button -->    
                                                <x-dropdown-link :href="route('payables-edit')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                                    {{ __('Edit Track') }}
                                                </x-dropdown-link>

                                                <!-- View Track Button -->    
                                                <x-dropdown-link :href="route('tracking-view')" class="hover:text-[#EFF0FF] hover:bg-[#2C56A6] active:bg-[#4F74BB] active:text-[#EFF0FF] rounded-md">
                                                    {{ __('View Track') }}
                                                </x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>

            <!-- For Fetching Data -->
            <script>
                function dataHandler() {
                    return {
                        tableItems: [
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$100K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$90K", enduser: "Regular Text Column", location: "OVPFM", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$120K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$80K", enduser: "Regular Text Column", location: "Treasurer", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$110K", enduser: "Regular Text Column", location: "PLM President", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$70K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$150K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$100K", enduser: "Regular Text Column", location: "Budget", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$90K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$120K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$80K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$110K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$70K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$150K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$100K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$90K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$120K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$80K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$110K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$70K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$150K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$100K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$90K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$120K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$80K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$110K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$70K", enduser: "Regular Text Column", location: "COA", remarks: "Regular Text Column" },
                            { BUR: "Bold Text Column", supplier: "Regular Text Column", particular: "Regular Text Column", amount: "$150K", enduser: "Regular Text Column", location: "Accounting", remarks: "Regular Text Column" }
                        ],
                        areAllChecked: false,
                        checkboxItems: {},
                        handleCheckboxItems() {
                            this.areAllChecked = !this.areAllChecked;
                            this.tableItems.forEach((_, idx) => {
                                this.checkboxItems[`checkbox${idx}`] = this.areAllChecked;
                            });
                        },
                        handleCheckboxChange(e, idx) {
                            this.areAllChecked = false;
                            this.checkboxItems[`checkbox${idx}`] = e.target.checked;
                            if (Object.values(this.checkboxItems).every(val => val === true)) this.areAllChecked = true;
                        },
                        init() {
                            this.tableItems.forEach((_, idx) => {
                                this.checkboxItems[`checkbox${idx}`] = false;
                            });
                        }
                    };
                }
            </script>
        </div>
    </div>               
</x-app-layout>
                
