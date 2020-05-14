

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href='{{asset('/assets/fullcalendar/packages/core/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/assets/fullcalendar/packages/daygrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/assets/fullcalendar/packages/timegrid/main.css')}}' rel='stylesheet' />
    <link href='{{asset('/assets/fullcalendar/packages/list/main.css')}}' rel='stylesheet' />

    <link href='{{asset('/assets/fullcalendar/css/style.css')}}' rel='stylesheet' />


    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>


    @include('../welcome')
    @include('fullcalendar.modal-calendar')
    @include('fullcalendar.modal-fastEvents')

  <div id='wrap'>

    <div id='external-events'>
      <h4>Eventos Rápidos</h4>

      <div id='external-events-list'>

        @if($fastEvents)
            @foreach($fastEvents as $fastEvent)
                <div 
                style="padding: 4px; border: 1px solid {{ $fastEvent->color }}; background-color: {{ $fastEvent->color}};"
                class='fc-event' 
                data-event='{ "id" : "{{ $fastEvent->id }}", "title" : "{{ $fastEvent->title }}", "color" : "{{ $fastEvent->color }}", "start" : "{{ $fastEvent->start }}", "end" : "{{ $fastEvent->end }}" }'>
                    {{ $fastEvent->title }}
                </div>
            @endforeach
        @endif
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>remover após arrastar</label>
        <button class="btn btn-sm btn-success" id="newFastEvent">Criar Novo evento</button>
      </p>
    </div> 


    <div 
        id='calendar' 
        data-route-load-events="{{ route('routeLoadEvents') }}"
        data-route-event-update="{{ route('routeEventUpdate') }}"
        data-route-event-store="{{ route('routeEventStore') }}"
        data-route-event-delete="{{ route('routeEventDelete') }}" 

        data-route-fast-event-delete="{{ route('routeFastEventDelete') }}" 
        data-route-fast-event-update="{{ route('routeFastEventUpdate') }}" 
        data-route-fast-event-store="{{ route('routeFastEventStore') }}" 


    ></div>

    <div style='clear:both'></div>

  </div>
  <script src='{{asset('/assets/fullcalendar/packages/core/main.js')}}'></script>
    <script src='{{asset('/assets/fullcalendar/packages/interaction/main.js')}}'></script>
    <script src='{{asset('/assets/fullcalendar/packages/daygrid/main.js')}}'></script>
    <script src='{{asset('/assets/fullcalendar/packages/timegrid/main.js')}}'></script>
    <script src='{{asset('/assets/fullcalendar/packages/list/main.js')}}'></script>

    <script src='{{asset('/assets/fullcalendar/packages/core/locales-all.js')}}'></script>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    
    <script src='{{asset('/assets/fullcalendar/js/script.js')}}'></script>

    <script src='{{asset('/assets/fullcalendar/js/calendar.js')}}'></script>
    
</body>
</html>
