@extends(auth()->user()->usertype =='mentor' ? 'mentor.layout' : 'applicant.layout');

@section('header')
<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
  @if(auth()->user()->usertype =='applicant')
  {{ __(' Applicant Dashboard') }}
  @elseif(auth()->user()->usertype =='mentor')
  {{ __('Mentor Dashboard') }}
  @endif
</h2>
@endsection

@section('body')

<div class="max-w-[800px] mx-auto flex items-center justify-center min-h-screen m-4 mt-40 text-[#ecebf0]">
  <div
    class="w-full bg-[#231f39]/60 rounded-[6px] shadow-[0px_15px_39px_16px_rgba(52,45,91,0.65)] backdrop-blur-sm mx-2 overflow-hidden">

    <div 
                class="absolute text-[#231f39] bg-green-200 rounded-[4px] top-6 right-6 px-4 py-2 text-sm font-bold roll-in-blurred-right">
                Editing...
</div>

    <form action="/portfolio/{{ $portfolio->id }}" method="POST">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
      <div class="w-full h-[250px]">
        <img src="https://www.w3schools.com/w3images/forestbridge.jpg"
          class="w-full h-full rounded-tl-lg rounded-tr-lg">
      </div>
      <div class="flex flex-col items-center -mt-20">
        <a href="/portfolio" target="_blank" class="">
          <img src="https://talkadmission.com//storage/8/male-306408_640.png"
            class="w-40 border-6 border-white rounded-full backdrop-blur-md shadow-[0px_27px_16px_-11px_rgba(31,27,56,0.25)] transition-all duration-150 ease-in hover:scale-105 cursor-pointer slide-in-elliptic-top-fwd">
        </a>
        <h1 class="text-xl font-bold text-center">{{auth()->user()->name ?? 'John Doe'}}</h1>
        <input
          class="bg-gray-50 my-2 border border-gray-300 text-gray-900 text-center text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          name="name" type="text" placeholder="Name" value="{{ auth()->user()->name }}">

  
          <select id="med_school" name="med_school"
          class="bg-gray-50 border w-1/2 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="{{ $portfolio->med_school ?? ''}}">{{$portfolio->med_school ?? 'Studying at' }}</option>
          <option value="University of Alberta">University of Alberta</option>
          <option value="University of Calgary">University of Calgary</option>
          <option value="University of Toronto">University of Toronto</option>
          <option value="University of British Columbia">University of British Columbia</option>
          <option value="McGill University">McGill University</option>
          <option value="McMaster University">McMaster University</option>
          <option value="University of Western Ontario">University of Western Ontario</option>
          <option value="University of Manitoba">University of Manitoba</option>
          <option value="University of Saskatchewan">University of Saskatchewan</option>
        </select>

        <select id="year_of_study" name="year_of_study"
          class="bg-gray-50 border w-1/2 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="{{ $portfolio->year_of_study ?? ''}}">{{$portfolio->year_of_study ?? 'Year of medical school'}}</option>
          <option value="First year">First year</option>
          <option value="Second year">Second year</option>
          <option value="Third year">Third year</option>
          <option value="Fourth year">Fourth year</option>
        </select>
        <select id="class_of" name="class_of"
          class="bg-gray-50 border w-1/2 my-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="{{ $portfolio->class_of ?? ''}}">{{$portfolio->class_of ?? 'Class of'}}</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          <option value="2026">2026</option>
          <option value="2027">2027</option>
        </select>



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
                <input
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  name="previous_degree" type="text" value="{{ $portfolio->previous_degree ?? '' }}">
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold mr-2">MMIs attended as pre-med:</span>
                <select id="mmis_attended" name="mmis_attended"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="{{ $portfolio->mmis_attended ?? ''}}">{{$portfolio->mmis_attended ?? ''}}</option>
                  <option value="One">One</option>
                  <option value="Two">Two</option>
                  <option value="Three">Three</option>
                  <option value="Four">Four</option>
                  <option value="Five">Five</option>
                  <option value="More than five">More than five</option>
                </select>
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold mr-2">MMIs as an interviewer:</span>
                <select id="mmis_interviewed" name="mmis_interviewed"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="{{ $portfolio->mmis_interviewed ?? ''}}">{{$portfolio->mmis_interviewed ?? ''}}</option>
                  <option value="None">None</option>
                  <option value="None">Observed as assistant</option>
                  <option value="One">One</option>
                  <option value="More than one">More than one</option>
                </select>
                              </li>
              <li class="flex border-b py-2">
                <span class="font-bold mr-2">Mentorship experience:</span>

                <select id="mentorship_experience" name="mentorship_experience"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="{{ $portfolio->mentorship_experience ?? ''}}">{{$portfolio->mentorship_experience ?? ''}}</option>
                  <option value="Formal">Formal</option>
                  <option value="Formal and informal">Formal and informal</option>
                  <option value="Informal">Informal</option>
                </select>
              </li>
              <li class="flex border-b py-2">
                <span class="font-bold mr-2">Applicants helped:</span>
                <select id="applicants_helped" name="applicants_helped"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                  <option value="{{ $portfolio->applicants_helped ?? ''}}">{{$portfolio->applicants_helped ?? ''}}</option>
                  <option value="Many">Many</option>
                  <option value="Several">Several</option>
                  <option value="Few">One or two</option>
                  <option value="Starting out">Starting out</option>
                </select>
              </li>

            </ul>
          </div>

          <div class="bg-gray-100 text-gray-600 p-4 text-sm font-semibold backdrop-blur-sm">
            <p class="my-2 uppercase">About</p>
            <input
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  name="about" type="text" value="{{$portfolio->about ?? 'Write a short bio and/or about your interest in mentoring applicants'}}">
            <p class="text leading-7">

            </p>
          </div>
          <div class="bg-[#1e1a36]/70 p-4 text-sm font-semibold backdrop-blur-sm">
            <p class="my-2">TAGS</p>

          </div>
        </div>
      </div>
      <button
          class="px-4 w-full bg-green-200 rounded-[4px] py-3 text-black  transition-all duration-150 ease-in hover:bg-green-400">Submit</button>
    </form>



    @endsection