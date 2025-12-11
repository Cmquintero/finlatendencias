@extends('layouts.app')
@section('title','Clientes')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
  <h4>Clientes</h4>
  <a href="{{ route('clientes.create') }}" class="btn btn-success">Nuevo</a>
</div>
<table class="table table-striped">
<thead><tr><th>ID</th><th>Nombre</th><th>Email</th><th>Acciones</th></tr></thead>
<tbody>
@foreach($items as $c)
<tr><td>{{ $c->id }}</td><td>{{ $c->nombre }} {{ $c->apellido }}</td><td>{{ $c->email }}</td>
<td>
  <a href="{{ route('clientes.edit', $c) }}" class="btn btn-sm btn-primary">Editar</a>
  <form action="{{ route('clientes.destroy', $c) }}" method="POST" style="display:inline">@csrf @method('DELETE')<button class="btn btn-sm btn-danger">Eliminar</button></form>
</td></tr>
@endforeach
</tbody>
</table>
{{ $items->links() }}
@endsection
