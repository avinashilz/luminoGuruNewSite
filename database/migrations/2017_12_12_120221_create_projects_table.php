<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_category_id')->unsigned();
            $table->foreign('project_category_id')->references('id')->on('project_categories');
            $table->string('name');
            $table->integer('file_entry_id')->unsigned();
            $table->foreign('file_entry_id')->references('id')->on('file_entries');
            $table->string('short_description');
            $table->text('long_description');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('projects');
    }

}
