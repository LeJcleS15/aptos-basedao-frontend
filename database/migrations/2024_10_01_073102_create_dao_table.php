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
        Schema::create('dao', function (Blueprint $table) {
            $table->id();
            $table->string('dao_type');
            $table->unsignedBigInteger('dao_id')->default(0);
            $table->string('initializer')->nullable();
            $table->boolean('is_initialized')->default(false);
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
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
        Schema::dropIfExists('dao');
    }
};
