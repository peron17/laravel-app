<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('book_category')) {
            Schema::create('books', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title', 200);
                $table->string('author', 100);
                $table->text('synopsys')->nullable();
                $table->string('publisher', 40);
                $table->string('cover', 60)->nullable();
                $table->date('released_date');
                $table->integer('price', false, true);
                $table->foreignId('category_id')->constrained('book_category')->references('id');
                $table->integer('sold', false, true)->default(0);
                $table->nullableTimestamps();
                $table->softDeletes($column = 'deleted_at', $precision = 0);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
};
