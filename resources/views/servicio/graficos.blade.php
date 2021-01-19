@extends('layouts.app')
@section('slider')  
<div class="container">
    <div class="row">
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day','Task'],
          @foreach($servicio as $serv)
          ['{{$serv->nombre}}, PRECIO: {{$serv->precio}} BS.',{{$serv -> id_tipo_servicio}}, {{$serv -> precio}}],
            @endforeach
        ]);

        var options = {
          title: 'TOTAL DE SERVICIOS VENDIDOS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 1800px; height: 400px;"></div>
  </body>

    </div>
</div>
@endsection