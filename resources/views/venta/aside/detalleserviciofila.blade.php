<tr>
    <td class="text-right">
        <input type="hidden" name="id_servicio[]" value="{{$servicio->id}}">
        {{$servicio->id}}
    </td>
    <td>
        {{$servicio->nombre}}
    </td>
    <td class="text-right">
        <input type="hidden" name="cantidad[]" value="{{$cantidad}}">
        {{$cantidad}}</td>
    <td>
        <input type="hidden" name="precio[]" value="{{$servicio->precio}}">
        {{$servicio->precio}}
    </td>
    <td class="text-right">
        <input type="hidden" name="subtotal[]" value="{{$subtotal}}">
        {{$subtotal}}
    </td>
</tr>
<tr>
    <td colspan="4" class="text-right">
        <strong> TOTAL:</strong>
    </td>
    <td class="text-right">
        <input id="acumulado" type="hidden" name="acumulado[]" value="{{$acumulado}}"><strong>{{$acumulado}}</strong>
        
    </td>
</tr>