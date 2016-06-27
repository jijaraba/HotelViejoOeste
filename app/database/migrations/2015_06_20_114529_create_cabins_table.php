<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCabinsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cabins', function(Blueprint $table)
		{
            $table->engine = 'InnoDB';
            $table->increments('idcabin');
			$table->string('name');
			$table->text('description')->nullable();
			$table->integer('capacity');
            $table->integer('rate_ls');
            $table->integer('rate_hs');
            $table->string('slug');
            $table->integer('order');
            $table->text('seo_description')->nullable();
            $table->integer('seo_keywords');
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
		Schema::drop('cabins');
	}

}
