<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('families', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('area');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('hawya')->unique();
            $table->string('houseHolderWork');
            $table->string('state');
            $table->string('motherWork');
            $table->integer('workState',false,true);
            $table->string('incomeSrc');
            $table->integer('boysNum',false,true);
            $table->string('boysAges');
            $table->integer('girlsNum', false,true);
            $table->string('girlsAges');
            $table->string('assuranceType');
            $table->integer('isThereUniStudent',false,true);
            $table->string('studentDetails');
            $table->string('isThereSickPeople_Drugs');
            $table->string('sicknessDetails');
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
        Schema::dropIfExists('families');
    }
}
