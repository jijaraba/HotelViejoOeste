<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlansTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plans', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('idplan');
            $table->integer('idcabin')->unsigned();
			$table->string('name');
			$table->integer('rate');
			$table->date('starts');
			$table->date('ends');
			$table->timestamps();
            $table->foreign('idcabin')
                ->references('idcabin')
                ->on('cabins')
                ->onUpdate('cascade')
                ->onDelete('cascade');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('plans');
	}

}
