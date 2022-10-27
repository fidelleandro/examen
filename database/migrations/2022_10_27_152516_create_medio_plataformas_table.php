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
            $table->bigInteger('medio_id')->comment('');
            $table->bigInteger('idPlataformaClasificacion')->comment('');
            $table->string('valor')->comment('');
            $table->integer('alcance')->comment('');  
            $table->string('observacion')->comment('');    
            
            $table->timestamps();
            $table->delete();
        });
        \App\Models\MedioPlataforma::insert([
            [3, 76, 3, '10', 750000, '', '2017-07-09 03:19:04', '2017-07-09 03:19:04', NULL],
            [4, 76, 2, '89.7', 871428, '', '2017-07-09 03:31:53', '2017-07-09 03:31:53', NULL],
            [5, 22, 6, 'www.elcomercio.pe', 600000, 'El Comercio', '2017-07-13 03:48:56', '2021-05-20 16:51:42', NULL],
            [6, 22, 10, 'Página interior', 321993, '', '2017-07-13 03:48:56', '2017-09-10 02:52:23', NULL],
            [54, 64, 2, '103.9FM', 576000, '', '2017-09-10 03:53:03', '2017-09-10 03:53:03', NULL],
            [59, 123, 1, '7', 1000000, '', '2017-09-10 04:26:45', '2017-09-10 04:26:45', NULL],
            [60, 123, 6, 'http://www.tvperu.gob.pe/', 100290, '', '2017-09-10 04:26:45', '2017-09-10 04:26:45', NULL],
            [78, 64, 6, 'https://www.radionacional.com.', 7500, '', '2018-02-05 17:41:15', '2021-01-21 02:13:14', NULL],
            [99, 76, 6, 'http://rpp.pe/', 443413, '', '2018-03-12 21:50:29', '2018-03-12 21:50:29', NULL],
            [193, 64, 14, 'https://www.facebook.com/queha', 20000, 'QUÉ HACER', '2018-10-04 17:37:23', '2019-08-16 17:50:14', NULL],
            [514, 76, 15, 'https://www.youtube.com/channe', 443413, '', '2020-04-23 21:00:32', '2020-04-23 21:00:32', NULL],
            [853, 64, 14, 'https://www.facebook.com/radio', 268851, 'Nacional', '2021-02-03 21:05:05', '2021-02-03 21:05:05', NULL]          
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
