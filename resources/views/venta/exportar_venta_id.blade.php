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
    <h1>NOTA  VENTA</h1>
    <img src="{{'./img/logo-dental.png'}}" width="60" height="60" alt="">
   
    <div  >
        <div  >
          <h6>PACIENTE: </h6> 

          <input type="text" name="id_paciente"  id="id_paciente" value="{{$venta->paciente->persona->nombre}} {{$venta->paciente->persona->apellido_pat}}" class="form-control" readonly >
          <p>Fecha Emsión: {{$venta->created_at}} </p>

          <div>
            <table >
              <thead>
                <tr>
                  <th>ITEM</th>
                  <th>SERVICIO</th>
                  <th>CANTIDAD</th>
                  <th>PRECIO</th>
                  <th>SUBTOTAL</th>
                </tr>
              </thead>
              <tbody> 
                @php($item=1)
                @foreach($detalle as $detall)  
                <tr>
                <th> {{$item}} </th>   
                <td> {{$detall->servicio->nombre}} </td> 
                <td> {{$detall->cantidad}} </td> 
                <td> {{$detall->servicio->precio}}</td> 
                <td> {{$detall->cantidad * $detall->servicio->precio}} Bs.  </td>  
                </tr>    
                @php($item++)
                @endforeach 
                
              </tbody>
              
            </table>
          </div> 
          <div>
              <div>
                  <div></div>
                  <div>
                  <label><b>TOTAL A PAGAR: {{$total_pagar}} .BS</b></label>
                  </div>
              </div>
          </div> 
     
        </div> 
      </div> 
    
  </body>
</html>