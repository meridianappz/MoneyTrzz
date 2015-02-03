<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWithdrawalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('withdrawals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('account_id');
			$table->float('amount');
			$table->integer('currency_id')
			$table->text('reason');
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
		Schema::drop('withdrawals');
	}

}