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
            $table->delete();
        });
        \App\Models\Plataforma::insert([
            [1, 'Web', '2020-04-25 17:36:07', '2020-04-25 17:36:07', NULL],
            [2, 'Televisión', '2019-10-02 16:39:14', '2019-10-02 16:39:14', NULL],
            [3, 'Radio', '2021-03-06 04:50:46', '2021-03-06 04:50:46', NULL],
            [5, 'Impreso', '2017-01-03 21:50:39', '2017-08-10 21:43:21', NULL],
            [9, 'Social Media', '2019-05-07 20:28:34', '2020-04-29 18:41:04', NULL]
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
