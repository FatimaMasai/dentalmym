 <div class="table-responsive pt-4">
  <table class="table table-bordered">
  <h1>Reporte</h1>
  <span> {{$fecha_actual}} </span>
    <thead class="thead-colored thead-primary">
      <tr>
        <th class="wd-5p">ID</th>  
        <th class="wd-7p">SERVICIO</th>
        <th class="wd-7p">PRECIO</th>
        <th class="wd-7p">TIPO SERVICIO</th> 
      </tr>
    </thead>
    <tbody>
    @foreach($servicio as $serv)
      <tr>
        <th scope="row">{{$serv ->id}}</th>
        <td>{{$serv->tiposervicio->nombre}}  </td>
        <td>{{$serv->nombre}} </td>
        <td>{{$serv->precio}} BS </td> 
   
      </tr>  
      @endforeach
    </tbody>
  </table>
</div> 