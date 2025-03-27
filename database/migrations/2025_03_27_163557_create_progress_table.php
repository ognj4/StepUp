<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('goal_id');

            $table->integer('progress_value');

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('goal_id')
                ->references('id')->on('goals');

        });
    }
    public function down(): void
    {
        Schema::dropIfExists('progress');
    }
};
