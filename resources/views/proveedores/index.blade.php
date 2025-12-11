@extends('layouts.app')
@section('title','Proveedores')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4>Proveedores</h4>
  <a href="#" class="btn btn-success">Nuevo</a>
</div>
<table class="table"><thead><tr><th>ID</th><th>Nombre</th><th>Tel</th></tr></thead><tbody>
@foreach($items as $p)
<tr><td>{{ $p->id }}</td><td>{{ $p->nombre }}</td><td>{{ $p->telefono }}</td></tr>
@endforeach
</tbody></table>
{{ $items->links() }}
@endsection
