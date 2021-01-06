<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        h1{
            text-align: center;
        }
        span{
            text-align: right;
        }
        table{
            width: 100%;
            border: 2px solid black;
            border-collapse: collapse;
        } 
        table, th, td {
            border: 1px solid black;
            text-align: left;
            }
        
    </style>  
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Reporte Venta</h1>
    <img src="{{'./img/logo-dental.png'}}" width="60" height="60" alt="">
    <span> {{$fecha_actual}} </span>
    <table>
        <thead>
        <tr>
            <th>ID</th>  
            <th>PACIENTE</th>
            <th>APELLIDOS</th>
            <th>ALERGIA</th>  
        </tr>
        </thead>
        <tbody>
        @foreach($venta as $vent)
        <tr>
            <td>{{$vent ->id}}</td>
            <td>{{$vent->paciente->persona->nombre}}  </td>
            <td>{{$vent->paciente->persona->apellido_pat}}  </td>
            <td>{{$vent->paciente->alergia}} </td> 
        </tr>  
        @endforeach
        </tbody>
    </table>
    
  </body>
</html>