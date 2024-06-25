@extends('inbox.index')

@section('chat')


<section class="w-full px-4 flex flex-col bg-white rounded-r-3xl">
  <div class="flex justify-between items-center h-48 border-b-2 mb-8">
    <div class="flex space-x-4 items-center">
      <div class="h-12 w-12 rounded-full overflow-hidden">
        <img src="https://bit.ly/2KfKgdy" loading="lazy" class="h-full w-full object-cover" />
      </div>
      <div class="flex flex-col">
        <h3 class="font-semibold text-lg">{{auth()->user()->name}}</h3>
        <p class="text-light text-gray-400">{{auth()->user()->email}}</p>
      </div>
    </div>
    <div>
      <ul class="flex text-gray-400 space-x-4">
        <li class="w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
          </svg>
        </li>
        <li class="w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
        </li>

        <li class="w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
          </svg>
        </li>
        <li class="w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
          </svg>
        </li>
        <li class="w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
          </svg>
        </li>
      </ul>
    </div>
  </div>
  <section>
    <h1 class="font-bold text-2xl">Chat between {{$Chat->from_username}} and {{$Chat->to_username}}</h1>
    @foreach ($messages as $message)
    @if ($message->from_user == auth()->user()->id)
    <article class="mt-8 text-gray-500 leading-7 tracking-wider text-right">
      <p>{{$message->content}}</p>
      <div class="text-md italic text-gray-400">{{auth()->user()->name}}</div>
    @else
      <article class="mt-8 text-gray-500 leading-7 tracking-wider text-left">
      <p>{{$message->content}}</p>
      <div class="text-md italic text-gray-400">{{$Chat->from_username}}</div>
    @endif
  @endforeach
  </section>
  <section class="mt-6 border rounded-xl bg-gray-50 mb-3">
    <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
      <input type="text" name="from_user" value="{{ auth()->user()->id }}" hidden>
      <input type="text" name="chat_id" value="{{ $Chat->id }}" hidden>
      @csrf
      <input name="content" class="w-full bg-gray-50 p-2 rounded-xl" placeholder="Type your reply here..." rows="3"
        type="text"></>
      <div class="flex items-center justify-between p-2">

        <button type="submit" class="bg-purple-600 text-white px-6 py-2 rounded-xl">Reply</button>
      </div>

    </form>

  </section>
  @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
    </ul>
    </div>
  @endif
</section>

@endsection