<?php
namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;
class ClientesController extends Controller{
    public function index(){ $items = Cliente::paginate(15); return view('clientes.index', compact('items')); }
    public function create(){ return view('clientes.create'); }
    public function store(Request $r){ Cliente::create($r->all()); return redirect()->route('clientes.index')->with('success','Cliente creado'); }
    public function show(Cliente $cliente){ return view('clientes.show', compact('cliente')); }
    public function edit(Cliente $cliente){ return view('clientes.edit', compact('cliente')); }
    public function update(Request $r, Cliente $cliente){ $cliente->update($r->all()); return redirect()->route('clientes.index'); }
    public function destroy(Cliente $cliente){ $cliente->delete(); return back(); }
}
