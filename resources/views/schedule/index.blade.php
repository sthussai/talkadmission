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

<div class="w3-content w3-panel">
  <h1>Schedule</h1>

  <div class="max-w-7xl p-12 m-8 bg-white text-gray-900  overflow-hidden shadow-sm sm:rounded-lg">
    <div class="w3-center w3-large w3-bar w3-padding">
      <a class="w3-button w3-round w3-dark-grey" href="/schedule">Home</a>
      <a class="w3-button w3-round w3-dark-grey" href="/schedule/create">View Schedule</a>
    </div>
    @yield('content1')
  </div>
</div>









@endsection