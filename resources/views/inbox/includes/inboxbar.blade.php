<label class="px-3">
    <input class="rounded-lg p-4 bg-gray-100 transition duration-200 focus:outline-none focus:ring-2 w-full"
        placeholder="Search..." />
</label>

<ul class="mt-6">
    @foreach($chats as $chat)
        <li class="py-5 border-b px-3 transition hover:bg-indigo-100">
            <a href="/inbox/{{auth()->user()->id}}/chat/{{$chat->id}}" class="flex justify-between items-center">
                <h3 class="text-lg font-semibold">
                    {{'Chat between ' . $chat->from_username . " and " . $chat->to_username   }}</h3>
                <p class="text-md text-gray-400">23m ago</p><br>
            </a>
        </li>
        <form action="{{ route('inbox.id', auth()->user()->id) }}" method="GET" enctype="multipart/form-data">
            <input type="text" name="id" value="{{ auth()->user()->id }}" hidden>
            @csrf
            <x-primary-button type="submit" class="w3-green ">Function</x-primary-button>

        </form>

    @endforeach
</ul>