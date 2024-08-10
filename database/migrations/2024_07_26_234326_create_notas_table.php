<?php
use Illuminate\Database\Migrations\Migration;  
use Illuminate\Database\Schema\Blueprint;  
use Illuminate\Support\Facades\Schema;  

class CreateNotasTable extends Migration  
{  
    /**  
     * Run the migrations.  
     *  
     * @return void  
     */  
    public function up()  
    {  
        Schema::create('notas', function (Blueprint $table) {  
            $table-> increments('id');  
            $table->string('titulo'); // Título de la nota  
            $table->string('contenido'); // Contenido de la nota  
            $table->timestamps(); // Añade columnas "created_at" y "updated_at"  
             // Referencia a la tabla "usuarios" (opcional)  
        });  
    }  

    /**  
     * Reverse the migrations.  
     *  
     * @return void  
     */  
    public function down()  
    {  
        Schema::dropIfExists('notas');  
    }  
}