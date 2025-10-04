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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id('id_job');
            $table->string('name', 100);
            $table->float('salary');
            $table->enum('status', ['received', 'not received', 'progress', 'completed', 'cancelled']);
            $table->text('description');
            $table->timestamp('deadline');
            $table->foreignId('id_user')->references('id_user')->on('users');
            $table->foreignId('id_category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
