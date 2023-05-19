<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_trackers', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->date('visit_date');
            $table->time('visit_time');
            $table->integer('hits')->default(0);
            $table->string('uri')->nullable();
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
        Schema::table('tb_trackers', function (Blueprint $table) {
            Schema::dropIfExists('tb_trackers');
        });
    }
}
