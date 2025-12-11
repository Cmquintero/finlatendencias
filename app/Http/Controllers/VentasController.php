<?php
namespace App\Http\Controllers;
use App\Models\Venta;
use Illuminate\Http\Request;
class VentasController extends Controller{
    public function index(){ $items = Venta::with('cliente','detalles')->paginate(15); return view('ventas.index', compact('items')); }
    public function create(){ return view('ventas.create'); }
    public function store(Request $r){ /* Logic to create venta + detalles + update inventario */ return redirect()->route('ventas.index'); }
    public function show(Venta $venta){ return view('ventas.show', compact('venta')); }
}
