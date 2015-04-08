<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instruments', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('model');
            $table->string('classification');
            $table->text('description');
            $table->date('year_made');
            $table->integer('vendor_id');
            $table->string('instrument_type_id');
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
		Schema::drop('instruments');
	}

}
