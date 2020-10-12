<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {
        Schema::dropIfExists('department');
        Schema::create('department', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('faculty_id')->unsigned();          
            $table->string('name');
            $table->string('short_name');
            $table->rememberToken();
            $table->timestamps();
            //$table->foreign('faculty_id')->references('id')->on('faculty')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
