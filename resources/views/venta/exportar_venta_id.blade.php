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
    <title>REPORTE</title>
  </head>
  <body>
    <h1>NOTA  VENTA</h1> 
      
    <table id="tabla1">
        <thead id="c1">
          <tr>
            <th><img src="{{'./img/logo-dental.png'}}" width="20%"  alt=""></th>
            <th>VENTA DE SERVICIOS</th>
            <th>NOTA DE VENTA:</th>V
          </tr>
        </thead id="c2">
        <tbody>   
          <tr>
            <th ></th>   
            <td>NIT: 12566767</td> 
            <td>FECHA: 12/03/2021</td>   
          </tr>    
          <tr>
            <th></th>   
            <td>DIRECCIÓN: AV. 4TO ANILLO ENTRE AV. CUMAVI Y 3 PASOS AL FRENTE C/2 </td> 
            <td>HORA: 12:10 PM</td>   
          </tr>  
          <tr>
            <th></th>   
            <td>TELEFONO: 75456766</td> 
            <td>VENDEDOR: LILIANA ROJAS</td>   
          </tr>    
          
        </tbody>
        
      </table>  
   
    <div  >
        <div  >
          <h6>PACIENTE: </h6> 

          <input type="text" name="id_paciente"  id="id_paciente" value="{{$venta->paciente->persona->nombre}} {{$venta->paciente->persona->apellido_pat}}" class="form-control" readonly >
          <p>Fecha Emsión: {{$venta->created_at}} </p>

          <div>
            <table id="servicios">
              <thead id="ser1">
                <tr>
                  <th>ITEM</th>
                  <th>SERVICIO</th>
                  <th>CANTIDAD</th>
                  <th>PRECIO</th>
                  <th>SUBTOTAL</th>
                </tr>
              </thead>
              <tbody id="ser"> 
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