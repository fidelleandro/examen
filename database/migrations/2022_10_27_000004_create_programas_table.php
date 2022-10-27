<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment(''); 
            $table->string('descripcion')->comment('');  
            $table->bigInteger('medio_id')->unsigned()->comment('');  
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\Programa::insert([
            ['id' => 47, 'nombre' => 'Primera Fila','descripcion' => 'Notas de cultura y entretenimiento','medio_id' => 76,'created_at' => '2017-07-09 03:10:39','updated_at' => '2017-07-09 03:10:39','deleted_at' => NULL],
            ['id' => 71, 'nombre' => 'TV Perú Noticias','descripcion' => 'Noticiero general','medio_id' => 123,'created_at' => '2017-09-10 04:27:45','updated_at' => '2021-07-22 16:37:55','deleted_at' => NULL],
            ['id' => 106,'nombre' => 'La Rotativa del Aire', 'descripcion' => 'Entrevistas políticas, actualidad y cultura','medio_id' => 76,'created_at' => '2018-03-03 16:09:47','updated_at' => '2018-03-03 16:09:47','deleted_at' => NULL],
            ['id' => 126,'nombre' => 'Escape', 'descripcion' => 'Suplemento de actividades culturales, entrevi','medio_id' => 22,'created_at' => '2018-04-02 15:06:31','updated_at' => '2018-04-02 15:06:31','deleted_at' => NULL],
            ['id' => 142,'nombre' => 'Qué hacer', 'descripcion' => 'Programa de actualidad y agenda','medio_id' => 64,'created_at' => '2018-06-05 23:04:54','updated_at' => '2018-06-05 23:04:54','deleted_at' => NULL],
            ['id' => 143,'nombre' => 'Conexión', 'descripcion' => 'Actualidad y entrevistas.','medio_id' => 76,'created_at' => '2018-06-11 20:23:49','updated_at' => '2020-11-10 00:47:22','deleted_at' => NULL],
            ['id' => 203,'nombre' => 'Entre libros', 'descripcion' => 'Programa de entrevistas a autores','medio_id' => 64,'created_at' => '2019-02-04 21:50:19','updated_at' => '2019-02-04 21:50:19','deleted_at' => NULL],
            ['id' => 368,'nombre' => 'Diálogo abierto', 'descripcion' => 'Programa de actualidad','medio_id' => 123,'created_at' => '2020-03-25 19:44:30','updated_at' => '2020-03-25 19:44:30','deleted_at' => NULL],
            ['id' => 710,'nombre' => 'Claro y Sencillo', 'descripcion' => 'Consejos económicos','medio_id' => 76,'created_at' => '2021-03-06 14:48:03','updated_at' => '2021-07-09 16:31:27','deleted_at' => NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas');
    }
};
