<?php

declare(strict_types=1);


namespace App\Migrations;

use Effectra\Core\Database\Migration;
use Effectra\Core\Database\Schema;
use Effectra\SqlQuery\Table;

class Migrations_1686089781_create_users_table extends Migration
{
	public function up(): void
	{

		Schema::create("users", function (Table $table) {
			$table->autoIncrement();
			$table->string('username');
			$table->string('email');
			$table->string('password');
			$table->string('first_name');
			$table->timestamp('email_verified_at');
			$table->boolean('verified')->default(0);
			$table->string('token')->size(100);
			$table->timestamps();
		});
	}

	public function down(): void
	{

		Schema::table("users", function (Table $table) {
			$table->drop();
		});
	}
}
