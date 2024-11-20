<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJsonFilePathToProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->mediumText('jsonFileName')->after("pricePerItem")->nullable();;
                $table->mediumText('jsonFileNameURL')->after("jsonFileName")->nullable();;
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('products')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('jsonFileName');
                $table->dropColumn('jsonFileNameURL');
            });
        }
    }
}
