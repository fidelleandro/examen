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
            $table->bigInteger('plataforma_id')->unsigned()->comment('');  
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('plataforma_id')
                       ->references('id')
                       ->on('plataformas')
                       ->onCascade('delete');
        });
        \App\Models\PlataformaClasificacion::insert([
            ['id' => 1, 
             'descripcion' => 'Señal Abierta', 
             'plataforma_id' => 2,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 2, 
             'descripcion' => 'Señal Abierta', 
             'plataforma_id' => 3,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 3, 
             'descripcion' => 'Cable Movistar',
             'plataforma_id' => 2,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 5, 
             'descripcion' => 'DirecTV',
             'plataforma_id' => 2,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 6, 
             'descripcion' => 'URL',
             'plataforma_id' => 1,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 10,
             'descripcion' => 'Formato',
             'plataforma_id' => 5,
             'created_at' => '2021-03-06 04:51:27',
             'updated_at' => '2021-03-06 04:51:27',
             'deleted_at' => NULL
            ],
            ['id' => 14,
             'descripcion' => 'Facebook',
             'plataforma_id' => 9,
             'created_at' => '2019-05-07 20:30:33',
             'updated_at' => '2019-05-07 20:30:33',
             'deleted_at' => NULL
            ],
            ['id' => 15,
             'descripcion' => 'Youtube',
             'plataforma_id' => 9,
             'created_at' => '2019-05-07 20:30:33',
             'updated_at' => '2019-05-07 20:30:33',
             'deleted_at' => NULL
            ],
            ['id' => 16,
             'descripcion' => 'Twitter',
             'plataforma_id' => 9,
             'created_at' => '2019-05-07 20:30:33',
             'updated_at' => '2019-05-07 20:30:33',
             'deleted_at' => NULL
            ],
            ['id' => 17,
             'descripcion' => 'Instagram',
             'plataforma_id' => 9,
             'created_at' => '2019-05-07 20:30:33',
             'updated_at' => '2019-05-07 20:30:33',
             'deleted_at' => NULL
            ],
            ['id' => 18,
             'descripcion' => 'Spotify',
             'plataforma_id' => 9,
             'created_at' => '2020-05-08 00:01:48',
             'updated_at' => '2020-05-08 00:01:48',
             'deleted_at' => NULL
            ],
            ['id' => 20,
             'descripcion' => 'LinkedIn',
             'plataforma_id' => 9,
             'created_at' => '2020-11-30 21:38:55',
             'updated_at' => '2020-11-30 21:38:55',
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
        Schema::dropIfExists('plataforma_clasificacions');
    }
};
