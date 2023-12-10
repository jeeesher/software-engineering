<x-app-layout>
    <x-slot name="header">
        <h2 class="bg-white font-semibold text-3xl text-black dark:text-gray-200 leading-tight ml-36" style="padding-top: 4rem;">
            {{ __('Tracking') }}
        
            <!-- Tabs -->
            <ul class="left-[550px] absolute w-96 h-11 px-3 py-2 bg-zinc-100 rounded-md shadow justify-start items-start gap-2 inline-flex">
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

            <!-- Delete Button -->
            <div class="left-[1278px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100">
                <button class="w-4 h-4 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M2 4.00016H14M12.6667 4.00016V13.3335C12.6667 14.0002 12 14.6668 11.3333 14.6668H4.66667C4 14.6668 3.33333 14.0002 3.33333 13.3335V4.00016M5.33333 4.00016V2.66683C5.33333 2.00016 6 1.3335 6.66667 1.3335H9.33333C10 1.3335 10.6667 2.00016 10.6667 2.66683V4.00016M6.66667 7.3335V11.3335M9.33333 7.3335V11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <button class="text-zinc-950 text-sm font-medium font-['Inter'] leading-tight">Delete</button>
                </button>
            </div>

            <!-- Sort Button -->
            <div class="left-[1390px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100 z-10">
                <button class="relative flex jutify-center items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group">
                    <span class="p-2 hover:bg-gray-100">
                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2 4H14M4.66667 8H11.3333M6.66667 12H9.33333" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <p>Sort</p>
                    <div class="absolute top-full hidden group-focus:block min-w-full w-max bg-white shadow-md mt-1 rounded ">
                        <div class="w-55 h-10 px-3 py-1 border-b border-zinc-200 justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-8 justify-start items-center gap-2.5 flex">
                                <div class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-tight">Sort by</div>
                            </div>
                        </div>
                        <ul class="relative text-left border rounded z-10">
                            <li class="px-4 py-1 hover:bg-gray-100 bg-white opacity-100">
                                Newest
                            </li>
                            <li class="px-4 py-1 hover:bg-gray-100 bg-white opacity-100">
                                Oldest
                            </li>
                        </ul>
                    </div>
                </button>  
            </div>

            <!-- Export Button -->
            <div class="left-[1500px] absolute w-24 h-9 px-3 py-2 bg-white rounded-md shadow border border-zinc-200 justify-center items-center gap-2 inline-flex hover:bg-gray-100 z-10">
                <button class="relative flex jutify-center items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group">
                    <span class="p-2 hover:bg-gray-100">
                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M2.66669 9.93284C2.17138 9.42679 1.79773 8.81465 1.57405 8.1428C1.35036 7.47095 1.28249 6.75701 1.3756 6.05504C1.4687 5.35308 1.72033 4.68151 2.11142 4.0912C2.50251 3.50089 3.02281 3.00732 3.63291 2.64788C4.24301 2.28843 4.92691 2.07255 5.6328 2.01656C6.33869 1.96058 7.04807 2.06597 7.7072 2.32475C8.36633 2.58353 8.95793 2.98892 9.43718 3.5102C9.91643 4.03149 10.2708 4.655 10.4734 5.33351H11.6667C12.3104 5.33344 12.937 5.54039 13.454 5.9238C13.971 6.30722 14.351 6.84675 14.5379 7.46271C14.7247 8.07868 14.7085 8.7384 14.4916 9.34443C14.2747 9.95045 13.8686 10.4707 13.3334 10.8282M7.99996 8.00018V14.0002M7.99996 14.0002L5.33329 11.3335M7.99996 14.0002L10.6666 11.3335" stroke="#18181B" stroke-width="1.33" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <p>Export</p>
                    <div class="absolute top-full hidden group-focus:block w-max bg-white shadow-md mt-1 rounded">
                        <div class="w-55 h-10 px-3 py-1 border-b border-zinc-200 justify-start items-center gap-2.5 inline-flex">
                            <div class="grow shrink basis-0 h-8 justify-start items-center gap-2.5 flex">
                                <div class="text-zinc-950 text-sm font-semibold font-['Inter'] leading-tight">Export as</div>
                            </div>
                        </div>
                        <ul class="relative text-left border rounded z-10">
                            <li class="px-4 py-1 hover:bg-gray-100 bg-white opacity-100">
                                Excel
                            </li>
                            <li class="px-4 py-1 hover:bg-gray-100 bg-white opacity-100">
                                PDF
                            </li>
                        </ul>
                    </div>
                </button>  
            </div>
        </h2>    
    </x-slot>

    <!-- Tracking --> 
    <div class="py-2 ml-64 bg-white">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8 space-y-6 ml-5 bg-white">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Table -->
                <div class="w-full relative bg-white rounded-lg border border-gray-200 flex-col justify-start items-start inline-flex ">
                    <div class="w-full self-stretch bg-white justify-start items-start inline-flex">
                        <table class="mx-auto my-4 text-center w-full">
                            <thead class="bg-gray-50 border-b-2 border-gray-200">
                                <tr>
                                    <!-- Table Header -->
                                    <th class="w-25 p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                            <input type = "checkbox" 
                                            class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600" 
                                            indeterminate="indeterminate"/>
                                        </div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">BUR Number</div>    
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Supplier</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Particular</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Amount</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">End-user</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Current Location</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Remarks</div>
                                    </th>
                                    <th class="p-3 text-sm font-semibold tracking-wide text-left">
                                        <div class="text-gray-500 text-xs font-medium font-['Inter'] leading-none"> </div>
                                    </th>
                                </tr>
                            </thead>
                                <!-- 1st Row -->
                                <tbody class="divide-y divide-gray-100">
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                            </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-emerald-700 text-xs font-medium font-['Inter'] leading-none">Accounting</div>
                                                </div>
                                            </span>    
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">            
                                            Regular text column            
                                        </td>            
                                        <td>              
                                            <div class="relative inline-block group">            
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100 ">            
                                                    <span class="rounded-md hover:bg-gray-100 p-2 ">            
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">            
                                                        <div class="text-left p-3 border-b border-zinc-200">            
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>            
                                                        </div>            
                                                        <ul class="text-left border rounded bg-white opacity-100">             
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>      
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 2nd Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                            </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-emerald-50 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-emerald-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-emerald-700 text-xs font-medium font-['Inter'] leading-none">Accounting</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                           <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                     </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 3rd Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 4th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 5th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 6th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 7th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 8th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 9th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 10th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 11th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 12th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 13th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                    <!-- 14th Row -->
                                    <tr class="bg-white">
                                        <td class="p-3 whitespace-wrap">
                                            <div class="w-3.5 h-3.5 left-[3px] top-[3px] flex items-center ">
                                                <input type = "checkbox" class="w-5 h-5 relative bg-slate-50 rounded-md border border-blue-600">
                                           </div>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Bold text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">
                                            <span>
                                                <div class="w-24 h-5 pl-1.5 pr-2 py-0.5 bg-gray-100 rounded-2xl justify-center items-center gap-1.5 inline-flex">
                                                    <div class="w-2 h-2 relative">
                                                        <div class="w-1.5 h-1.5 left-[1px] top-[1px] absolute bg-slate-500 rounded-full"></div>
                                                    </div>
                                                    <div class="text-center text-gray-700 text-xs font-medium font-['Inter'] leading-none">COA</div>
                                                </div>
                                            </span>
                                        </td>
                                        <td class="p-3 text-gray-900 text-sm font-medium font-['Inter'] leading-tight">
                                            Regular text column
                                        </td>
                                        <td>  
                                            <div class="relative inline-block group ">
                                                <button class="flex items-center text-zinc-950 text-sm font-medium font-['Inter'] leading-tight group opacity-100">
                                                    <span class="rounded-md hover:bg-gray-100 p-2">
                                                        <svg class="w-4 h-4 relative" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                            <path d="M10.3331 11.3333C10.5983 11.3333 10.8527 11.4387 11.0402 11.6262C11.2278 11.8138 11.3331 12.0681 11.3331 12.3333C11.3331 12.5985 11.2278 12.8529 11.0402 13.0404C10.8527 13.228 10.5983 13.3333 10.3331 13.3333C10.0679 13.3333 9.81356 13.228 9.62602 13.0404C9.43849 12.8529 9.33313 12.5985 9.33313 12.3333C9.33313 12.0681 9.43849 11.8138 9.62602 11.6262C9.81356 11.4387 10.0679 11.3333 10.3331 11.3333ZM10.3331 6.66667C10.5983 6.66667 10.8527 6.77202 11.0402 6.95956C11.2278 7.1471 11.3331 7.40145 11.3331 7.66667C11.3331 7.93188 11.2278 8.18624 11.0402 8.37377C10.8527 8.56131 10.5983 8.66667 10.3331 8.66667C10.0679 8.66667 9.81356 8.56131 9.62602 8.37377C9.43849 8.18624 9.33313 7.93188 9.33313 7.66667C9.33313 7.40145 9.43849 7.1471 9.62602 6.95956C9.81356 6.77202 10.0679 6.66667 10.3331 6.66667ZM10.3331 2C10.5983 2 10.8527 2.10536 11.0402 2.29289C11.2278 2.48043 11.3331 2.73478 11.3331 3C11.3331 3.26522 11.2278 3.51957 11.0402 3.70711C10.8527 3.89464 10.5983 4 10.3331 4C10.0679 4 9.81356 3.89464 9.62602 3.70711C9.43849 3.51957 9.33313 3.26522 9.33313 3C9.33313 2.73478 9.43849 2.48043 9.62602 2.29289C9.81356 2.10536 10.0679 2 10.3331 2Z" fill="#667085"/>
                                                        </svg>
                                                    </span>
                                                    <div class="absolute top-full hidden group-focus:block w-max group-hover:opacity-100 bg-white shadow-md mt-1 rounded z-50">
                                                        <div class="text-left p-3 border-b border-zinc-200">
                                                            <div class="text-zinc-950 text-sm font-semibold">Actions</div>
                                                        </div>
                                                        <ul class="text-left border rounded bg-white opacity-100">
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">Edit Track</li>
                                                            <li class="px-4 py-1 hover:bg-gray-100 bg-white">View Track</li>
                                                        </ul>
                                                    </div>
                                                </button>       
                                            </div>
                                        </td> 
                                    </tr>
                                </tbody>
                        </table>
                    </div> 
                </div>    
            </div>
        </div> 
    </div>               
</x-app-layout>
                
  