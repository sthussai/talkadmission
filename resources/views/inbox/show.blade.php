@extends(auth()->user()->usertype == 'mentor' ? 'mentor.layout' : 'applicant.layout');

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
  @if(auth()->user()->usertype == 'applicant')
    {{ __(' Applicant Dashboard') }}
  @elseif(auth()->user()->usertype == 'mentor')
    {{ __('Mentor Dashboard') }}
  @endif
</h2>
@endsection





@section('body')



<main class="flex w-full h-full shadow-lg rounded-3xl">
  <section class="flex flex-col w-2/12 bg-white rounded-l-3xl">
    <div class="w-16 mx-auto mt-12 mb-20 p-4 bg-indigo-600 rounded-2xl text-white">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
          d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
      </svg>
    </div>
    <nav class="relative flex flex-col py-4 items-center">
      <a href="#" class="relative w-16 p-4 bg-purple-100 text-purple-900 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
        </svg>
        <span
          class="absolute -top-2 -right-2 bg-red-600 h-6 w-6 p-2 flex justify-center items-center text-white rounded-full">3</span>
      </a>
      <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
        </svg>
      </a>
      <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </a>
      <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
        </svg>
      </a>
      <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl mb-24">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
        </svg>
      </a>
      <a href="#" class="w-16 p-4 border text-gray-700 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
      </a>
    </nav>
  </section>
  <section class="flex flex-col pt-3 w-4/12 bg-gray-50 h-full overflow-y-scroll">
    <label class="px-3">
      <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full"
        placeholder="Search..." />
    </label>

    <ul class="mt-6">
      @foreach($chats as $chat)
      <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
      <a href="/inbox/{{auth()->user()->id}}/chat/{{$chat->id}}" class="flex justify-between items-center">
        <h3 class="text-lg font-semibold">{{$chat->to_username}}</h3>
        <p class="text-md text-gray-400">23m ago</p>
      </a>
      <div class="text-md italic text-gray-400">You have been invited!</div>
      </li>
      <form action="{{ route('inbox.id', auth()->user()->id) }}" method="GET" enctype="multipart/form-data">
      <input type="text" name="id" value="{{ $user->id }}" hidden>
      @csrf
      <x-primary-button type="submit" class="w3-red ">Delete</x-primary-button>

      </form>

    @endforeach

    </ul>
  </section>
  <section class="w-6/12 px-4 flex flex-col bg-white rounded-r-3xl">
    <div class="flex justify-between items-center h-48 border-b-2 mb-8">
      <div class="flex space-x-4 items-center">
        <div class="h-12 w-12 rounded-full overflow-hidden">
          <img src="https://bit.ly/2KfKgdy" loading="lazy" class="h-full w-full object-cover" />
        </div>
        <div class="flex flex-col">
          <h3 class="font-semibold text-lg">{{$user->name}}</h3>
          <p class="text-light text-gray-400">{{$user->email}}</p>
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
      <h1 class="font-bold text-2xl">{{$Chat->to_username}}</h1>
      @foreach ($messages as $message)
      @if ($message->from_user == auth()->user()->id)
      <article class="mt-8 text-gray-500 leading-7 tracking-wider text-right">
        <p>{{$message->content}}</p>
        <div class="text-md italic text-gray-400">{{auth()->user()->name}}</div>
    @else
      <article class="mt-8 text-gray-500 leading-7 tracking-wider text-left">
      <p>{{$message->content}}</p>
      <div class="text-md italic text-gray-400">{{$Chat->to_username}}</div>
  @endif
    @endforeach
    </section>
    <section class="mt-6 border rounded-xl bg-gray-50 mb-3">
      <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
        <input type="text" name="from_user" value="{{ $user->id }}" hidden>
        <input type="text" name="to_user" value="{{ $to_users[0]->id }}" hidden>
        <input type="text" name="chat_id" value="{{ 1 }}" hidden>
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
</main>


@endsection