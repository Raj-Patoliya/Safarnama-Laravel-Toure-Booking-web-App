<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->integer('pack_id');
            $table->string('pack_title')->unique();
            $table->string('days');
            $table->string('nights');
            $table->string('activity');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('price');
            $table->string('password');
            $table->string('dayplanning');
            $table->string('policy');
            $table->string('poster_image');
            $table->string('origin');
            $table->string('destination');
            $table->string('status');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
