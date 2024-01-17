@extends('mentor.layout')
@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
    {{ __('Mentor Dashboard') }}
</h2>
@endsection

@section('body')

<div class="flex">
    <!-- main content page -->
    <div class="w-full p-12 m-8 bg-white text-gray-900  overflow-hidden shadow-sm sm:rounded-lg">
        {{ __("You're logged in!") }}

    </div>
</div>
@endsection