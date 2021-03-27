<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLimitedEditionCategoriesTable extends Migration{
    public function up(){
        Schema::create('limited_edition_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('flag')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('limited_edition_categories');
    }
}
