<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__locales', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('title_value');
            $table->text('description_value');
            $table->text('locale')->default('ar');
            $table->string('type_value');
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
        Schema::dropIfExists('product__locales');
    }
}
