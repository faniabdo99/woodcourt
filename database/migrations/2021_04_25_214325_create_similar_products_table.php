<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateSimilarProductsTable extends Migration{
    public function up()
    {
        Schema::create('similar_products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('item_id');
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
        Schema::dropIfExists('similar_products');
    }
}
