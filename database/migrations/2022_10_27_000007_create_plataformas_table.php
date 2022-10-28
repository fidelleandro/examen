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
        Schema::create('plataformas', function (Blueprint $table) {
            $table->id(); 
            $table->string('descripcion')->comment('');    
            $table->timestamps();
            $table->softDeletes();
        });
        \App\Models\Plataforma::insert([
            ['id' => 1,
             'descripcion' => 'Web',
             'created_at' => '2020-04-25 17:36:07',
             'updated_at' => '2020-04-25 17:36:07',
             'deleted_at' => NULL
            ],
            ['id' => 2,
             'descripcion' => 'Televisión',
             'created_at' => '2019-10-02 16:39:14',
             'updated_at' => '2019-10-02 16:39:14',
             'deleted_at' => NULL
            ],
            ['id' => 3,
             'descripcion' => 'Radio',
             'created_at' => '2021-03-06 04:50:46',
             'updated_at' => '2021-03-06 04:50:46',
             'deleted_at' => NULL
            ],
            ['id' => 5,
             'descripcion' => 'Impreso',
             'created_at' => '2017-01-03 21:50:39',
             'updated_at' => '2017-08-10 21:43:21',
             'deleted_at' => NULL
            ],
            ['id' => 9,
             'descripcion' => 'Social Media',
             'created_at' => '2019-05-07 20:28:34',
             'updated_at' => '2020-04-29 18:41:04',
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
        Schema::dropIfExists('plataformas');
    }
};
