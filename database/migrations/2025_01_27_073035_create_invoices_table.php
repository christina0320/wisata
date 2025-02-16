<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id(); // Primary Key (ID Invoice)
            $table->unsignedBigInteger('id_reservasi'); // ID Reservasi
            $table->string('nama_pelanggan', 100); // Nama Pelanggan
            $table->string('email', 100); // Email
            $table->integer('nomor_meja'); // Nomor Meja
            $table->date('tanggal_reservasi'); // Tanggal Reservasi
            $table->unsignedBigInteger('id_pesanan'); // ID Pesanan
            $table->string('nama_menu', 100); // Nama Menu
            $table->integer('quantity'); // Quantity
            $table->decimal('subtotal', 10, 2); // Subtotal
            $table->timestamps(); // Created At & Updated At
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
