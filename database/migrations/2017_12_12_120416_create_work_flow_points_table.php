<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkFlowPointsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('work_flow_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_flow_id')->unsigned();
            $table->foreign('work_flow_id')->references('id')->on('work_flows');
            $table->string('point');
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
        Schema::dropIfExists('work_flow_points');
    }

}
