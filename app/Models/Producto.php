<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Producto extends Model{
    protected $fillable = ['codigo','nombre','proveedor_id','precio_compra','precio_venta'];
    public function proveedor(){ return $this->belongsTo(Proveedor::class); }
    public function inventario(){ return $this->hasOne(Inventario::class); }
}
