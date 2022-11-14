<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeturunanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keturunan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nama_bapak')->nullable();
            $table->string('nama_anak')->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->enum('jenis_kelamin_anak', ['laki-laki', 'perempuan']);
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
    }
}
