<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaincoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maincores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('odcmain_id');
            $table->string('port_name')->unique();
            $table->string('port_loc');
            $table->string('pasif_splitter');
            $table->string('in_odc');

            $table->string('out1_port');
            $table->string('out1_dist');
            $table->string('out1_odp_name');
            $table->string('out1_core');
            $table->string('out1_lat');
            $table->string('out1_long');
            $table->string('out1_info');

            $table->string('out2_port');
            $table->string('out2_dist');
            $table->string('out2_odp_name');
            $table->string('out2_core');
            $table->string('out2_lat');
            $table->string('out2_long');
            $table->string('out2_info');

            $table->string('out3_port');
            $table->string('out3_dist');
            $table->string('out3_odp_name');
            $table->string('out3_core');
            $table->string('out3_lat');
            $table->string('out3_long');
            $table->string('out3_info');

            $table->string('out4_port');
            $table->string('out4_dist');
            $table->string('out4_odp_name');
            $table->string('out4_core');
            $table->string('out4_lat');
            $table->string('out4_long');
            $table->string('out4_info');

            $table->string('gpon_olt');
            $table->string('slot_olt');
            $table->string('port_olt');

            $table->string('rack_ftm');
            $table->string('panel_ftm');
            $table->string('port_ftm');

            $table->string('qrcode')->unique();
            $table->string('activity');
            $table->string('activity_info');
            $table->string('updated_by');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maincores');
    }
}
