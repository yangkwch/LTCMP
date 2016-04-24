<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customercompany', function (Blueprint $table) {
            $table->increments('id');
            $table->string("companyname")->unique();;
            $table->integer("parentcompanyid")->nullable();
            $table->string("registeredaddress")->nullable();
            $table->string("description")->nullable();         
            $table->timestamps();
        });

        Schema::table('customercompany', function (Blueprint $table) {

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customercompany');
    }
}
