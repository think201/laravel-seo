<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRedlofSeoMetadataTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

		if (!Schema::hastable('redlof_seo_metadata')) {
			
			Schema::create('redlof_seo_metadata', function (Blueprint $table) {

				$table->bigIncrements('id');
				$table->string('url')->unique();

				$table->string('meta_title', 150)->nullable();
				$table->string('meta_description', 1000)->nullable();
				$table->string('meta_keyword', 1500)->nullable();

				$table->string('og_title', 150)->nullable();
				$table->string('og_description', 1000)->nullable();
				$table->string('og_image')->nullable();
				$table->string('og_type', 50)->nullable();

				$table->string('twitter_title', 150)->nullable();
				$table->string('twitter_description', 1000)->nullable();
				$table->string('twitter_image')->nullable();
				$table->string('twitter_card', 50)->nullable();

				$table->boolean('robot_follow')->default(true);
				$table->string('canonical_url')->nullable();
				$table->boolean('is_indexed')->default(true);

				$table->enum('status', ['active', 'inactive'])->default('active');
				$table->timestamps();
				$table->softDeletes();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('redlof_seo_metadata');
	}
}
