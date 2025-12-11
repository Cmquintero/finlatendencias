<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateProductosTable extends Migration{
    public function up(){
        Schema::create('productos', function(Blueprint $table){
            $table->id();
            $table->string('codigo')->unique();
            $table->string('nombre');
            $table->foreignId('proveedor_id')->constrained('proveedores')->cascadeOnDelete();
            $table->decimal('precio_compra',10,2)->default(0);
            $table->decimal('precio_venta',10,2)->default(0);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('productos'); }
}
