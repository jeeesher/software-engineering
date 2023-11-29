<!-- login page -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div style="width: 100%; height: 100vh; position: relative; background: #2D349A">
        <!-- Background -->
            <img style="width: 75%; height: 100vh; left: 25%; top: 0%; position: absolute" src="{{ asset('css/images/image 2.png') }}" alt="Background"/>
            <div style="width: 40%; height: 50vh; left: 5%; top: 8%; position: absolute">

            <div style="width: 40%; height: 50vh; position: relative">
                <!-- Login forms -->
                <div style="width: 250%; height: 83vh; left: 10%; top: 2%; position: absolute; background: white; border-radius: 12.49px"></div>
                <div style="width: 40%; height: 50vh; left: 5%; top: 5%; position: absolute; border-radius: 12.49px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 5%; display: inline-flex">
                    <!-- Frame for input fields -->
                    <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; gap: 3%; display: flex">
                        <div style="display: flex; flex-direction: column; justify-content: flex-start; align-items: center; gap: 27px; display: flex">
                            <div style="width: 494.56px; color: #2D6B9A; font-size: 64px; font-family: Inter; font-weight: 700; line-height: 36px; word-wrap: break-word">PLM Module</div>
                            <div style="width: 494.56px; color: #2D6B9A; font-size: 36px; font-family: Inter; font-weight: 500; line-height: 36px; word-wrap: break-word">Sign In</div>
                        </div>
                        <div style="flex-direction: column; justify-content: flex-start; align-items: center; gap: 22.48px; display: flex">
                            <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 22.48px; display: flex">
                                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 22.48px; display: flex">
                                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9.99px; display: flex">
                                        <div style="width: 500px; height: 29.97px; color: #191D23; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 36px; word-wrap: break-word">Email Address</div>
                                        <div style="width: 500px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="flex: 1 1 0; height: 48px; padding-left: 16px; padding-right: 16px; background: white; border-radius: 6px; border: 1px #4F74BB solid; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                                <div style="align-self: stretch; color: #A0AEC0; font-size: 18px; font-family: Inter; font-weight: 400; word-wrap: break-word">juandelacruz@plm.edu.ph</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 9.99px; display: flex">
                                        <div style="width: 499.56px; justify-content: space-between; align-items: center; display: inline-flex">
                                            <div style="width: 199.82px; height: 29.97px; color: #191D23; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 36px; word-wrap: break-word">Password</div>
                                            <div style="width: 202.32px; text-align: right; color: #4F74BB; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 36px; word-wrap: break-word">Forgot Password?</div>
                                        </div>
                                        <div style="width: 500px; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                                            <div style="flex: 1 1 0; height: 48px; padding-left: 16px; padding-right: 48px; background: white; border-radius: 6px; border: 1px #4F74BB solid; flex-direction: column; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                                                <div style="align-self: stretch; color: #A0AEC0; font-size: 18px; font-family: Inter; font-weight: 400; word-wrap: break-word">**************</div>
                                            </div>
                                            <div style="width: 48px; height: 48px; justify-content: center; align-items: center; gap: 10px; display: flex">
                                                <div style="width: 18px; height: 18px; position: relative">
                                                    <div style="width: 15.75px; height: 14.06px; left: 1.12px; top: 1.97px; position: absolute; background: black"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 19.98px; display: flex">
                                    <div style="justify-content: flex-start; align-items: center; gap: 19.98px; display: inline-flex">
                                        <div style="width: 24.98px; height: 24.98px; position: relative">
                                            <div style="width: 24.98px; height: 24.98px; left: 0px; top: 0px; position: absolute; background: #4F74BB; border-radius: 2.50px"></div>
                                            <div style="width: 24.98px; height: 24.98px; left: 0px; top: 0px; position: absolute">
                                                <div style="width: 18.73px; height: 13.53px; left: 3.12px; top: 6.24px; position: absolute; background: white"></div>
                                            </div>
                                        </div>
                                        <div style="width: 284.75px; color: #191D23; font-size: 16px; font-family: Inter; font-weight: 300; line-height: 36px; word-wrap: break-word">Keep me signed in</div>
                                    </div>
                                    <div style="width: 499.56px; height: 58.70px; padding-left: 19.98px; padding-right: 19.98px; padding-top: 9.99px; padding-bottom: 9.99px; background: #4F74BB; box-shadow: 0px 1.2488888502120972px 2.4977777004241943px -1.2488888502120972px rgba(0, 0, 0, 0.10); border-radius: 5px; justify-content: center; align-items: center; display: inline-flex">
                                        <div style="color: white; font-size: 24.98px; font-family: Inter; font-weight: 700; line-height: 24.98px; word-wrap: break-word">Login</div>
                                    </div>
                                </div>
                            </div>
                            <div style="flex-direction: column; justify-content: flex-start; align-items: center; display: flex">
                                <div style="padding: 9.99px; background: white; justify-content: flex-start; align-items: flex-start; gap: 9.99px; display: inline-flex">
                                    <div style="width: 139.88px; text-align: center; color: #999DA3; font-size: 17.48px; font-family: Inter; font-weight: 400; line-height: 24.98px; word-wrap: break-word">or sign in with</div>
                                </div>
                                <div style="width: 427.12px; height: 0px; opacity: 0.25; border: 0.62px #4B5768 solid"></div>
                            </div>
                            <div style="padding-top: 14.99px; padding-bottom: 14.96px; padding-left: 124.89px; padding-right: 106.45px; background: #E4E7EB; border-radius: 5px; justify-content: flex-end; align-items: flex-start; gap: 16.24px; display: inline-flex">
                                <img style="width: 24.98px; height: 26.23px" src="{{ asset('css/images/image 1.png') }}" alt="Microsoft Logo"/>
                                <div style="text-align: center; color: #4B5768; font-size: 19.98px; font-family: Inter; font-weight: 400; line-height: 29.97px; word-wrap: break-word">Continue with Microsoft</div>
                            </div>
                        </div>
                    </div>
                    <!-- PLM logo and header -->
                    <div style="width: 70%; left: 50%; top: 5%; position: absolute; display: flex; flex-direction: row; align-items: flex-start; gap: 5%;">
                        <div style="width: 50%; aspect-ratio: 1; border-radius: 12.49px; overflow: hidden;">
                            <img style="width: 100%; height: 100%; object-fit: cover; border-radius: 12.49px;" src="{{ asset('css/images/image 5.png') }}" alt="PLM Logo">
                        </div>
                        <div style="width: 50%; aspect-ratio: 6.28; overflow: hidden;">
                            <img style="width: 100%; height: 100%; object-fit: cover; border-radius: 12.49px;" src="{{ asset('css/images/image 4.png') }}" alt="PLM Header">
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>

