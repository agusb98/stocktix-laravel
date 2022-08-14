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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('client_id');
            $table->float('debt')->nullable(false)->default(0);
            $table->tinyInteger('status')->nullable(false)->default(1);

            $table->timestamps();

            $table->foreign('product_id')
                ->references('id')->on('products')->onDelete('cascade');
            $table->foreign('client_id')
                ->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
};
