<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOdcmainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odcmains', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('sto');
            $table->string('segment_feeder_old')->nullable();
            $table->string('segment_feeder_new')->nullable();
            $table->string('lat')->nullable();
            $table->string('long')->nullable();
            $table->string('address')->nullable();
            $table->string('koordinat')->nullable();
            $table->string('image')->nullable();
            $table->string('info')->nullable();
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
        Schema::dropIfExists('odcmains');
    }
}
