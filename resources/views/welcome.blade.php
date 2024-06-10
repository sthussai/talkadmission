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
            background-color: #37355f;
            color: white;
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

    <div id='navbar' class="">
        <h1 id='logo' class="px-5">Talk Admissions</h1>
        <div class="">
            @if (Route::has('login'))
                <div class=" fixed top-0 right-0 px-5 py-4 sm:block" style="z-index: 2;">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5">Dashboard</a>
                        <a href="{{ url('/publicprofile') }}" class="px-5">Public Profile</a>
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






    <div class="bg-white">

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Upcoming medical school
                        interviews?</h1>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Connect with the students who've been there</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#signup" style="background-color:#37355f"
                            class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                            started</a>
                        <a href="#practice" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>

    <section id="practice" class="bg-white dark:bg-gray-900 mt-24">
        <div class="container px-6 py-10 mx-auto">


            <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                    src="https://www.stockvault.net/data/2016/06/23/202936/preview16.jpg" alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <div class="mx-auto text-center my-12">
                        <p class="my-3 text-3xl font-bold tracking-tight sm:text-4xl">PRACTICE WITH
                            CURRENT MEDICAL STUDENTS</p>
                    </div>
                    <p class="mt-3 text-gray-500 dark:text-gray-300 ">
                        The medical school admission process is competitive. The interview can be a daunting hurdle to
                        cross. We offer you the opportunity to connect with current medical students who can give you a
                        running start and help you succeed.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-violet-200 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">CHOOSE THE APPROACH THAT IS
                </p>
            </div>
            <!-- START Three panel section -->
            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-3 lg:gap-y-16">
                    <div class="relative pl-16">
                        <dt class="text-base lg:text-2xl  font-semibold leading-7 text-gray-900">
                            <div style="background-color:#37355f"
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg ">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                                </svg>
                            </div>
                            Efficient
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">
                            Current students give you the relevant details and share the approaches they used for
                            success. Get help with admission applications or practice for your interviews.
                        </dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base lg:text-2xl font-semibold leading-7 text-gray-900">
                            <div style="background-color:#37355f"
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg ">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            Effective
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Practice one on one with students at the
                            school you are looking to interview at. Benefit from their experience and get tailored
                            guidance that sets you up for success.</dd>
                    </div>
                    <div class="relative pl-16">
                        <dt class="text-base lg:text-2xl font-semibold leading-7 text-gray-900">
                            <div style="background-color:#37355f"
                                class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg ">
                                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            Economical
                        </dt>
                        <dd class="mt-2 text-base leading-7 text-gray-600">Students can provide cost-effective guidance
                            and mentorship without compromising on quality. Get the advice and practice you need while
                            staying within your budget.</dd>
                    </div>
                </dl>
            </div>
            <!-- END Three panel section -->

        </div>
    </div>



    <!-- 2x2 Square section START-->
    <div class=" flex md:flex-row flex-col justify-center items-center ">
        <!-- Left: Image -->
        <div class="md:w-1/2 h-screen relative text-center">

            <img src="https://cdn.pixabay.com/photo/2013/10/02/23/03/mountains-190055_1280.jpg" alt="Placeholder Image"
                class="object-cover w-full h-full">
            <h1
                class=" backdrop-blur-xl p-10 rounded-3xl absolute text-xl lg:text-3xl font-semibold text-white  top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 ">
                Our
                Ambitions and Rationale</h1>
        </div>
        <!-- Right: Text -->
        <div class="px-16 w-full lg:w-1/2 md:w-1/2">


            <div class="md:flex md:items-start md:-mx-4">
                <span style="background-color:#37355f; color:white;"
                    class="inline-block p-2   rounded-xl md:mx-4  dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </span>

                <div class="my-5 md:mx-4 md:mt-0">
                    <h1 class="lg:text-2xl font-semibold text-gray-700 capitalize ">Price control</h1>

                    <p class="my-3  text-gray-500 ">
                        Current pre-admission markets are unregulated and competitive. Hence prices can be exorbitantly
                        high for admission prep and interview training. We’re motivated to bring them back down to
                        reason.
                    </p>
                </div>
            </div>

            <div class="md:flex md:items-start md:-mx-4">
                <span style="background-color:#37355f; color:white;"
                    class="inline-block p-2 rounded-xl md:mx-4  dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </span>

                <div class="my-5 md:mx-4 md:mt-0">
                    <h1 class="lg:text-2xl font-semibold text-gray-700 capitalize ">Variable needs</h1>

                    <p class="my-3 text-gray-500 ">
                        Some students can benefit a lot from interview practice. Some may only need a little help. Some
                        are already ready and could just use the reassurance. Paying hundreds of dollars for the average
                        interview prep plan available in the current market is not the solution for all.
                    </p>
                </div>
            </div>

            <div class="md:flex md:items-start md:-mx-4">
                <span style="background-color:#37355f; color:white;"
                    class="inline-block p-2  rounded-xl md:mx-4  dark:bg-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                    </svg>
                </span>

                <div class="my-5 md:mx-4 md:mt-0">
                    <h1 class="lg:text-2xl font-semibold text-gray-700 capitalize ">Indeterminate impact
                    </h1>

                    <p class="mt-3 text-gray-500 ">
                        It is hard to determine the impact of paid interview prep in securing admission. Many applicants
                        are already strong candidates, including having solid interviewing skills, that give them a high
                        chance of getting admitted. So how do we know that $1500 interview prep plan made a difference?
                    </p>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- 2x2 Square section END-->




    <!-- PROFILE  Container  START -->
    <!-- PROFILE  Container  START -->

    <div class="mx-auto max-w-2xl text-center sm:py-24">
        <p class="mt-5 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Browse Our Mentors
        </p>
    </div>

    <div class="flex ">
        <div class="flex flex-nowrap overflow-auto overflow-y-hidden ">
            <div class="max-w-s m-10 p-10 flex-shrink-0 flex-grow-0 ">
                <div
                    class="rounded-lg bg-white py-3 shadow-lg transition duration-700 hover:scale-110 hover:shadow-2xl">
                    <div class="photo-wrapper p-2">
                        <img class="mx-auto h-32 h-auto w-32 w-full rounded-full" src="https://unsplash.it/200/200/"
                            alt="John Doe" />
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl font-medium leading-8 text-gray-900">John Doe</h3>
                        <div class="text-center text-xs font-semibold text-gray-400">
                            <p>1st year Medical student</p>
                        </div>
                        <table class="my-3 text-nowrap">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">School</td>
                                    <td class="px-2 py-2">University of Alberta</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">Class of</td>
                                    <td class="px-2 py-2">2027</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="my-3 text-center">
                            <a href="/publicprofile" style="background-color:#37355f"
                                class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-s m-10 p-10 flex-shrink-0 flex-grow-0 ">
                <div
                    class="rounded-lg bg-white py-3 shadow-lg transition duration-700 hover:scale-110 hover:shadow-2xl">
                    <div class="photo-wrapper p-2">
                        <img class="mx-auto h-32 h-auto w-32 w-full rounded-full" src="https://unsplash.it/200/200/"
                            alt="John Doe" />
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl font-medium leading-8 text-gray-900">John Doe</h3>
                        <div class="text-center text-xs font-semibold text-gray-400">
                            <p>1st year Medical student</p>
                        </div>
                        <table class="my-3 text-nowrap">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">School</td>
                                    <td class="px-2 py-2">University of Alberta</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">Class of</td>
                                    <td class="px-2 py-2">2027</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="my-3 text-center">
                            <a href="/publicprofile" style="background-color:#37355f"
                                class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-s m-10 p-10 flex-shrink-0 flex-grow-0 ">
                <div
                    class="rounded-lg bg-white py-3 shadow-lg transition duration-700 hover:scale-110 hover:shadow-2xl">
                    <div class="photo-wrapper p-2">
                        <img class="mx-auto h-32 h-auto w-32 w-full rounded-full" src="https://unsplash.it/200/200/"
                            alt="John Doe" />
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl font-medium leading-8 text-gray-900">John Doe</h3>
                        <div class="text-center text-xs font-semibold text-gray-400">
                            <p>1st year Medical student</p>
                        </div>
                        <table class="my-3 text-nowrap">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">School</td>
                                    <td class="px-2 py-2">University of Alberta</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">Class of</td>
                                    <td class="px-2 py-2">2027</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="my-3 text-center">
                            <a href="/publicprofile" style="background-color:#37355f"
                                class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="max-w-s m-10 p-10 flex-shrink-0 flex-grow-0 ">
                <div
                    class="rounded-lg bg-white py-3 shadow-lg transition duration-700 hover:scale-110 hover:shadow-2xl">
                    <div class="photo-wrapper p-2">
                        <img class="mx-auto h-32 h-auto w-32 w-full rounded-full" src="https://unsplash.it/200/200/"
                            alt="John Doe" />
                    </div>
                    <div class="p-2">
                        <h3 class="text-center text-xl font-medium leading-8 text-gray-900">John Doe</h3>
                        <div class="text-center text-xs font-semibold text-gray-400">
                            <p>1st year Medical student</p>
                        </div>
                        <table class="my-3 text-nowrap">
                            <tbody>
                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">School</td>
                                    <td class="px-2 py-2">University of Alberta</td>
                                </tr>

                                <tr>
                                    <td class="px-2 py-2 font-semibold text-gray-500">Class of</td>
                                    <td class="px-2 py-2">2027</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="my-3 text-center">
                            <a href="/publicprofile" style="background-color:#37355f"
                                class="rounded-md  px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View
                                Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- PROFILE  Container  END -->
    <!-- PROFILE  Container  END -->



    <!-- Display Container (not part of component) START -->
    <div class=" mx-auto p-16 sm:p-24 lg:p-48 bg-blue-200">


        <div class="relative rounded-lg block md:flex items-center  shadow-xl" style="min-height: 19rem;">
            <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-t-lg md:rounded-t-none md:rounded-l-lg"
                style="min-height: 19rem;">
                <img class="absolute inset-0 w-full h-full object-cover object-center"
                    src="https://www.stockvault.net/data/2016/10/31/215073/preview16.jpg" alt="">
                <div class="absolute inset-0 w-full h-full flex items-center justify-center fill-current text-white">
                </div>
            </div>
            <div class="w-full md:w-3/5 h-full flex items-center  rounded-lg">
                <div class="p-12 md:pr-24 md:pl-16 md:py-12">
                    <h2 class="mb-3 text-2xl font-bold text-black">High Return On Investment</h2>
                    <p class="font-sans text-lg text-black"> We control costs without compromising on quality. We’re
                        driven to help you get exceptional value for your money.</p>

                </div>
                <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12"
                    viewBox="0 0 100 100" preserveAspectRatio="none">
                    <polygon points="50,0 100,0 50,100 0,100" />
                </svg>
            </div>

        </div>

    </div>
    <!-- Display Container (not part of component) END -->


    <!-- Four Card section START -->
    <div class="mx-auto max-w-2xl text-center sm:py-24">
        <p class="mt-5 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Choose what you need
        </p>
    </div>

    <div class="container mx-auto bg-white">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-4 md:grid-cols-2">
            <div class="overflow-hidden rounded-2xl bg-blue-200 hover:bg-blue-100 text-blue-500 p-4 lg:p-12">
                <div class="flex items-center ">
                    <p class="text-sm font-bold uppercase">Schedule a MMI session</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>



                <p class="mt-4 text-lg text-slate-600">Practice MMI interview stations one-on-one. Go through three
                    8-minute sations and get personalized feedback</p>


                <div
                    class="mt-12 flex transform items-center justify-center transition-transform duration-150 ease-in-out hover:scale-125">
                    <svg width="156px" height="156px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M512 960c-92.8 0-160-200-160-448S419.2 64 512 64s160 200 160 448-67.2 448-160 448z m0-32c65.6 0 128-185.6 128-416S577.6 96 512 96s-128 185.6-128 416 62.4 416 128 416z"
                                fill="#050D42"></path>
                            <path
                                d="M124.8 736c-48-80 92.8-238.4 307.2-363.2S852.8 208 899.2 288 806.4 526.4 592 651.2 171.2 816 124.8 736z m27.2-16c33.6 57.6 225.6 17.6 424-97.6S905.6 361.6 872 304 646.4 286.4 448 401.6 118.4 662.4 152 720z"
                                fill="#050D42"></path>
                            <path
                                d="M899.2 736c-46.4 80-254.4 38.4-467.2-84.8S76.8 368 124.8 288s254.4-38.4 467.2 84.8S947.2 656 899.2 736z m-27.2-16c33.6-57.6-97.6-203.2-296-318.4S184 246.4 152 304 249.6 507.2 448 622.4s392 155.2 424 97.6z"
                                fill="#050D42"></path>
                            <path
                                d="M512 592c-44.8 0-80-35.2-80-80s35.2-80 80-80 80 35.2 80 80-35.2 80-80 80zM272 312c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48zM416 880c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z m448-432c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z"
                                fill="#2F4BFF"></path>
                        </g>
                    </svg>
                </div>

            </div>

            <div class="overflow-hidden rounded-2xl bg-violet-200 hover:bg-violet-100 text-violet-500  p-4 lg:p-12">
                <div class="flex items-center">
                    <p class="text-sm font-bold uppercase">Schedule an approach session</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />

                    </svg>
                </div>

                <p class="mt-4 text-lg text-slate-600">Get guidance from medical students on developing an approach to
                    answering various MMI questions</p>

                <div
                    class="mt-12 flex transform items-center justify-center transition-transform duration-150 ease-in-out hover:scale-125">
                    <svg width="156px" height="156px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M512 960c-92.8 0-160-200-160-448S419.2 64 512 64s160 200 160 448-67.2 448-160 448z m0-32c65.6 0 128-185.6 128-416S577.6 96 512 96s-128 185.6-128 416 62.4 416 128 416z"
                                fill="#050D42"></path>
                            <path
                                d="M124.8 736c-48-80 92.8-238.4 307.2-363.2S852.8 208 899.2 288 806.4 526.4 592 651.2 171.2 816 124.8 736z m27.2-16c33.6 57.6 225.6 17.6 424-97.6S905.6 361.6 872 304 646.4 286.4 448 401.6 118.4 662.4 152 720z"
                                fill="#050D42"></path>
                            <path
                                d="M899.2 736c-46.4 80-254.4 38.4-467.2-84.8S76.8 368 124.8 288s254.4-38.4 467.2 84.8S947.2 656 899.2 736z m-27.2-16c33.6-57.6-97.6-203.2-296-318.4S184 246.4 152 304 249.6 507.2 448 622.4s392 155.2 424 97.6z"
                                fill="#050D42"></path>
                            <path
                                d="M512 592c-44.8 0-80-35.2-80-80s35.2-80 80-80 80 35.2 80 80-35.2 80-80 80zM272 312c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48zM416 880c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z m448-432c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z"
                                fill="#a855f7"></path>
                        </g>
                    </svg>
                </div>
            </div>

            <div class="overflow-hidden rounded-2xl bg-blue-200 hover:bg-blue-100 text-blue-500 p-4 lg:p-12">
                <div class="flex items-center ">
                    <p class="text-sm font-bold uppercase">Schedule a Panel review session</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

                <p class="mt-4 text-lg text-slate-600">Learn tips and tricks for approaching traditional interview
                    stations that typically involve multiple interviewers</p>


                <div
                    class="mt-12 flex transform items-center justify-center transition-transform duration-150 ease-in-out hover:scale-125">
                    <svg width="156px" height="156px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M512 960c-92.8 0-160-200-160-448S419.2 64 512 64s160 200 160 448-67.2 448-160 448z m0-32c65.6 0 128-185.6 128-416S577.6 96 512 96s-128 185.6-128 416 62.4 416 128 416z"
                                fill="#050D42"></path>
                            <path
                                d="M124.8 736c-48-80 92.8-238.4 307.2-363.2S852.8 208 899.2 288 806.4 526.4 592 651.2 171.2 816 124.8 736z m27.2-16c33.6 57.6 225.6 17.6 424-97.6S905.6 361.6 872 304 646.4 286.4 448 401.6 118.4 662.4 152 720z"
                                fill="#050D42"></path>
                            <path
                                d="M899.2 736c-46.4 80-254.4 38.4-467.2-84.8S76.8 368 124.8 288s254.4-38.4 467.2 84.8S947.2 656 899.2 736z m-27.2-16c33.6-57.6-97.6-203.2-296-318.4S184 246.4 152 304 249.6 507.2 448 622.4s392 155.2 424 97.6z"
                                fill="#050D42"></path>
                            <path
                                d="M512 592c-44.8 0-80-35.2-80-80s35.2-80 80-80 80 35.2 80 80-35.2 80-80 80zM272 312c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48zM416 880c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z m448-432c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z"
                                fill="#2F4BFF"></path>
                        </g>
                    </svg>
                </div>

            </div>

            <div class="overflow-hidden rounded-2xl bg-violet-200 hover:bg-violet-100 text-violet-500 p-4 lg:p-12">
                <div class="flex items-center">
                    <p class="text-sm font-bold uppercase">Schedule a file review session</p>

                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </div>

                <p class="mt-4 text-lg text-slate-600">Get personalized suggestions on your CV and application to
                    maximize your chances for that interview </p>


                <div
                    class="mt-12 flex transform items-center justify-center transition-transform duration-150 ease-in-out hover:scale-125">
                    <svg width="156px" height="156px" viewBox="0 0 1024 1024" class="icon" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M512 960c-92.8 0-160-200-160-448S419.2 64 512 64s160 200 160 448-67.2 448-160 448z m0-32c65.6 0 128-185.6 128-416S577.6 96 512 96s-128 185.6-128 416 62.4 416 128 416z"
                                fill="#050D42"></path>
                            <path
                                d="M124.8 736c-48-80 92.8-238.4 307.2-363.2S852.8 208 899.2 288 806.4 526.4 592 651.2 171.2 816 124.8 736z m27.2-16c33.6 57.6 225.6 17.6 424-97.6S905.6 361.6 872 304 646.4 286.4 448 401.6 118.4 662.4 152 720z"
                                fill="#050D42"></path>
                            <path
                                d="M899.2 736c-46.4 80-254.4 38.4-467.2-84.8S76.8 368 124.8 288s254.4-38.4 467.2 84.8S947.2 656 899.2 736z m-27.2-16c33.6-57.6-97.6-203.2-296-318.4S184 246.4 152 304 249.6 507.2 448 622.4s392 155.2 424 97.6z"
                                fill="#050D42"></path>
                            <path
                                d="M512 592c-44.8 0-80-35.2-80-80s35.2-80 80-80 80 35.2 80 80-35.2 80-80 80zM272 312c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48zM416 880c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z m448-432c-27.2 0-48-20.8-48-48s20.8-48 48-48 48 20.8 48 48-20.8 48-48 48z"
                                fill="#a855f7"></path>
                        </g>
                    </svg>
                </div>



            </div>
        </div>
        '
    </div>
    <!-- Four Card section END -->

    <!-- Mentor/mentee START -->
    <div class="mx-auto max-w-2xl text-center sm:py-24">
        <p class="mt-5 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Mentor or
            mentee?
        </p>
        <p class="mt-5 font-light text-gray-900 sm:text-xl">We're looking for amazing medical students to help their
            future
            colleagues across the finish line
        </p>
    </div>

    <div id="signup" class="flex flex-col bg-white p-4 ">
        <div class="flex flex-col md:px-10 ms:px-2 md:flex-row items-center justify-center gap-6">
            <div>
                <img src="https://cdn.pixabay.com/photo/2019/08/14/09/53/consulting-4405260_1280.jpg"
                    alt="Featured Image 1" class="rounded-t-xl" />
                <div class="px-9 pt-10 pb-14   bg-blue-200 hover:bg-blue-100  rounded-b-lg">
                    <div class="space-y-4">
                        <h3 class="text-xl font-bold lead-xl bold">Are you a medical student?</h3>
                        <div class="text-lg font-light">Join as a mentor to share your experience with your future
                            colleagues
                        </div>
                    </div>
                    <div class="flex justify-between pt-8">

                        <div class="flex flex-col justify-end">
                            <a href="/mentorregister"
                                class="py-3 px-6 bg-white text-primary-200 paragraph-m  rounded-full">Sign
                                Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <img src="https://cdn.pixabay.com/photo/2016/02/07/21/03/computer-1185626_1280.jpg"
                    alt="Featured Image 1" class="rounded-t-xl" />
                <div class="px-9 pt-10 pb-14 bg-violet-200 hover:bg-violet-100 rounded-b-lg">
                    <div class=" space-y-4">
                        <h3 class="text-xl font-bold lead-xl bold">Applying to medical school?</h3>
                        <div class="text-lg font-light">Join as an applicant and connect with current medical students
                        </div>
                    </div>
                    <div class="flex justify-between pt-8">

                        <div class="flex flex-col justify-end">
                            <a href="applicantregister"
                                class="py-3 px-6 bg-white text-primary-200 paragraph-m  rounded-full">Sign
                                up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mentor/mentee END  -->




    <section class="bg-black">
        <div class="max-w-lg bg-black px-4 pt-24 py-8 mx-auto text-left md:max-w-none md:text-center">
            <h1
                class="text-3xl font-extrabold leading-10 tracking-tight text-white text-center sm:leading-none md:text-6xl lg:text-7xl">
                <span class="inline md:block">Questions?</span>
                <span
                    class=" mt-2 bg-clip-text text-transparent bg-gradient-to-r from-purple-400 via-emerald-400 to-green-500 md:inline-block">
                    Get<span
                        class="bg-clip-text text-transparent bg-gradient-to-r from-teal-500 via-cyon-400 to-purple-300">
                        in touch!</span> </span>
            </h1>
            <div class="mx-auto rounded-lg font-black mt-5 text-zinc-400 md:mt-12 md:max-w-lg text-center lg:text-lg">
                <button class="bg-tkb border text-sm text-white py-3 px-7 rounded-full" onClick={signInNow}>
                    Contact
                </button>
            </div>
        </div>
    </section>

    <hr class="text-white mx-5" />
    <footer class="bg-black pb-5">
        <div class="max-w-screen-xl px-4 pt-8 mx-auto sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex justify-center text-teal-300 sm:justify-start">
                    <img class="rounded-full" src="https://sahilnetic.xyz/evilcat.png" width="40" height="40" />
                </div>

                <p class="mt-4 text-sm text-center text-gray-400 lg:text-right lg:mt-0">
                    T&C &nbsp; Career &nbsp; Privacy & Policy &nbsp; Developers
                </p>
            </div>
        </div>
    </footer>

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
        } else {
            document.getElementById("navbar").style.padding = "20px 10px 10px";
            document.getElementById("logo").style.fontSize = "35px";
        }
    }

</script>

</html>