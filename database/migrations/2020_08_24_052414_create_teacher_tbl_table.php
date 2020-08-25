<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name');
            $table->string('teacher_email');
            $table->string('teacher_phone');
            $table->string('teacher_address');
            $table->string('teacher_image');
            $table->string('teacher_department');
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
        Schema::dropIfExists('teacher_tbl');
    }
}
