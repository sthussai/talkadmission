@if(auth()->user()->usertype =='applicant')
@extends('applicant.layout')
@endif
@if(auth()->user()->usertype =='mentor')
@extends('mentor.layout')
@endif

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    @if(auth()->user()->usertype =='applicant')
    {{ __(' Applicant Dashboard') }}
    @endif
    @if(auth()->user()->usertype =='mentor')
    {{ __('Mentor Dashboard') }}
    @endif
</h2>
@endsection

@section('body')

<div class="max-w-[800px] mx-auto flex items-center justify-center min-h-screen m-4 mt-40 text-[#ecebf0]">
        <div
            class="w-full bg-[#231f39]/60 rounded-[6px] shadow-[0px_15px_39px_16px_rgba(52,45,91,0.65)] backdrop-blur-sm mx-2 overflow-hidden">

            <div x-data="{ openSettings: false }" class="absolute z-10  right-12 bottom-1 mt-4 rounded">
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
                class="absolute text-[#231f39] bg-green-300 rounded-[4px] top-6 left-6 px-2 py-1 text-sm font-bold roll-in-blurred-right">
                Verified
                
            </a>
            <a href="/portfolio" target="_blank"
                class="absolute text-[#231f39] bg-gray-200 rounded-[4px] top-6 right-6 px-4 py-2 text-sm font-bold roll-in-blurred-right">
                Edit
            </a>
            <div class="w-full h-[250px]">
                <img src="https://www.w3schools.com/w3images/forestbridge.jpg"
                    class="w-full h-full rounded-tl-lg rounded-tr-lg">
            </div>
            <div class="flex flex-col items-center -mt-20">
                <a href="{{ route('portfolio')}}" target="_blank" class="">
                    <img src="https://talkadmission.com//storage/8/male-306408_640.png"
                        class="w-40 border-6 border-white rounded-full backdrop-blur-md shadow-[0px_27px_16px_-11px_rgba(31,27,56,0.25)] transition-all duration-150 ease-in hover:scale-105 cursor-pointer slide-in-elliptic-top-fwd">
                </a>
                <h1 class="text-xl font-bold text-center">{{auth()->user()->name ?? 'John Doe'}}</h1>
                <p class="block my-1 text-center">First year medical student</p>
                <p class="mt-5 text-center">University of Alberta</p>
            </div>

            <div class="flex flex-row items-center  justify-center gap-2 mx-auto mt-5 mb-10">
                <button
                    class="px-4 border border-[#231f39] rounded-[4px] py-3 text-white bg-[#231f39] transition-all duration-150 ease-in hover:bg-[#472e99]">Send
                    Message</button>
                <button
                    class="px-4 border border-[#231f39] rounded-[4px] py-3 text-white bg-[#231f39] transition-all duration-150 ease-in hover:bg-[#472e99]">Schedule
                    session</button>

            </div>

            <div class="mt-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
                <div class="w-full flex flex-col 2xl:w-1/3">
                    <div class="flex-1 bg-white  n shadow-xl p-8">
                        <h4 class="text-xl text-gray-900 font-bold">Quick Info</h4>
                        <ul class="mt-2 text-gray-700">
                            <li class="flex border-y py-2">
                                <span class="font-bold mr-2">Previous Degree(s): </span>
                                <span class="text-gray-700">Bsc Biological Sciences</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">MMIs attended as pre-med:</span>
                                <span class="text-gray-700">5</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">MMIs as an interviewer:</span>
                                <span class="text-gray-700">1</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">Mentorship experience:</span>
                                <span class="text-gray-700">Formal and informal</span>
                            </li>
                            <li class="flex border-b py-2">
                                <span class="font-bold mr-2">Applicants helped:</span>
                                <span class="text-gray-700">Several</span>
                            </li>

                        </ul>
                    </div>

                    <div class="bg-gray-100 text-gray-600 p-4 text-sm font-semibold backdrop-blur-sm">
                        <p class="my-2 uppercase">About</p>
                        <p class="text leading-7">
                            Hey, I am a first year med student at UofA. If you have questions about medical school
                            and/or practicing for medical school interviews, feel free to reach out!
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

@endsection