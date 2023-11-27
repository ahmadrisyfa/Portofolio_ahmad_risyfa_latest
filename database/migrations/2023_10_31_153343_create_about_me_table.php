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
        Schema::create('about_me', function (Blueprint $table) {
            $table->id();
            $table->string('your_job')->nullable();
            $table->text('description')->nullable();
            $table->string('picture')->nullable();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('birthday')->nullable();
            $table->string('experience')->nullable();
            $table->string('email')->nullable();
            $table->string('frellance')->nullable();
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
        Schema::dropIfExists('about_me');
    }
};
