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
        Schema::create('programa_contactos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('programa_id')->comment(''); 
            $table->bigInteger('idContacto')->comment('');  
            $table->tinyInt('tipoInfluencia',4)->comment('');  
            $table->string('idsMedioPlataforma')->comment('');  
            $table->string('observacion')->comment('');  
            $table->tinyInt('activo',1)->default(1)->comment('');  
            $table->timestamps();
            $table->delete();
        });
        \App\Models\Programa::insert([
            [423, 47, 330, 2, '3', '', 0, '2018-04-12 15:41:51', '2021-07-20 14:37:30', NULL],
            [600, 142, 330, 2, '54,78,193,853', NULL, 0, '2018-10-03 13:58:42', '2021-08-02 18:31:58', NULL],
            [745, 203, 1102, 2, '54,78,193', '', 1, '2019-03-25 22:46:53', '2019-09-17 17:28:08', NULL],
            [839, 71, 1102, 2, '59,60', '', 1, '2019-05-17 14:33:52', '2019-07-01 17:09:58', NULL],
            [966, 143, 306, 2, '3,4,99,514', '', 1, '2019-07-15 22:51:20', '2020-07-31 17:22:42', NULL],
            [1260, 368, 1583, 2, '59', '', 1, '2020-03-25 19:43:01', '2020-04-25 22:07:07', NULL],
            [1276, 126, 330, 2, '5,6', '', 0, '2020-04-23 13:31:57', '2021-04-22 17:31:34', NULL],
            [1277, 710, 1583, 2, '99', '', 1, '2020-04-23 14:45:58', '2020-04-23 20:59:00', NULL],
            [1281, 106, 1102, 2, '4', '', 1, '2020-05-05 15:11:09', '2020-06-12 14:31:27', NULL]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programa_contactos');
    }
};
