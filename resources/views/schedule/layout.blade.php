<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            @if(auth()->user()->usertype =='applicant')
            {{ __(' Applicant Dashboard') }}
            @endif
            @if(auth()->user()->usertype =='mentor')
            {{ __('Mentor Dashboard') }}
            @endif
        </h2>
    </x-slot>
    <!-- page -->
    <x-slot name="body">

        <div class="max-w-7xl p-12 m-8 bg-white text-gray-900  overflow-hidden shadow-sm sm:rounded-lg">
            <div class="w3-center w3-large w3-bar w3-padding">
                <a class="w3-button w3-round w3-dark-grey" href="/dashboard">Home</a>
                <a class="w3-button w3-round w3-dark-grey" href="/appointments/create">Edit Schedule</a>
            </div>
            @yield('content1')
        </div>


    </x-slot>
</x-app-layout>