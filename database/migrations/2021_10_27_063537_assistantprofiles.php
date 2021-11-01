<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Assistantprofiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('assistantprofiles', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('profilepicture');
            $table->string('video');
            $table->string('describe');
            $table->string('working_hours');
            $table->string('prefer_timezone');
            $table->string('equipment');
            $table->string('specialization');
            $table->string('skills');
            $table->string('github_url');
            $table->string('resume');
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
        //
    }
}
