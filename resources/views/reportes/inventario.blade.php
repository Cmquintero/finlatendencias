@extends('layouts.app')
@section('title','Reporte Inventario')
@section('content')
<h4>Reporte - Inventario</h4>
<table class="table"><thead><tr><th>Producto</th><th>Cantidad</th></tr></thead><tbody>
@foreach($items as $it)
<tr><td>{{ optional($it->producto)->nombre }}</td><td>{{ $it->cantidad }}</td></tr>
@endforeach
</tbody></table>
@endsection
