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
            $table->integer('category_id');
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
        Schema::dropIfExists('products');
    }
}
