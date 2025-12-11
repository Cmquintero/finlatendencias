<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateInventarioTable extends Migration{
    public function up(){
        Schema::create('inventario', function(Blueprint $table){
            $table->id();
            $table->foreignId('producto_id')->constrained('productos')->cascadeOnDelete();
            $table->integer('cantidad')->default(0);
            $table->timestamps();
        });
    }
    public function down(){ Schema::dropIfExists('inventario'); }
}
