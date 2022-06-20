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
        //lekarze, pacjenci, admini
        //metoda table modyfikuje tabele, nie tworzy nowej
        Schema::table('users',function (Blueprint $table){
           $table->string('phone');
           $table->string('address');
           $table->string('status');
           $table->string('pesel');
           $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users',function (Blueprint $table){
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('status');
            $table->dropColumn('pesel');
            $table->dropColumn('type');
        });
    }
};
