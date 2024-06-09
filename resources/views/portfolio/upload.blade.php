@extends('mentor.layout')
@section('header')
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Mentor Dashboard') }}
        </h2>
        @endsection

@section('body')


        <!-- main content page -->
        <div class="w-full p-12 m-8 bg-white text-gray-900  overflow-hidden shadow-sm sm:rounded-lg">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif




            <form action="{{ route('storeMedia') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" id="image" name="image" />
                <br>
                <x-primary-button type="submit">Upload</x-primary-button>
            </form>



            @foreach($mediaItems as $mediaItem)
            <div>
                <div><img src="{{$mediaItem->getFullUrl()}}" width="120px"></div>
            </div>
            <form action="{{ route('addAvatar') }}" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value="{{ $mediaItem->id }}" hidden>
                @csrf
                <x-primary-button type="submit" class="w3-light-green">Use as avatar</x-primary-button>
            </form>
            <form action="{{ route('deleteMedia') }}" method="POST" enctype="multipart/form-data">
                <input type="text" name="id" value="{{ $mediaItem->id }}" hidden>
                @csrf
                <x-primary-button type="submit" class="w3-red ">Delete</x-primary-button>

            </form>

            @endforeach


        </div>

        @endsection