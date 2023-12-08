<section>
    <!-- Recent Opened Folders Section -->
    <div class="w-full relative">
        <!-- Title Section-->
        <div class="flex items-center justify-between">
            <div class="text-center text-black text-lg font-medium font-['Inter'] leading-loose">Recent opened folder</div>
                <a href="{{ route('payables') }}" class="w-40 h-9 px-3 py-2 bg-[#2D349A] hover:bg-[#2C56A6] active:bg-[#4F74BB] rounded-md shadow justify-center items-center gap-2 inline-flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                        <g clip-path="url(#clip0_2652_2932)">
                            <path d="M1.6665 7.0883H14.9998M2.99984 13.755H13.6665C14.0201 13.755 14.3593 13.6145 14.6093 13.3644C14.8594 13.1144 14.9998 12.7753 14.9998 12.4216V5.75496C14.9998 5.40134 14.8594 5.0622 14.6093 4.81215C14.3593 4.56211 14.0201 4.42163 13.6665 4.42163H8.37984C8.16023 4.42049 7.9443 4.36513 7.75124 4.26046C7.55817 4.15579 7.39395 4.00505 7.27317 3.82163L6.7265 3.02163C6.60572 2.83822 6.4415 2.68748 6.24844 2.5828C6.05538 2.47813 5.83945 2.42277 5.61984 2.42163H2.99984C2.64622 2.42163 2.30708 2.56211 2.05703 2.81216C1.80698 3.0622 1.6665 3.40134 1.6665 3.75496V12.4216C1.6665 13.155 2.2665 13.755 2.99984 13.755Z" stroke="#FAFAFA" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_2652_2932">
                            <rect width="16" height="16" fill="white" transform="translate(0.333252 0.421631)"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="text-white text-sm font-medium font-['Inter'] leading-tight">See All Folders</div>
                </a>
            </div>
        </div>

        <!-- View Recent Opened Folders Section -->
        <div class="w-full relative space-y-6">
            <!-- First Recent Folder -->
            <div class="w-full h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200 mt-6">
                <div class="w-full h-11 left-[31.82px] top-[18.23px] relative justify-start items-start inline-flex items-center flex flex-wrap text-black">
                    <div>
                        <div class="text-sm font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">2022-2023</div>
                    </div>
                    <button class="w-10 h-10 absolute bg-white rounded-md justify-center items-center inline-flex right-12 top-0">
                        <div class="w-5 h-5 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M4.16675 10.9134H15.8334M15.8334 10.9134L10.0001 5.08008M15.8334 10.9134L10.0001 16.7467" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Second Recent Folder -->
            <div class="w-full h-20 left-0 top-[100.5px] bg-white shadow border border-zinc-200">
                <div class="w-full h-11 left-[31.82px] top-[18.23px] relative justify-start items-start inline-flex items-center flex flex-wrap text-black">
                    <div>
                        <div class="text-sm font-medium tracking-widest overflow-hidden whitespace-nowrap overflow-ellipsis">2020-2021</div>
                    </div>
                    <button class="w-10 h-10 absolute bg-white rounded-md justify-center items-center inline-flex right-12 top-0">
                        <div class="w-5 h-5 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path d="M4.16675 10.9134H15.8334M15.8334 10.9134L10.0001 5.08008M15.8334 10.9134L10.0001 16.7467" stroke="#18181B" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>