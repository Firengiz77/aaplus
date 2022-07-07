<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            
            $table->string('page_en');
            $table->string('page_ru');
            $table->string('page_al');

            $table->string('slug_en');
            $table->string('slug_ru');
            $table->string('slug_al');

            $table->string('title_en');
            $table->string('title_ru');
            $table->string('title_al');

            $table->string('description_en');
            $table->string('description_ru');
            $table->string('description_al');

            $table->string('keywords_en');
            $table->string('keywords_ru');
            $table->string('keywords_al');

            $table->string('viewname');
            $table->string('route');
            $table->string('page_id');
            $table->string('parent_id');

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
        Schema::dropIfExists('pages');
    }
}
