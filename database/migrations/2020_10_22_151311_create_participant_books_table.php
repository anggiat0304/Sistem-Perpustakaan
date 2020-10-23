<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participant_books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('participants_id');
            $table->foreign('participants_id')->references('id')->on('participants');
            $table->unsignedInteger('books_id');
            $table->foreign('books_id')->references('id')->on('books');
            $table->date('waktu_peminjaman');
            $table->date('tanggal_pengembalian');
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
        Schema::dropIfExists('participant_books');
    }
}
