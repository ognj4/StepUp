<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('goals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');

            $table->string('name');
            $table->text('description');
            $table->integer('target_value');
            $table->integer('current_value');
            $table->date('deadline');
            $table->enum('status', ['active', 'completed', 'failed'])->default('active');

            $table->timestamps();


            $table->foreign('user_id')
                ->references('id')->on('users');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
