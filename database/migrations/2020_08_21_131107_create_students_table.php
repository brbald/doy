<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::create('students', function (Blueprint $table) 
                {
                    $table->id();
                    $table->string('student_ID');
                    $table->string('first_name');
                    $table->string('last_name');
                    $table->date('date_of_birth');
                    $table->char('gender');
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
        Schema::dropIfExists('students');
    }
}
