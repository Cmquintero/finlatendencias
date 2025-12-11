@extends('layouts.app')
@section('title','Iniciar sesión')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background:#f0f0f0;">

    <div class="card shadow-lg" style="width: 420px; border-radius: 12px;">
        <div class="card-header text-center text-white" style="background:#343a40; border-radius:12px 12px 0 0;">
            <h5 class="mb-0">HERREPUESTOS - Login</h5>
        </div>

        <div class="card-body p-4">

            @if(session('error'))
                <div class="alert alert-danger text-center">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Contraseña</label>
                    <input type="password" name="password" class="form-control" placeholder="********" required>
                </div>

                <button class="btn btn-dark w-100 mt-2">Ingresar</button>
            </form>

        </div>

        <div class="card-footer text-center" style="background:#e9e9e9; border-radius:0 0 12px 12px;">
            ¿No tienes cuenta?
            <a href="{{ route('register') }}" class="fw-bold">Crear cuenta</a>
        </div>
    </div>

</div>
@endsection
