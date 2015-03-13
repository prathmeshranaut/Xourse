<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('views')->default(0);
			$table->integer('upvotes')->default(0);
			$table->integer('downvotes')->default(0);
			$table->integer('is_paid')->default(0);
			$table->integer('total_length')->default(0);
			$table->integer('difficulty')->default(1);
            $table->text('source');
            $table->text('source_url');
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
		Schema::drop('courses');
	}

}
