<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events-calendar', function (Blueprint $table) {
            $table->bigIncrements('id-event');
            $table->string('title-event');
            $table->dateTime('start-event');
            $table->dateTime('end-event');
            $table->string('color-event');
            $table->longText('description-event')->nulltable();
            $table->dateTime('start-event');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events-calendar');
    }
}
