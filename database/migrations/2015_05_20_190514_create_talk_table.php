<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTalkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('talks', function(Blueprint $table)
        {
            $table->increments('id');
            $table->text('name');
            $table->string('author_id');
            $table->text('description');
            $table->text('joindin');
            $table->string('month');
            $table->string('year');
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
        Schema::drop('talks');
	}

}
