<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->boolean('is_closed')->default(false);

            $table->string('group_form_of_studying_type')->nullable();
            $table->foreign('group_form_of_studying_type')->references('name')->on('group_form_of_studyings')->onDelete('SET NULL');

            $table->string('university_name')->nullable();
            $table->foreign('university_name')->references('name')->on('group_universities')->onDelete('SET NULL');

            $table->string('faculty_name')->nullable();
            $table->foreign('faculty_name')->references('name')->on('group_faculties')->onDelete('SET NULL');

            $table->string('specialty_name')->nullable();
            $table->foreign('specialty_name')->references('name')->on('group_specialties')->onDelete('SET NULL');

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
        Schema::dropIfExists('groups');
    }
}
