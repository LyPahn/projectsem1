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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_code', 50)->unique()->unique();
            $table->string('name', 50)->default();
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('type_rooms')->onDelete('cascade');
            $table->double('price');
            $table->tinyInteger('status')->default(1);
            $table->integer('adluts');
            $table->integer('children');
            $table->string('image', 255);
            $table->text('description')->nullable();
            $table->tinyInteger('propose')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
