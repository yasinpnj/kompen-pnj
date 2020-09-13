<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Angket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angket', function (Blueprint $table) {
            $table->bigIncrements('id_dosen');
            $table->bigInteger("id_user");
            $table->string("jawaban1")->nullable();
            $table->string("jawaban2")->nullable();
            $table->string("jawaban3")->nullable();
            $table->string("jawaban4")->nullable();
            $table->string("jawaban5")->nullable();
            $table->string("jawaban6")->nullable();
            $table->string("jawaban7")->nullable();
            $table->string("jawaban8")->nullable();
            $table->string("jawaban9")->nullable();
            $table->string("jawaban10")->nullable();
            $table->string("jawaban11")->nullable();
            $table->string("jawaban12")->nullable();
            $table->string("jawaban13")->nullable();
            $table->string("jawaban14")->nullable();
            $table->string("jawaban15")->nullable();
            $table->string("jawaban16")->nullable();
            $table->string("jawaban17")->nullable();
            $table->string("jawaban18")->nullable();
            $table->string("jawaban19")->nullable();
            $table->string("jawaban20")->nullable();
            $table->string("jawaban21")->nullable();
            $table->string("jawaban22")->nullable();
            $table->string("jawaban23")->nullable();
            $table->string("jawaban24")->nullable();
            $table->string("jawaban25")->nullable();
            $table->string("jawaban26")->nullable();
            $table->string("jawaban27")->nullable();
            $table->string("jawaban28")->nullable();
            $table->string("jawaban29")->nullable();
            $table->string("jawaban30")->nullable();
            $table->string("jawaban31")->nullable();
            $table->string("jawaban32")->nullable();
            $table->string("jawaban33")->nullable();
            $table->string("jawaban34")->nullable();
            $table->string("jawaban35")->nullable();
            $table->string("jawaban36")->nullable();
            $table->string("jawaban37")->nullable();
            $table->string("jawaban38")->nullable();
            
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
        Schema::dropIfExists('angket');
    }
}
