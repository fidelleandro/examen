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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->comment('');
            $table->date('fechaFin')->comment('');
            $table->bigInteger('cliente_id')->comment('');
            $table->text('observacion',4)->comment('');
            $table->tinyInt('tipoPublico',4)->comment('');
            $table->tinyInt('tipoObjetivo',4)->comment('');
            $table->tinyInt('tipoAudiencia',4)->comment('');
            $table->tinyInt('interesPublico',4)->comment('');
            $table->tinyInt('novedad',4)->comment('');
            $table->tinyInt('actualidad',4)->comment('');
            $table->tinyInt('autoridadCliente',4)->comment('');
            $table->tinyInt('mediaticoCliente',4)->comment('');
            $table->tinyInt('autoridadVoceros',4)->comment('');
            $table->tinyInt('mediaticoVoceros',4)->comment(''); 
            $table->timestamps();
            $table->delete();
            // $table->foreign('cliente_id')
            //            ->references('id')
            //            ->on('roles')
            //            ->onCascade('delete');
        });
        \App\Models\Campaign::insert([
            [448, 'Proyecto: Agente de Prensa 2019', '2019-05-31', 32, 'Difusión en medios sobre el proyecto financiado por Innóvate Perú', 2, 1, 4, 3, 4, 5, 5, 4, 5, 4, '2019-05-17 14:26:43', '2021-05-30 02:14:16', NULL],
            [675, 'Book Media', '2020-02-01', 32, 'difundir', 2, 1, 1, 3, 4, 3, 3, 3, 4, 3, '2019-11-06 20:02:11', '2019-11-06 20:04:16', NULL],
            [798, 'En voz alta: Audioteca', '2020-12-30', 59, 'Camapaña cultural-social', 2, 2, 1, 3, 5, 5, 4, 3, 4, 3, '2020-04-23 03:17:02', '2021-05-26 00:07:45', NULL],
            [823, 'Booktrailer.pe', '2020-06-21', 59, 'Difundir la labor de booktrailer', 2, 1, 4, 4, 3, 3, 3, 4, 3, 3, '2020-05-21 17:52:58', '2020-05-21 17:52:58', NULL],
            [1360, 'Fiestas Patrias', '2021-07-31', 59, 'Entrevista', 2, 1, 1, 5, 5, 5, 3, 2, 2, 2, '2021-07-26 19:46:52', '2021-07-26 20:30:19', NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
};
