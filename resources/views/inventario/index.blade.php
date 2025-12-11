@extends('layouts.app')
@section('title','Inventario')
@section('content')
<h4>Inventario</h4>
<table class="table"><thead><tr><th>ID</th><th>Producto</th><th>Cantidad</th></tr></thead><tbody>
@foreach($items as $i)
<tr><td>{{ $i->id }}</td><td>{{ optional($i->producto)->nombre }}</td><td>{{ $i->cantidad }}</td></tr>
@endforeach
</tbody></table>
{{ $items->links() }}
@endsection
