<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recordings', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('version');
            $table->date('recording_started');
            $table->text('notes');
            $table->integer('song_id');
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
		Schema::drop('recordings');
	}

}
