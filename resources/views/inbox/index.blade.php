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
    @include('inbox.includes.iconbar')
  </section>
  <section class="flex flex-col pt-3 sm:visible md:w-3/12 bg-gray-50 h-full overflow-y-scroll">
    @include('inbox.includes.inboxbar')

  </section>

  @yield('chat')

</main>


@endsection