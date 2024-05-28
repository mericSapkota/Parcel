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
        Schema::create('parcel_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parcel_id')->constrained('admins')->onDelete('cascade');
            $table->string('address');
            $table->date('date');
            $table->string('status');
            $table->time('time');
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcel_details');
    }
};
