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
        Schema::create('medio_plataformas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('medio_id')->unsigned()->comment('');
            $table->bigInteger('idPlataformaClasificacion')->unsigned()->comment('');
            $table->string('valor')->comment('');
            $table->integer('alcance')->comment('');  
            $table->string('observacion')->comment('');  
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('medio_id')
                       ->references('id')
                       ->on('medios')
                       ->onCascade('delete');
            $table->foreign('idPlataformaClasificacion')
                       ->references('id')
                       ->on('plataforma_clasificacions')
                       ->onCascade('delete');               
        });
        \App\Models\MedioPlataforma::insert([
            ['id' => 3, 
             'medio_id' => 76, 
             'idPlataformaClasificacion' => 3,
             'valor' => '10',
             'alcance' => 750000,
             'observacion' => '',
             'created_at' => '2017-07-09 03:19:04',
             'updated_at' => '2017-07-09 03:19:04',
             'deleted_at' => NULL
            ],
            ['id' => 4, 
             'medio_id' => 76, 
             'idPlataformaClasificacion' => 2, 
             'valor' => '89.7',
             'alcance' => 871428,
             'observacion' => '',
             'created_at' => '2017-07-09 03:31:53',
             'updated_at' => '2017-07-09 03:31:53',
             'deleted_at' => NULL
            ],
            ['id' => 5, 
             'medio_id' => 22, 
             'idPlataformaClasificacion' => 6, 
             'valor' => 'www.elcomercio.pe',
             'alcance' => 600000,
             'observacion' => 'El Comercio',
             'created_at' => '2017-07-13 03:48:56',
             'updated_at' => '2021-05-20 16:51:42',
             'deleted_at' => NULL
            ],
            ['id' => 6, 
             'medio_id' => 22, 
             'idPlataformaClasificacion' => 10,
             'valor' => 'Página interior',
             'alcance' => 321993,
             'observacion' => '',
             'created_at' => '2017-07-13 03:48:56',
             'updated_at' => '2017-09-10 02:52:23',
             'deleted_at' => NULL
            ],
            ['id' => 54,
             'medio_id' => 64, 
             'idPlataformaClasificacion' => 2, 
             'valor' => '103.9FM',
             'alcance' => 576000,
             'observacion' => '',
             'created_at' => '2017-09-10 03:53:03',
             'updated_at' => '2017-09-10 03:53:03',
             'deleted_at' => NULL
            ],
            ['id' => 59,
             'medio_id' => 123,
             'idPlataformaClasificacion' => 1, 
             'valor' => '7',
             'alcance' => 1000000,
             'observacion' => '',
             'created_at' => '2017-09-10 04:26:45',
             'updated_at' => '2017-09-10 04:26:45',
             'deleted_at' => NULL
            ],
            ['id' => 60,
             'medio_id' => 123,
             'idPlataformaClasificacion' => 6,
             'valor' =>'http://www.tvperu.gob.pe/',
             'alcance' => 100290,
             'observacion' => '',
             'created_at' => '2017-09-10 04:26:45',
             'updated_at' => '2017-09-10 04:26:45',
             'deleted_at' => NULL
            ],
            ['id' => 78,
             'medio_id' => 64, 
             'idPlataformaClasificacion' => 6,
             'valor' => 'https://www.radionacional.com.',
             'alcance' => 7500,
             'observacion' => '',
             'created_at' => '2018-02-05 17:41:15',
             'updated_at' => '2021-01-21 02:13:14',
             'deleted_at' => NULL
            ],
            ['id' => 99,
             'medio_id' => 76, 
             'idPlataformaClasificacion' => 6,
             'valor' => 'http://rpp.pe/',
             'alcance' => 443413,
             'observacion' => '',
             'created_at' => '2018-03-12 21:50:29',
             'updated_at' => '2018-03-12 21:50:29',
             'deleted_at' => NULL
            ],
            ['id' => 193,
             'medio_id' => 64,
             'idPlataformaClasificacion' => 14,
             'valor' => 'https://www.facebook.com/queha',
             'alcance' => 20000,
             'observacion' => 'QUÉ HACER',
             'created_at' => '2018-10-04 17:37:23',
             'updated_at' => '2019-08-16 17:50:14',
             'deleted_at' => NULL
            ],
            ['id' => 514,
             'medio_id' => 76,
             'idPlataformaClasificacion' => 15,
             'valor' => 'https://www.youtube.com/channe',
             'alcance' => 443413,
             'observacion' => '',
             'created_at' => '2020-04-23 21:00:32',
             'updated_at' => '2020-04-23 21:00:32',
             'deleted_at' => NULL
            ],
            ['id' => 853,
             'medio_id' => 64,
             'idPlataformaClasificacion' => 14,
             'valor' => 'https://www.facebook.com/radio',
             'alcance' => 268851,
             'observacion' => 'Nacional',
             'created_at' => '2021-02-03 21:05:05',
             'updated_at' => '2021-02-03 21:05:05',
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
        Schema::dropIfExists('medio_plataformas');
    }
};
