@extends('layouts.app')
@section('title','Ventas')
@section('content')
<h4>Ventas</h4>
<table class="table"><thead><tr><th>ID</th><th>Cliente</th><th>Fecha</th><th>Total</th></tr></thead><tbody>
@foreach($items as $v)
<tr><td>{{ $v->id }}</td><td>{{ optional($v->cliente)->nombre }}</td><td>{{ $v->fecha }}</td><td>{{ $v->total }}</td></tr>
@endforeach
</tbody></table>
{{ $items->links() }}
@endsection
