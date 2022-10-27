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
        Schema::create('plan_medios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('campaign_id')->comment('');
            $table->string('nombre')->comment('');
            $table->string('descripcion')->comment('');
            $table->tinyInt('status',4)->comment('');     
            
            $table->timestamps();
            $table->delete();
        });

        \App\Models\PlanMedio::insert([
            [516, 448, 'Agente de Prensa 2019', 'Proyecto financiado por Innovate Perú y PUCP', 1, '2019-05-17 14:27:20', '2019-05-17 14:27:20', NULL],
            [780, 675, 'Book Media', 'Difundir', 1, '2019-11-06 20:03:08', '2019-11-06 20:03:08', NULL],
            [943, 798, 'En voz alta: Audioteca para personas con disc', 'Publicar notas en webs y gestionar entrevista', 1, '2020-04-23 03:22:19', '2020-04-23 03:22:19', NULL],
            [977, 823, 'Difusión Booktrailer.pe', 'Difundir nota o entrevistas de la herramienta', 1, '2020-05-21 17:55:11', '2020-05-21 17:55:11', NULL],
            [1651, 1360, 'Fiestas patrias', 'Entrevistas', 1, '2021-07-26 20:01:01', '2021-07-26 20:12:44', NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_medios');
    }
};
