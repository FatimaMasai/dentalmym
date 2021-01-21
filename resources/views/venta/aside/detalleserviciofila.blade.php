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
        <input id="total" type="hidden" name="total" value="{{$total}}">
        <strong>{{$total}}</strong>

    </td>
</tr>
