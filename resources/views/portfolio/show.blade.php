<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Talk Admissions</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&family=Nunito&family=Shippori+Antique&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Styles -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        /* Create a sticky/fixed navbar */
        #navbar {
            max-width: 2000px;
            margin: auto;
            overflow: hidden;
            background-color: #f1f1f1;
            padding: 20px 10px 10px;
            /* Large padding which will shrink on scroll (using JS) */
            transition: 0.4s;
            /* Adds a transition effect when the padding is decreased */
            position: fixed;
            /* Sticky/fixed navbar */
            width: 100%;
            top: 0;
            /* At the top */
            z-index: 99;
        }

        /* Style the logo */
        #navbar #logo {
            font-size: 35px;
            font-weight: bold;
            transition: 0.4s;
        }
    </style>
</head>

<body class="antialiased">

    <div id='navbar' class="w3-opacity-min">
        <a href="/" id='logo'>Talk Admission</a>
        <div class="">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 px-6 py-4 sm:block" style="z-index: 2;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="w3-right w3-button w3-small">Log in</a>


                        @if (Route::has('register'))
                            <div class="w3-dropdown-hover w3-right ">
                                <button class="w3-bar-item w3-right w3-button w3-small " title="Registrations">Register</button>
                                <div class="w3-dropdown-content w3-card-4 w3-bar-block w3-small"
                                    style="width:150px; margin-top:30px">
                                    <a href="/mentorregister" class="w3-bar-item w3-right w3-button w3-small ">Mentor</a>
                                    <a href="/applicantregister" class="w3-bar-item w3-right w3-button w3-small ">Applicant</a>
                                    <a href="/users" class="w3-bar-item w3-right w3-button w3-small ">Users</a>
                                </div>
                            </div>
                            <!--  END Top Right Registation dropdown -->
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>

    <div class="max-w-[800px] mx-auto flex items-center justify-center min-h-screen m-4 mt-40 text-[#ecebf0]">
        <div
            class="w-full bg-[#231f39]/60 rounded-[6px] shadow-[0px_15px_39px_16px_rgba(52,45,91,0.65)] backdrop-blur-sm mx-2 overflow-hidden">

            <div x-data="{ openSettings: false }" class="absolute z-10 bg-green-100 right-12 bottom-1 mt-4 rounded">
                <button @click="openSettings = !openSettings"
                    class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20"
                    title="Settings">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z">
                        </path>
                    </svg>
                </button>
                <div x-show="openSettings" @click.away="openSettings = false"
                    class="bg-white rounded-md absolute right-0 bottom-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl"
                    style="display: none;">
                    <div class="py-2 border-b">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Settings</p>
                        <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Share Profile</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Block User</span>
                        </button>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm text-gray-700">More Info</span>
                        </button>
                    </div>
                    <div class="py-2">
                        <p class="text-gray-400 text-xs px-6 uppercase mb-1">Feedback</p>
                        <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <span class="text-sm text-gray-700">Report</span>
                        </button>
                    </div>
                </div>
            </div>

            <a href="/dashboard" target="_blank"
                class="absolute text-[#231f39] bg-green-200 rounded-[4px] top-6 left-6 px-2 py-1 text-sm font-bold roll-in-blurred-right">
                Verified
            </a>
            <div class="w-full h-[250px]">
                <img src="https://www.w3schools.com/w3images/forestbridge.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <a href="" target="_blank" class="">
                <img class="mx-auto h-32 h-auto w-32 w-full rounded-full" src="https://fastly.picsum.photos/id/321/200/200.jpg?hmac=V8qQPhFl_8KjI8JgGI74LQepgBOnxdXOuZmBclxHU90"
                                alt="John Doe" />

                </a>
                <h1 class="text-xl font-bold text-center">{{$portfolio->name ?? 'John Doe'}}</h1>
                <p class="block my-1 text-center">{{$portfolio->year_of_study ?? 'First year '}}</p>
                <p class="mt-5 text-center">{{$portfolio->med_school ?? 'Not entered '}}</p>
            </div>

            <div class="flex flex-row items-center  justify-center gap-2 mx-auto mt-5 mb-10">
                <button
                    class="px-4 border border-[#231f39] rounded-[4px] py-3 text-white bg-[#231f39] transition-all duration-150 ease-in hover:bg-[#472e99]">Send
                    Message</button>
                <button
                    class="px-4 border border-[#231f39] rounded-[4px] py-3 text-white bg-[#231f39] transition-all duration-150 ease-in hover:bg-[#472e99]">Schedule
                    session</button>

            </div>

            <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
                <div class="w-full flex flex-col 2xl:w-1/3">
                    <div class="flex-1 bg-white  n shadow-xl p-8">
                        <h4 class="text-xl text-gray-900 font-bold">Quick Info</h4>
                        <ul class="mt-2 text-gray-700">
                            <li class="flex border-y py-2">
                                <span class="font-bold mr-2">Previous Degree(s): </span>
                                <span class="text-gray-700">{{$portfolio->previous_degree ?? 'Not entered '}}</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">MMIs attended as pre-med:</span>
                                <span class="text-gray-700">{{$portfolio->mmis_attended ?? 'Not entered '}}</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">MMIs as an interviewer:</span>
                                <span class="text-gray-700">{{$portfolio->mmis_interviewed ?? 'Not entered '}}</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">Mentorship experience:</span>
                                <span
                                    class="text-gray-700">{{$portfolio->mentorship_experience ?? 'Not entered '}}</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">Applicants helped:</span>
                                <span class="text-gray-700">{{$portfolio->applicants_helped ?? 'Not entered '}}</span>
                            </li>

                        </ul>
                    </div>

                    <div class="bg-gray-100 text-gray-600 p-4 text-sm font-semibold backdrop-blur-sm">
                        <p class="my-2 uppercase">About</p>
                        <p class="text leading-7">
                            {{$portfolio->about ?? 'Hey, I am a first year med student at UofA. If you have questions about medical school
                            and/or practicing for medical school interviews, feel free to reach out!'}}

                        </p>
                    </div>
                    <div class="bg-[#1e1a36]/70 p-4 text-sm font-semibold backdrop-blur-sm">
                        <p class="my-2">TAGS</p>
                        <ul
                            class="flex mt-4 flex-wrap p[items-center justify-start gap-2 gap-y-3 [&>li]:border-2 [&>li]:border-[#2f2a47] [&>li]:px-3 [&>li]:py-1 [&>li]:rounded-[4px] [&>li]:transition-all [&>li]:duration-150 [&>li]:ease-in [&>li:hover]:scale-105 [&>li:hover]:cursor-pointer">
                            <li>UofA</li>
                            <li>Med Student</li>
                            <li>Class of 2026</li>
                            <li>Interviewed at UofC</li>
                        </ul>
                    </div>
                </div>
            </div>




</body>


<script>
    // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("navbar").style.padding = "20px 10px 10px";
            document.getElementById("logo").style.fontSize = "25px";
            document.getElementById("navbar").style.opacity = "1.0";
        } else {
            document.getElementById("navbar").style.padding = "20px 10px 10px";
            document.getElementById("navbar").style.opacity = "0.7";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }

</script>

</html>