@extends('layouts.app')
@section('title','Reporte Ventas')
@section('content')
<h4>Reporte - Ventas</h4>
<table class="table"><thead><tr><th>ID</th><th>Cliente</th><th>Total</th></tr></thead><tbody>
@foreach($items as $it)
<tr><td>{{ $it->id }}</td><td>{{ optional($it->cliente)->nombre }}</td><td>{{ $it->total }}</td></tr>
@endforeach
</tbody></table>
@endsection
