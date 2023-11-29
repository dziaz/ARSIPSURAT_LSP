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
        //
        Schema::create('t_membership', function(Blueprint $table){
            $table->id('id_member')->autoIncrement();
            $table->string('kode_member',50);
            $table->string('nama_depan',150);
            $table->string('nama_belakang',150);
            $table->string('nickname',150);
            $table->tinyInteger('kelamin')->default(0);
            $table->string('tempat_lahir',50);
            $table->date('tanggal_lahir',150);
            $table->string('email',150);
            $table->string('no_hp',30);
            $table->string('id_discord',100);
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
        //
        Schema::dropIfExists('t_membership');
    }
};
