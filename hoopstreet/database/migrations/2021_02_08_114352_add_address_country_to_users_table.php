<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAddressCountryToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('address')->nullable()->after('password');
            $table->string('state')->nullable()->after('address');
            $table->string('country')->nullable()->after('state');
            $table->string('mobile')->nullable()->after('country');
            $table->string('accredited')->default('0')->after('mobile');
            $table->string('income')->nullable()->after('accredited');
            $table->string('net_worth')->nullable()->after('income');
            $table->string('agreement')->default('0')->after('net_worth');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
