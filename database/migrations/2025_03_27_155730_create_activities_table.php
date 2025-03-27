<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->string('name');
            $table->text('description');
            $table->integer('duration');
            $table->date('date');

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')->on('users');
            $table->foreign('category_id')
                ->references('id')->on('categories');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
