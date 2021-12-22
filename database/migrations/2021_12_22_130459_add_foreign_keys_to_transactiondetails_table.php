<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTransactiondetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transactiondetails', function (Blueprint $table) {
            $table->foreign(['transactionid'], 'fk_transactionid')->references(['id'])->on('transactions');
            $table->foreign(['productid'], 'FK_productid')->references(['id'])->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactiondetails', function (Blueprint $table) {
            $table->dropForeign('fk_transactionid');
            $table->dropForeign('FK_productid');
        });
    }
}
