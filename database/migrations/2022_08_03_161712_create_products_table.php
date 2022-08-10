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
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('code', 100)->nullable(false);
            $table->string('name', 100)->nullable(false);
            $table->float('price')->nullable(false);
            $table->string('description', 200)->nullable(true);
            $table->integer('quantity')->nullable(false)->default(0);
            $table->tinyInteger('status')->nullable(false)->default(1);
            $table->string('observation', 200)->nullable(true);
            
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
};
