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
            $table->bigInteger('cliente_id')->unsigned()->comment('');
            $table->text('observacion')->comment('');
            $table->tinyInteger('tipoPublico',4)->comment('');
            $table->tinyInteger('tipoObjetivo',4)->comment('');
            $table->tinyInteger('tipoAudiencia',4)->comment('');
            $table->tinyInteger('interesPublico',4)->comment('');
            $table->tinyInteger('novedad',4)->comment('');
            $table->tinyInteger('actualidad',4)->comment('');
            $table->tinyInteger('autoridadCliente',4)->comment('');
            $table->tinyInteger('mediaticoCliente',4)->comment('');
            $table->tinyInteger('autoridadVoceros',4)->comment('');
            $table->tinyInteger('mediaticoVoceros',4)->comment(''); 
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')
                       ->references('id')
                       ->on('clientes')
                       ->onCascade('delete');
        });
        \App\Models\Campaign::insert([
            ['id' => 448, 
             'titulo' => 'Proyecto: Agente de Prensa 2019',
             'fechaFin' => '2019-05-31',
             'cliente_id' => 32,
             'observacion' => 'Difusión en medios sobre el proyecto financiado por Innóvate Perú',
             'tipoPublico' => 2,
             'tipoObjetivo' => 1,
             'tipoAudiencia' => 4,
             'interesPublico' => 3,
             'novedad' => 4,
             'actualidad' => 5,
             'autoridadCliente' => 5,
             'mediaticoCliente' => 4,
             'autoridadVoceros' => 5,
             'mediaticoVoceros' => 4,
             'created_at' => '2019-05-17 14:26:43',
             'updated_at' => '2021-05-30 02:14:16',
             'deleted_at' => NULL
            ],
            ['id' => 675, 
             'titulo' => 'Book Media',
             'fechaFin' => '2020-02-01',
             'cliente_id' => 32,
             'observacion' => 'difundir',
             'tipoPublico' => 2,
             'tipoObjetivo' => 1,
             'tipoAudiencia' => 1,
             'interesPublico' => 3,
             'novedad' => 4,
             'actualidad' => 3,
             'autoridadCliente' => 3,
             'mediaticoCliente' => 3,
             'autoridadVoceros' => 4,
             'mediaticoVoceros' => 3,
             'created_at' => '2019-11-06 20:02:11',
             'updated_at' => '2019-11-06 20:04:16', 
             'deleted_at' => NULL
            ],
            ['id' => 798, 
             'titulo' => 'En voz alta: Audioteca',
             'fechaFin' => '2020-12-30',
             'cliente_id' => 59,
             'observacion' => 'Camapaña cultural-social',
             'tipoPublico' => 2,
             'tipoObjetivo' => 2,
             'tipoAudiencia' => 1,
             'interesPublico' => 3,
             'novedad' => 5,
             'actualidad' => 5,
             'autoridadCliente' => 4,
             'mediaticoCliente' => 3,
             'autoridadVoceros' => 4,
             'mediaticoVoceros' => 3,
             'created_at' => '2020-04-23 03:17:02',
             'updated_at' => '2021-05-26 00:07:45',
             'deleted_at' => NULL
            ],
            ['id' => 823, 
             'titulo' => 'Booktrailer.pe',
             'fechaFin' => '2020-06-21',
             'cliente_id' => 59,
             'observacion' => 'Difundir la labor de booktrailer',
             'tipoPublico' => 2,
             'tipoObjetivo' => 1,
             'tipoAudiencia' => 4,
             'interesPublico' => 4,
             'novedad' => 3,
             'actualidad' => 3,
             'autoridadCliente' => 3,
             'mediaticoCliente' => 4,
             'autoridadVoceros' => 3,
             'mediaticoVoceros' => 3,
             'created_at' => '2020-05-21 17:52:58',
             'updated_at' => '2020-05-21 17:52:58',
             'deleted_at' => NULL
            ],
            ['id' => 1360,
             'titulo' => 'Fiestas Patrias',
             'fechaFin' => '2021-07-31',
             'cliente_id' => 59,
             'observacion' => 'Entrevista',
             'tipoPublico' => 2,
             'tipoObjetivo' => 1,
             'tipoAudiencia' => 1,
             'interesPublico' => 5,
             'novedad' => 5,
             'actualidad' => 5,
             'autoridadCliente' => 3,
             'mediaticoCliente' => 2,
             'autoridadVoceros' => 2,
             'mediaticoVoceros' => 2,
             'created_at' => '2021-07-26 19:46:52',
             'updated_at' => '2021-07-26 20:30:19',
             'deleted_at' => NULL
             ]
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
