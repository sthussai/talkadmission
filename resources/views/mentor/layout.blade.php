<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="font-sans antialiased">
    <div class="min-h-screen dark:bg-gray-900">
        @include('mentor.includes.navbar')
        @include('mentor.includes.settings_menu')
        @include('mentor.includes.fullscreen_search')
        <!-- Page Heading -->

        <header class="bg-blue-200 dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @yield('header')
            </div>
        </header>

        <!-- Side bar -->
        <div class="flex flex-row  ">
            <sidebar class=" w-1/4">
                @include('mentor.includes.sidebar')
            </sidebar>


            <!-- Page Content -->
            <main class=" bg-gray-100 text-gray-700 w-full">
                @yield('body')
            </main>



        </div>


    </div>
    <script>
        function logout() {
            const form = document.getElementById('logout-form');
            console.log('logout');
            form.submit();
        }

        // Add an event listener for 'keydown' events
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'l' key is pressed, log out
            if (e.altKey && e.key === 'l') {
                // Prevent the default behavior of the 'l' key
                e.preventDefault();
                // Call the logout function
                logout();
            }
        }, false);
        // Add an event listener for 'keydown' events for appointments
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'a' key is pressed, log out
            if (e.altKey && e.key === 'a') {
                // Prevent the default behavior of the 'a' key
                e.preventDefault();
                // Call the logout function
                window.location.href = '/appointments';
            }
        }, false);
        // Add an event listener for 'keydown' events for schedule
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'a' key is pressed, log out
            if (e.altKey && e.key === 's') {
                // Prevent the default behavior of the 'a' key
                e.preventDefault();
                // Call the logout function
                window.location.href = '/schedule';
            }
        }, false);
        // Add an event listener for 'keydown' events for portfolio
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'a' key is pressed, log out
            if (e.altKey && e.key === 'p') {
                // Prevent the default behavior of the 'a' key
                e.preventDefault();
                // Call the logout function
                window.location.href = '/portfolio';
            }
        }, false);
        // Add an event listener for 'keydown' events for media
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'a' key is pressed, log out
            if (e.altKey && e.key === 'm') {
                // Prevent the default behavior of the 'a' key
                e.preventDefault();
                // Call the logout function
                window.location.href = '/media';
            }
        }, false);
        // Add an event listener for 'keydown' events for inbox
        var authUserId = @json(auth()->user()->id);
        document.addEventListener('keydown', e => {
            // If 'Control' key is held down and the 'a' key is pressed, log out
            if (e.altKey && e.key === 'i') {
                // Prevent the default behavior of the 'a' key
                e.preventDefault();
                // Call the logout function
                window.location.href = '/inbox/'+authUserId;
            }
        }, false);


    </script>





</body>

</html>