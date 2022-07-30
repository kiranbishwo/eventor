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
        Schema::create('subpackages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('package_id');
            $table->string('price');
            $table->longtext('content');
            $table->string('addedBy');
            $table->string('status');
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('restrict');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subpackages'); 
    }
};
