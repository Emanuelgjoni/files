<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('pershkrimi');
            $table->string('Kategoria');
            $table->float('Cmimi');
            $table->float('sasi');
            $table->float('TotalPaTVSHimi');
            $table->float('TVSH');
            $table->float('TotalmeTVSH');
            $table->unsignedBigInteger('user_id');
            $table->softDeletes('deleted_at');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('bills');
    }
}
