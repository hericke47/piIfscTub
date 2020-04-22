<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href= '{{asset("assets/fullcalendar/packages/core/main.css")}}' rel='stylesheet' />
<link href=' {{asset("assets/fullcalendar/packages/daygrid/main.css")}}' rel='stylesheet' />
<link href=' {{asset("assets/fullcalendar/packages/timegrid/main.css")}}' rel='stylesheet' />
<link href=' {{asset("assets/fullcalendar/packages/list/main.css")}}' rel='stylesheet' />
<link href=' {{asset("assets/fullcalendar/csscalendar/style.blade.css")}}' rel='stylesheet' />




</head>
<body>
  <div id='wrap'>

    <div id='external-events'>
      <h4>Eventos Arrastáveis</h4>

      <div id='external-events-list'>
        <div class='fc-event'>Evento 1</div>
        <div class='fc-event'>Evento 2</div>
        <div class='fc-event'>Evento 3</div>
        <div class='fc-event'>Evento 4</div>
        <div class='fc-event'>Evento 5</div>
      </div>

      <p>
        <input type='checkbox' id='drop-remove' />
        <label for='drop-remove'>Remover após Arrastar</label>
      </p>
    </div>

    <div id='calendar' data-route-load-events="{{ route ('routeLoadEvents')}}"></div>

    <div style='clear:both'></div>

  </div>

  <script src='{{asset("assets/fullcalendar/packages/core/main.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/jscalendar/calendar.blade.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/packages/interaction/main.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/packages/daygrid/main.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/packages/timegrid/main.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/packages/list/main.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/jscalendar/script.blade.js")}}'></script>
  <script src='{{asset("assets/fullcalendar/packages/core/locales-all.js")}}'></script>

  
  </body>
</html>
