<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdjustsProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filiais', function(Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->timestamps();
        });

        Schema::create('produto_filiais', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('price', 8, 2)->default(0.00);
            $table->integer('minimum_stock')->default(1);
            $table->integer('maximum_stock')->default(1);
            $table->timestamps();

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        Schema::table('produtos', function(Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('minimum_stock');
            $table->dropColumn('maximum_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('produtos', function(Blueprint $table) {
            $table->decimal('price', 8, 2)->default(0.00);
            $table->integer('minimum_stock')->default(1);
            $table->integer('maximum_stock')->default(1);
        });

        Schema::table('produto_filiais', function(Blueprint $table) {
            $table->foreign('produto_filiais_filial_id_foreign');
            $table->dropColumn('filial_id');

            $table->foreign('produto_filiais_produto_id_foreign');
            $table->dropColumn('produto_id');
        });

        Schema::dropIfExists('produtos_filiais');

        Schema::dropIfExists('filiais');
    }
}
