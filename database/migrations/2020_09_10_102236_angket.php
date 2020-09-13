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
            $table->string("jawaban1");
            $table->string("jabatan2");
            $table->string("jawaban3");
            $table->string("jabatan4");
            $table->string("jawaban5");
            $table->string("jawaban6");
            $table->string("jabatan7");
            $table->string("jawaban8");
            $table->string("jabatan9");
            $table->string("jawaban10");
            $table->string("jawaban11");
            $table->string("jabatan12");
            $table->string("jawaban13");
            $table->string("jabatan14");
            $table->string("jawaban15");
            $table->string("jawaban16");
            $table->string("jabatan17");
            $table->string("jawaban18");
            $table->string("jabatan19");
            $table->string("jawaban20");
            $table->string("jawaban21");
            $table->string("jabatan22");
            $table->string("jawaban23");
            $table->string("jabatan24");
            $table->string("jawaban25");
            $table->string("jawaban26");
            $table->string("jabatan27");
            $table->string("jawaban28");
            $table->string("jabatan29");
            $table->string("jawaban30");
            $table->string("jawaban31");
            $table->string("jabatan32");
            $table->string("jawaban33");
            $table->string("jabatan34");
            $table->string("jawaban35");
            $table->string("jawaban36");
            $table->string("jabatan37");
            $table->string("jawaban38");
            
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
