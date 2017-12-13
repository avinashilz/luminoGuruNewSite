<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideImagesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('slide_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('file_entry_id')->unsigned();
            $table->foreign('file_entry_id')->references('id')->on('file_entries');
            $table->string('title');
            $table->string('description');
            $table->string('link_hrf');
            $table->string('link_text');
            $table->integer('order');
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
        Schema::dropIfExists('slide_images');
    }

}
