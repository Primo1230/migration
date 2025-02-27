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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('teacher_id');
            $table->string('email', 45);
            $table->string('password', 255);
            $table->string('f_name', 45);
            $table->string('l_name', 45);
            $table->date('dob');
            $table->string('phone', 45);
            $table->string('mobile', 15);
            $table->boolean('status');
            $table->date('last_login_date');
            $table->string('last_login_ip', 45);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
