{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Page Title -->
    <title>Audmedix </title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/fontend/assets/img/favicon.png') }}">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

    <!-- ======= BEGIN GLOBAL MANDATORY STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('fontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.css') }}">
    <!-- ======= END BEGIN GLOBAL MANDATORY STYLES ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('fontend/assets/plugins/apex/apexcharts.css') }}">
    <!-- ======= END BEGIN PAGE LEVEL PLUGINS STYLES ======= -->

    <!-- ======= MAIN STYLES ======= -->
    <link rel="stylesheet" href="{{ asset('fontend/assets/css/style.css') }}">
    <!-- ======= END MAIN STYLES ======= -->

</head>

<body>

    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <h4 class="mb-5 font-20">Welcome To Audmedix </h4>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group mb-20">
                                <label for="name" class="mb-2 font-14 bold"> Your Name </label>
                                <input class="theme-input-style" placeholder="Email Address" id="name"
                                    class="block mt-1 w-full" type="text" name="name" :value="old('email')"
                                    required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="email" class="mb-2 font-14 bold">Your Email</label>
                                <input class="theme-input-style" placeholder="Email Address" id="email"
                                    class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                                    required autofocus autocomplete="username">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold">Password</label>
                                <input class="theme-input-style" placeholder="********" id="password"
                                    class="block mt-1 w-full" type="password" name="password" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>


                            <div class="form-group mb-20">
                                <label for="password" class="mb-2 font-14 bold">Confirm Password</label>
                                <input class="theme-input-style" placeholder="********" id="password_confirmation"
                                    class="block mt-1 w-full" type="password" name="password_confirmation" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <!-- End Form Group -->

                            <div class="d-flex justify-content-between mb-20">
                                {{-- <div class="d-flex align-items-center">
                                    <!-- Custom Checkbox -->
                                    <label class="custom-checkbox position-relative mr-2">
                                        <input type="checkbox" id="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <!-- End Custom Checkbox -->

                                    <label for="checkbox" class="font-14">Remember Me</label>
                                </div> --}}

                                {{-- <a href="forget-pass.html" class="font-12 text_color">Forgot Password?</a> --}}
                            </div>
                            {{-- 
                            <div class="mb-30">
                                <a href="#" class="light-btn mr-3 mb-20">Log In With Facebook</a>
                                <a href="#" class="light-btn style--two mb-20">Log In With Gmail</a>
                            </div> --}}

                            <div class="d-flex align-items-center">
                                {{-- <button type="submit" class="btn long mr-20">Log In</button>
                                <span class="font-12 d-block"><a href="{{ route('register') }}" class="bold">Sign
                                        Up</a>,If
                                    you
                                    have no account.</span> --}}

                                <button type="submit" class="btn long mr-20">Register</button>
                                <span class="font-12 d-block"><a href="{{ route('login') }}" class="bold">Log
                                        In</a>,If you already have an account.</span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer style--two">
        {{-- Dashmin © 2020 created by <a href="https://www.themelooks.com/"> ThemeLooks</a> --}}
    </footer>
    <!-- End Footer -->


    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->
    <script src="{{ asset('fontend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('fontend/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('fontend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('fontend/assets/js/script.js') }}"></script>
    <!-- ======= BEGIN GLOBAL MANDATORY SCRIPTS ======= -->

    <!-- ======= BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
    <script src="{{ asset('fontend/assets/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('fontend/assets/plugins/apex/custom-apexcharts.js') }}"></script>
    <!-- ======= End BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS ======= -->
</body>

</html>
