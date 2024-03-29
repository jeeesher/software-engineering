@extends('layouts.guest')
@section('login')
    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="flex-col justify-start items-start gap-5 flex">
                <!-- Email Address -->
                <div class="flex-col justify-start items-start gap-2 flex">
                    <label class="w-96 h-7 text-zinc-900 text-lg font-normal leading-9" for="email" :value="__('Email Address')">Email Address</label>
                    <div class="w-96 justify-start items-start inline-flex">
                        <input class="grow shrink basis-0 h-10 px-4 bg-white rounded-md text-sm border border-[#4F74BB] flex-col justify-center items-center gap-2.5 inline-flex"
                            id="email"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required autofocus autocomplete="username"
                            placeholder="juandelacruz@plm.edu.ph">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

                <!-- Password -->
                <div class="flex-col justify-start items-start gap-2 flex">
                    <div class="w-96 justify-between items-center inline-flex">
                        <label class="w-48 h-7 text-zinc-900 text-lg font-normal leading-9" for="password" :value="__('Password')">Password</label>
                        @if (Route::has('password.request'))
                        <a class="w-52 text-right text-[#4F74BB] text-base font-normal leading-9 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                    <div class="w-96 justify-start items-start inline-flex relative">
                        <input class="grow shrink basis-0 h-10 pl-4 pr-12 text-sm bg-white rounded-md border border-[#4F74BB] flex-col justify-center items-center gap-2.5 inline-flex"
                            id="password"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="*************"></input>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <div class="w-11 h-11 top-0 right-0 absolute justify-center items-center gap-2.5 flex">
                            <button type="button" id="togglePassword" onclick="togglePassword()">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                    <path d="M9.1333 10.2889C8.83493 10.2889 8.54878 10.1704 8.33781 9.95945C8.12683 9.74847 8.0083 9.46232 8.0083 9.16395C8.0083 8.86558 8.12683 8.57943 8.33781 8.36845C8.54878 8.15748 8.83493 8.03895 9.1333 8.03895C9.43167 8.03895 9.71782 8.15748 9.9288 8.36845C10.1398 8.57943 10.2583 8.86558 10.2583 9.16395C10.2583 9.46232 10.1398 9.74847 9.9288 9.95945C9.71782 10.1704 9.43167 10.2889 9.1333 10.2889ZM8.7373 12.5344C8.86855 12.6919 9.00055 12.845 9.1333 12.9912C9.26605 12.845 9.39805 12.6927 9.5293 12.5344C9.26533 12.5401 9.00127 12.5401 8.7373 12.5344V12.5344ZM7.24105 12.4407C6.6651 12.3808 6.09295 12.2886 5.5273 12.1647C5.47105 12.4272 5.4283 12.6822 5.3998 12.9267C5.2573 14.114 5.45605 14.8355 5.7583 15.0095C6.06055 15.1842 6.7843 14.9952 7.74205 14.2789C7.9393 14.1312 8.13805 13.967 8.33755 13.7877C7.94718 13.3595 7.5811 12.9098 7.24105 12.4407V12.4407ZM12.7393 12.1647C12.2016 12.2847 11.6271 12.3777 11.0256 12.4407C10.6855 12.9098 10.3194 13.3595 9.92905 13.7877C10.1286 13.9677 10.3273 14.1312 10.5246 14.2789C11.4823 14.9952 12.2061 15.1842 12.5083 15.0095C12.8106 14.8355 13.0086 14.114 12.8676 12.9267C12.8366 12.6709 12.7941 12.4166 12.7401 12.1647H12.7393ZM13.8268 11.8745C14.2596 13.8537 14.0323 15.4294 13.0708 15.9844C12.1093 16.5394 10.6311 15.9484 9.1333 14.5842C7.63555 15.9484 6.1573 16.5387 5.1958 15.9837C4.2343 15.4287 4.00705 13.8537 4.43905 11.8737C2.50855 11.2594 1.2583 10.2739 1.2583 9.16395C1.2583 8.05395 2.50855 7.0692 4.43905 6.45345C4.00705 4.4742 4.2343 2.89845 5.1958 2.34345C6.1573 1.78845 7.63555 2.37945 9.1333 3.7437C10.6311 2.37945 12.1093 1.7892 13.0708 2.3442C14.0323 2.8992 14.2596 4.4742 13.8276 6.4542C15.7581 7.06845 17.0083 8.05395 17.0083 9.16395C17.0083 10.2739 15.7581 11.2587 13.8276 11.8745H13.8268ZM8.3368 4.5402C8.14607 4.36755 7.94762 4.20364 7.74205 4.04895C6.7843 3.3327 6.06055 3.1437 5.7583 3.31845C5.45605 3.49245 5.25805 4.21395 5.39905 5.4012C5.42905 5.64645 5.47105 5.9007 5.52655 6.1632C6.09245 6.03925 6.66484 5.94711 7.24105 5.8872C7.5973 5.39745 7.9648 4.9467 8.33755 4.5402H8.3368ZM11.0256 5.8872C11.6271 5.9502 12.2016 6.04395 12.7393 6.1632C12.7956 5.9007 12.8383 5.6457 12.8668 5.4012C13.0093 4.21395 12.8106 3.49245 12.5083 3.31845C12.2061 3.1437 11.4823 3.3327 10.5246 4.04895C10.3187 4.20362 10.12 4.36754 9.92905 4.5402C10.3018 4.9467 10.6693 5.39745 11.0256 5.8872V5.8872ZM9.5293 5.79345C9.39805 5.63595 9.26605 5.48295 9.1333 5.3367C9.00055 5.48295 8.86855 5.6352 8.7373 5.79345C9.00127 5.78785 9.26533 5.78785 9.5293 5.79345V5.79345ZM6.4123 11.192C6.27547 10.9663 6.14344 10.7377 6.0163 10.5064C5.94505 10.6992 5.87905 10.8889 5.81905 11.0772C6.0118 11.1192 6.2098 11.1575 6.41155 11.192H6.4123ZM7.8613 11.3674C8.70813 11.4303 9.55847 11.4303 10.4053 11.3674C10.8832 10.6654 11.3084 9.92889 11.6773 9.16395C11.3084 8.39901 10.8832 7.66249 10.4053 6.96045C9.55847 6.89755 8.70813 6.89755 7.8613 6.96045C7.3834 7.66249 6.95823 8.39901 6.5893 9.16395C6.95823 9.92889 7.3834 10.6654 7.8613 11.3674V11.3674ZM12.2503 7.82145C12.3216 7.6287 12.3876 7.43895 12.4476 7.2507C12.2509 7.20803 12.0534 7.16977 11.8551 7.13595C11.9916 7.36163 12.1234 7.59018 12.2503 7.82145ZM4.7308 7.5417C4.4758 7.6242 4.2343 7.7142 4.0078 7.8117C2.90905 8.2827 2.3833 8.8152 2.3833 9.16395C2.3833 9.5127 2.9083 10.0452 4.0078 10.5162C4.2343 10.6137 4.4758 10.7037 4.7308 10.7862C4.8973 10.2612 5.10355 9.7167 5.34955 9.16395C5.11317 8.63518 4.9066 8.09358 4.7308 7.5417V7.5417ZM5.8183 7.2507C5.87905 7.4382 5.94505 7.6287 6.0163 7.8207C6.14345 7.58968 6.27548 7.36138 6.4123 7.13595C6.2098 7.17045 6.0118 7.2087 5.81905 7.2507H5.8183ZM13.5358 10.7862C13.7908 10.7037 14.0323 10.6137 14.2588 10.5162C15.3576 10.0452 15.8833 9.5127 15.8833 9.16395C15.8833 8.8152 15.3583 8.2827 14.2588 7.8117C14.022 7.71082 13.7808 7.62073 13.5358 7.5417C13.3693 8.0667 13.1631 8.6112 12.9171 9.16395C13.1631 9.7167 13.3693 10.2605 13.5358 10.7862V10.7862ZM12.4483 11.0772C12.3876 10.8897 12.3216 10.6992 12.2503 10.5072C12.1232 10.7382 11.9911 10.9665 11.8543 11.192C12.0568 11.1575 12.2548 11.1192 12.4476 11.0772H12.4483Z" fill="black"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Keep Me Signed in -->
                <div class="flex-col justify-start items-start gap-5 flex">
                    <div class="justify-start items-center gap-5 inline-flex">
                        <div class="w-6 h-6 relative">
                            <input id="default-checkbox" type="checkbox" value="" class="w-6 h-6 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-[#4F74BB] dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-1 dark:bg-white dark:border-gray-600">
                        </div>
                        <div class="w-72 text-zinc-900 text-sm font-light leading-9">Keep me signed in</div>
                    </div>
                </div>

                <!--Login Button-->
                <button type="submit" class="w-96 h-11 px-5 py-2.5 bg-[#2D349A] rounded shadow justify-center items-center inline-flex hover:bg-[#2C56A6] text-white text-xl font-bold font-['Inter'] leading-normal">
                    Login
                </button>
            </div>
        </form>
    </div>
@endsection