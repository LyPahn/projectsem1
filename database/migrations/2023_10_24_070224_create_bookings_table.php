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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('room_id')->nullable()->default(12);
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('adluts')->nullable()->default(12);
            $table->bigInteger('children')->nullable()->default(12);
            $table->date('check_in');
            $table->date('check_out');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
