<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        font-family: Arial, sans-serif; 
        font-size: 17px;
        /*font-family: SourceSansPro;*/
        }
 
 
        #datos{
        float: left;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 15px; 
        /*text-align: justify;*/
        } 
 
        #encabezado{
        text-align: center;
        margin-left: 35%;
        margin-right: 35%;
        font-size: 10px;
        font-style: oblique
        }
 
        #fact{
        /*position: relative;*/
        float: right;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 20px;
        padding:35px;
        background:#00587a;
        color:white;
        
        }
 
        section{
        clear: left; 
        }
 
        #cliente{
        text-align: left;
        }
 
        #facliente{
        width: 40%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }
 
        #fac, #fv, #fa{ 
        color: #FFFFFF;
        font-size: 15px; 
        }
 
        #facliente thead{
        padding: 20px;
        background:#D2691E;
        text-align: left;
        border-bottom: 1px solid #ffffff;  
        }
 
        #facvendedor{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        }
 
        #facvendedor thead{
        padding: 20px;
        background: #D2691E;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        }
 
        #facproducto{
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
        font-size:14px; 
        }
        h4{ 
        background: #105e62;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        padding: 12px;
        color:white;

        }
        #facproducto thead{
        padding: 20px;
        background: #00587a;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;  
        
        }
        table, thead, tr,td #empresa{
            width:100%; 
            text-align:justify;
            border-collapse: collapse;
            border-spacing: 0;
            /* border:1px solid #000000;
            border-collapse: collapse; */ 
        }
        #nota{
            text-align:center;
            background-color:#00587a;
            color:white;
            border: 3px solid #757171;   
            
        }
        .info{
            font-size:10px;
            text-align:center;
            color:#757171;
        }
        .nota1{
            font-size:10px;
            text-align:right; 
            color:#757171;
            

        } 
        #vent-serv{
            text-align:center;
        }
        .datos-cli{
            font-size:14px;
            text-align:left;
            padding-right:320px;
        }
        .detalle{
            text-align:right;
            padding:12px;
        }
        .serv-titulo{
            padding:12px;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        } 
    </style>  
    <title>REPORTE</title>
  </head>
  <body>  
    <div id="empresa">
        <table>
            <thead>
                <tr>
                    <td><img src="{{'./img/logo-dental.png'}}" width="100px" alt="" id="imagen"> </td>
                    <td id="vent-serv"> <b>VENTA DE SERVICIOS</b></td>
                    <td id="nota"><b>NIT: 12677678</b></td>
                </tr>
                <tr>
                    <td>CLINICA DENTAL M&M</td>
                    <td class="info">AV. 4TO ANILLO ENTRE AV. CUMAVI Y 3 PASOS AL FRENTE C/2  </td>
                    <td class="nota1">{{$venta->created_at}}</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="info">TELEFONO: 75303448  </td>
                    <td class="nota1">Vendedor: Fatima Chamo</td>
                </tr>
            </thead>
        </table>
    </div>
        <hr>
        <h4><b>DATOS DEL CLIENTE</b></h4> 
    <table border=”1” rules=”groups”>
 
        
        <br>
        <thead>
            <tr>
                <td><b>Nombre:</b></td>
                <td class="datos-cli">{{$venta->paciente->persona->nombre}}  {{$venta->paciente->persona->apellido_pat}} {{$venta->paciente->persona->apellido_mat}}</td> 
            </tr>
            <tr>
                <td><b>Dirección:</b></td>
                <td class="datos-cli">{{$venta->paciente->persona->direccion}}</td> 
            </tr>
            <tr>
                <td><b>Telefono:</b></td>
                <td class="datos-cli">{{$venta->paciente->persona->celular}}</td> 
            </tr>
            <tr>
                <td><b>Email:</b></td>
                <td class="datos-cli">{{$venta->paciente->persona->email}}</td> 
            </tr>
        </thead>   
    </table>  
        <section> 
            <div>
                <table class="table table-bordered table-striped table-sm"  id="facproducto">
                    <thead>
                        <tr id="fa">
                        <th class="serv-titulo">ITEM</th>
                        <th class="serv-titulo">SERVICIO</th>
                        <th class="detalle">CANTIDAD</th>
                        <th class="detalle">PRECIO</th>
                        <th class="detalle">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($item=1)
                        @foreach($detalle as $detall)  
                        <tr>
                        <th> {{$item}} </th>   
                        <td> {{$detall->servicio->nombre}} </td> 
                        <td class="detalle"> {{$detall->cantidad}} </td> 
                        <td class="detalle"> {{$detall->servicio->precio}}</td> 
                        <td class="detalle"> {{$detall->cantidad * $detall->servicio->precio}} Bs.  </td>  
                        </tr>    
                        @php($item++)
                        @endforeach 
                    </tbody>
                    <tfoot> 
                        <tr>
                            <th  colspan="4"><p align="right">TOTAL PAGAR:</p></th>
                            <td><p align="right">{{$total_pagar}} BS.</p></td>

                        </tr> 
                    </tfoot>
                </table>
            </div>
        </section>  
        <br> 
        
        <footer>
            <!--puedes poner un mensaje aqui-->
            <div id="datos">
                <p id="encabezado">
                    <b>dentalmym.com</b><br>Telefono:(+591)75304552<br>Email:info@dentalmym.com
                </p>
            </div>
        </footer>


    
    
  </body>
</html>