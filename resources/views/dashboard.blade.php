@extends('layouts.app')
@section('title','Dashboard')

@section('content')

<div class="container">

    <h3 class="mb-4 text-center">Bienvenido al sistema <strong>Herrepuestos</strong></h3>

    {{-- Sección de módulos principales --}}
    <div class="row g-4">

        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3" style="border-radius: 12px; background:#f7f7f7;">
                <h5 class="mb-2">Clientes</h5>
                <a href="{{ route('clientes.index') }}" class="btn btn-dark w-100">Acceder</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3" style="border-radius: 12px; background:#f7f7f7;">
                <h5 class="mb-2">Proveedores</h5>
                <a href="{{ route('proveedores.index') }}" class="btn btn-dark w-100">Acceder</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3" style="border-radius: 12px; background:#f7f7f7;">
                <h5 class="mb-2">Productos</h5>
                <a href="{{ route('productos.index') }}" class="btn btn-dark w-100">Acceder</a>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card shadow-sm text-center p-3" style="border-radius: 12px; background:#f7f7f7;">
                <h5 class="mb-2">Inventario</h5>
                <a href="{{ route('inventario.index') }}" class="btn btn-dark w-100">Acceder</a>
            </div>
        </div>

    </div>

    {{-- Sección de Reportes --}}
    <h4 class="mt-5 mb-3">Reportes</h4>

    <div class="row g-3">

        <div class="col-md-4">
            <a class="btn btn-outline-dark w-100 py-2" href="{{ route('reportes.inventario') }}">
                Reporte Inventario
            </a>
        </div>

        <div class="col-md-4">
            <a class="btn btn-outline-dark w-100 py-2" href="{{ route('reportes.ventas') }}">
                Reporte Ventas
            </a>
        </div>

        <div class="col-md-4">
            <a class="btn btn-outline-dark w-100 py-2" href="{{ route('reportes.clientes') }}">
                Reporte Clientes
            </a>
        </div>

    </div>

</div>

@endsection
