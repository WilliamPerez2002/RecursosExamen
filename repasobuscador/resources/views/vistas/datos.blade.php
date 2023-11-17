@extends('vistas/template')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>TRANSACCIÓN</th>
                <th>MONTO</th>
                <th>ID PERSONA</th>
            </tr>
        </thead>
        <tbody>
            @php
                $acum_depositos = 0;
                $acum_retiros = 0;
            @endphp
            @foreach ($cuenta as $item)
                <tr>
                    <td>{{$item['ID_TRA']}}</td>
                    <td>{{$item['TIP_TRA']}}</td>
                    <td>{{$item['MON_TRA']}}</td>
                    <td>{{$item['ID_PER']}}</td>
                </tr>
                @php
                    if ($item['TIP_TRA'] == 'DEPOSITO') {
                        # code...
                        $acum_depositos += $item['MON_TRA'];
                    }
                
                    if ($item['TIP_TRA'] == 'RETIRO') {
                        # code...
                        $acum_retiros += $item['MON_TRA'];
                    }
                    $saldo = $acum_depositos - $acum_retiros;
                @endphp
            @endforeach
            <strong>DEPOSITOS -></strong>${{$acum_depositos}}<br>
            <strong>RETIROS -></strong>${{$acum_retiros}}<br>
            <strong>SALDO -></strong> ${{$saldo}}
        </tbody>
    </table>    
@endsection