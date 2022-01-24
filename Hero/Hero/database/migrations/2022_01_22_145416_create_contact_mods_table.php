<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactModsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_mods', function (Blueprint $table) {
            $table->id();
            $table->string('nickname');
            $table->string('real_name');
            $table->text('origin_description');
            $table->text('superpowers');
            $table->text('catch_phrase');

            $table->string('file_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact_mods');
    }
}
