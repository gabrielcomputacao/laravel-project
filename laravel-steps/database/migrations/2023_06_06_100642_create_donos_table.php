<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donos', function (Blueprint $table) {
            $table->unsignedBigInteger('animal_id');
            $table->id();
            $table->string('nomedono');
            $table->string('sobrenome');
            $table->foreign('animal_id')->references('id')->on('animal')
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('donos');
    }
};
