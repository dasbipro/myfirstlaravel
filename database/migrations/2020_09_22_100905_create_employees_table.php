<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); //id primary key
            $table->string('name');
            $table->string('email');
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->longText('description')->nullable();
            $table->unsignedMediumInteger('salary')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps(); //created_at,updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
