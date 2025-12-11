<?php
namespace App\Http\Controllers;
use App\Models\Inventario;
use Illuminate\Http\Request;
class InventarioController extends Controller{
    public function index(){ $items = Inventario::with('producto')->paginate(15); return view('inventario.index', compact('items')); }
    public function edit(Inventario $inventario){ return view('inventario.edit', compact('inventario')); }
    public function update(Request $r, Inventario $inventario){ $inventario->update($r->all()); return redirect()->route('inventario.index'); }
}
