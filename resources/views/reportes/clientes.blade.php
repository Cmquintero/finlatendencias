@extends('layouts.app')
@section('title','Reporte Clientes')
@section('content')
<h4>Reporte - Clientes</h4>
<table class="table"><thead><tr><th>Cliente</th><th>Compras</th></tr></thead><tbody>
@foreach($items as $it)
<tr><td>{{ $it->nombre }}</td><td>{{ $it->ventas->count() }}</td></tr>
@endforeach
</tbody></table>
@endsection
