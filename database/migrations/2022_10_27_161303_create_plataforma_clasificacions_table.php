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
        Schema::create('plataforma_clasificacions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion')->comment('');  
            $table->bigInteger('plataforma_id')->comment('');  
            $table->timestamps();
            $table->delete();
        });
        \App\Models\PlataformaClasificacion::insert([
            [1, 'Señal Abierta', 2, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [2, 'Señal Abierta', 3, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [3, 'Cable Movistar', 2, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [5, 'DirecTV', 2, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [6, 'URL', 1, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [10, 'Formato', 5, '2021-03-06 04:51:27', '2021-03-06 04:51:27', NULL],
            [14, 'Facebook', 9, '2019-05-07 20:30:33', '2019-05-07 20:30:33', NULL],
            [15, 'Youtube', 9, '2019-05-07 20:30:33', '2019-05-07 20:30:33', NULL],
            [16, 'Twitter', 9, '2019-05-07 20:30:33', '2019-05-07 20:30:33', NULL],
            [17, 'Instagram', 9, '2019-05-07 20:30:33', '2019-05-07 20:30:33', NULL],
            [18, 'Spotify', 9, '2020-05-08 00:01:48', '2020-05-08 00:01:48', NULL],
            [20, 'LinkedIn', 9, '2020-11-30 21:38:55', '2020-11-30 21:38:55', NULL]
        ]);    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plataforma_clasificacions');
    }
};
