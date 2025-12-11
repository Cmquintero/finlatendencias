<?php
namespace App\Http\Controllers;
use App\Models\Inventario;
use App\Models\Venta;
use App\Models\Cliente;
class ReportController extends Controller{
    public function inventario(){
        $items = Inventario::with('producto')->get();
        return view('reportes.inventario', compact('items'));
    }
    public function ventas(){
        $items = Venta::with('cliente','detalles')->latest()->get();
        return view('reportes.ventas', compact('items'));
    }
    public function clientes(){
        $items = Cliente::with('ventas')->get();
        return view('reportes.clientes', compact('items'));
    }
}
