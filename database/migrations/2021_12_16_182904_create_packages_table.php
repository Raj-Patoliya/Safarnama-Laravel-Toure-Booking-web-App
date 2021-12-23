<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Packages', function (Blueprint $table) {
            $table->integer('pid')->primarykey();
            $table->integer('Country_id');
            $table->String('pname');
            $table->integer('days');
            $table->String('discription');
            $table->String('amount'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Packages');
    }
}
