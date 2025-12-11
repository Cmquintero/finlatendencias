@extends('layouts.app')
@section('title','Productos')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4>Productos</h4>
  <a href="#" class="btn btn-success">Nuevo</a>
</div>
<table class="table"><thead><tr><th>ID</th><th>Código</th><th>Nombre</th><th>Proveedor</th></tr></thead><tbody>
@foreach($items as $p)
<tr><td>{{ $p->id }}</td><td>{{ $p->codigo }}</td><td>{{ $p->nombre }}</td><td>{{ optional($p->proveedor)->nombre }}</td></tr>
@endforeach
</tbody></table>
{{ $items->links() }}
@endsection
