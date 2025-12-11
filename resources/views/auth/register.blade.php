@extends('layouts.app')
@section('title','Registro')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-4">
    <div class="card">
      <div class="card-header bg-success text-white">Registrar Usuario</div>
      <div class="card-body">
        @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif
        <form method="POST" action="{{ route('register.post') }}">@csrf
          <div class="mb-3"><label>Nombre</label><input type="text" name="name" class="form-control" required></div>
          <div class="mb-3"><label>Email</label><input type="email" name="email" class="form-control" required></div>
          <div class="mb-3"><label>Password</label><input type="password" name="password" class="form-control" required></div>
          <button class="btn btn-success w-100">Registrar</button>
        </form>
      </div>
      <div class="card-footer"><a href="{{ route('login') }}">Volver al login</a></div>
    </div>
  </div>
</div>
@endsection
