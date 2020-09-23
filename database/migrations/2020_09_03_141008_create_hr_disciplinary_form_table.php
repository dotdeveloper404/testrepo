<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrDisciplinaryFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hr_disciplinary_form', function (Blueprint $table) {
            $table->id();
            $table->integer('employee_id');
            $table->integer('supervisor_id');
            $table->string('job_title')->nullable();
            $table->timestamp('suspension_start_date')->nullable();
            $table->timestamp('suspension_end_date')->nullable();
            $table->text('reason');
            $table->string('other')->nullable();
            $table->integer('gas_card')->nullable();
            $table->integer('truck_keys')->nullable();
            $table->string('supervisor_email');
            $table->string('verify');
            $table->string('comment');

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
        Schema::dropIfExists('hr_disciplinary_form');
    }
}
