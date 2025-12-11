<?php
namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;
class ProveedoresController extends Controller{
    public function index(){ $items = Proveedor::paginate(15); return view('proveedores.index', compact('items')); }
    public function create(){ return view('proveedores.create'); }
    public function store(Request $r){ Proveedor::create($r->all()); return redirect()->route('proveedores.index'); }
    public function edit(Proveedor $proveedor){ return view('proveedores.edit', compact('proveedor')); }
    public function update(Request $r, Proveedor $proveedor){ $proveedor->update($r->all()); return redirect()->route('proveedores.index'); }
    public function destroy(Proveedor $proveedor){ $proveedor->delete(); return back(); }
}
