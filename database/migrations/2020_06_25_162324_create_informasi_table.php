<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi', function (Blueprint $table) {
            
            $table->id();
            $table->string('judul');
            $table->string('tagline')->nullable();
            $table->string('logo');
            $table->string('bg')->nullable();
            $table->text('alamat');
            $table->string('tlpn');
            $table->string('hp');
            $table->string('email')->nullable();
            $table->string('linkfb')->nulllable();
            $table->string('linkig')->nulllable();
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
        Schema::dropIfExists('informasi');
    }
}
