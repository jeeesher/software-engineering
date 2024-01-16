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
    <div class="w-96 h-11 bg-neutral-50 rounded-lg">
        <div class="text-black text-base font-medium font-['Inter'] leading-normal">BUR Number</div>
    </div>

    <div class="left-[400px] absolute w-150 h-28 justify-start items-start gap-12 inline-flex flex">
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">PDF File Name</div>
                <img class="w-11 h-11 left-[19.50px] top-0 absolute" src="{{ asset('css/images/PDF.png') }}" />
        </div>
        
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Word File Name</div>
            <img class="w-11 h-11 left-[16.50px] top-0 absolute" src="{{ asset('css/images/Microsoft Word.png') }}"/>
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Excel File Name</div>
            <img class="w-11 h-11 left-[20.81px] top-0 absolute" src="{{ asset('css/images/Microsoft Excel.png') }}" />
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Document File Name</div>
            <img class="w-11 h-11 left-[28.08px] top-0 absolute" src="{{ asset('css/images/Document.png') }}" />
        </div>
        <div class="w-40 h-28 relative">
            <div class="left-0 top-[90.93px] absolute text-gray-500 text-xs font-medium font-['Inter'] leading-none">Image File Name</div>
            <img class="w-11 h-11 left-[20.38px] top-0 absolute" src="{{ asset('css/images/Image.png') }}" />
        </div>
    </div>
    </div>
</x-app-layout>