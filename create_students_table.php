<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('students', function (Blueprint $table) {
        $table->bigIncrements('student_id'); // Only one auto-increment column
        $table->string('email', 45)->unique();
        $table->string('password', 255);
        $table->string('f_name', 45);
        $table->string('l_name', 45);
        $table->date('dob');
        $table->string('mobile', 15);
        $table->string('phone', 45)->nullable();
        $table->tinyInteger('status');
        $table->unsignedBigInteger('parent_id'); // No auto_increment here
        $table->date('date_of_join');
        $table->date('last_login_date')->nullable();
        $table->string('last_login_ip', 45)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
