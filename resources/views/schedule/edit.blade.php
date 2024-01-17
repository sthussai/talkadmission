@extends("events.layout")



@section('content1')

<div class="w3-center    w3-panel w3-card">


  <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

  <div>
    <form action="/events/{{ $event->id }}" method="POST"
      class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">

      {{ method_field('PATCH') }}
      {{ csrf_field() }}

      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

      <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js">
      </script>

      <h2 class="w3-center">Edit Event</h2>

      <div class="w3-row w3-section" style='width:320px; '>

        Select Type:
        <label>Event</label>
        <input type="radio" name="type" value="event" checked>
        <label>Program</label>
        <input type="radio" name="type" value="program">

      </div>


      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" required name="name" type="text" placeholder="Edit Name"
            value="{{ $event->name }}">
        </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-info"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="description" type="text" placeholder="Edit Description"
            value="{{ $event->description }}">
        </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-image"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="url" type="text" placeholder="Edit URl" value="{{ $event->url }}">
        </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-dollar"></i></div>
        <div class="w3-rest">
          <input class="w3-input w3-border" name="cost" type="text" placeholder="Cost" value="{{ $event->cost }}">
        </div>
      </div>

      <div class="w3-row w3-section">
        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar"></i></div>
        <input class="w3-input w3-third w3-border" name="start_date" type="date" value="{{ $event->start_date }}"
          placeholder="Start Date">
        <input class="w3-input date w3-third w3-border" name="end_date" type="text" value="{{ $event->end_date }}"
          placeholder="End Date">
      </div>

  </div>

  <script type="text/javascript">
    $('.date').datepicker({

      format: 'mm-dd-yyyy'

    });
  </script>


  <p class="w3-center">
    <button class="w3-button w3-section w3-green w3-ripple"> Update </button>
  </p>
  </form>

  <form action="/events/{{ $event->id }}" method="POST">
    @method('DELETE')
    @csrf
    <button class="w3-button w3-section w3-red w3-ripple"> Delete {{$event->name}}?</button>
  </form>


</div>


</div>
@endsection