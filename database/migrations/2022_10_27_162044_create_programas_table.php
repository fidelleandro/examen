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
            $table->bigInteger('medio_id')->comment('');  
            $table->timestamps();
            $table->delete();
        });
        \App\Models\Programa::insert([
            [47, 'Primera Fila', 'Notas de cultura y entretenimiento', 76, '2017-07-09 03:10:39', '2017-07-09 03:10:39', NULL],
            [71, 'TV Perú Noticias', 'Noticiero general', 123, '2017-09-10 04:27:45', '2021-07-22 16:37:55', NULL],
            [106, 'La Rotativa del Aire', 'Entrevistas políticas, actualidad y cultura', 76, '2018-03-03 16:09:47', '2018-03-03 16:09:47', NULL],
            [126, 'Escape', 'Suplemento de actividades culturales, entrevi', 22, '2018-04-02 15:06:31', '2018-04-02 15:06:31', NULL],
            [142, 'Qué hacer', 'Programa de actualidad y agenda', 64, '2018-06-05 23:04:54', '2018-06-05 23:04:54', NULL],
            [143, 'Conexión', 'Actualidad y entrevistas.', 76, '2018-06-11 20:23:49', '2020-11-10 00:47:22', NULL],
            [203, 'Entre libros', 'Programa de entrevistas a autores', 64, '2019-02-04 21:50:19', '2019-02-04 21:50:19', NULL],
            [368, 'Diálogo abierto', 'Programa de actualidad', 123, '2020-03-25 19:44:30', '2020-03-25 19:44:30', NULL],
            [710, 'Claro y Sencillo', 'Consejos económicos', 76, '2021-03-06 14:48:03', '2021-07-09 16:31:27', NULL]
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
