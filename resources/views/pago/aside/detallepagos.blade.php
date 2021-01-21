<h6>DETALLE PAGOS</h6>
<div class="table" id="detallepagostable">
    <table class="table table-bordered">
        <thead class="thead-colored thead-primary">
            <tr>

            <th class="wd-5p">ITEM</th>
            <th>FECHA</th>
            <th class="wd-7p">SALDO ANTERIOR</th>
            <th class="wd-7p">PAGO</th>
            <th class="wd-7p">SALDO</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagos as $pago)
                <tr>
                <th scope="row">{{$pago ->id}}</th>
                <td>{{$pago->created_at}}</td>
                <td>{{$pago->saldoanterior}}</td>
                <td>{{$pago->pago}}</td>
                <td>{{$pago->saldo}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
