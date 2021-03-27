<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration{
    public function up(){
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('serial_number');
            $table->string('slug');
            $table->string('image');
            $table->text('description');
            $table->integer('main_category_id');
            $table->integer('category_id');
            $table->integer('is_featured')->default(0);
            $table->integer('is_on_homepage')->default(0);
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
        Schema::dropIfExists('products');
    }
}
