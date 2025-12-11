<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
class ProductosController extends Controller{
    public function index(){ $items = Producto::with('proveedor')->paginate(15); return view('productos.index', compact('items')); }
    public function create(){ return view('productos.create'); }
    public function store(Request $r){ Producto::create($r->all()); return redirect()->route('productos.index'); }
    public function edit(Producto $producto){ return view('productos.edit', compact('producto')); }
    public function update(Request $r, Producto $producto){ $producto->update($r->all()); return redirect()->route('productos.index'); }
    public function destroy(Producto $producto){ $producto->delete(); return back(); }
}
