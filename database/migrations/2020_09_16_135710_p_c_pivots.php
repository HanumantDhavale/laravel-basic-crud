<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PCPivots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_c_pivots', function (Blueprint $table) {
            $table->bigInteger("product_id")->unsigned();
            $table->bigInteger("category_id")->unsigned();

            $table->primary(["product_id", "category_id"]);

            $table->foreign("product_id")->references("id")->on("products")->onDelete("cascade");
            $table->foreign("category_id")->references("id")->on("categories")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('p_c_pivots');
    }
}
