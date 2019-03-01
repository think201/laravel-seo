<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoPagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		if (!Schema::hastable('seo_pages')) {
			Schema::create('seo_pages', function (Blueprint $table) {

				$table->bigIncrements('id');
				$table->string('url')->nullable();
				$table->string('meta_title')->nullable();
				$table->string('meta_description')->nullable();
				$table->string('og_title')->nullable();
				$table->string('og_description')->nullable();
				$table->string('og_image')->nullable();
				$table->string('og_type')->nullable();
				$table->string('redirect_to')->nullable();
				$table->string('fbpixel_track')->nullable();
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
		Schema::drop('seo_pages');
	}
}
