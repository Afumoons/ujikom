<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number');
            $table->string('invoice_date');
            $table->string('invoice_due_date');
            $table->string('invoice_status');
            $table->string('invoice_total');
            $table->string('invoice_subtotal');
            $table->string('invoice_tax');
            $table->string('invoice_discount');
            $table->string('invoice_shipping');
            $table->string('invoice_notes');
            $table->string('invoice_terms');
            $table->string('invoice_customer_name');
            $table->string('invoice_customer_email');
            $table->string('invoice_customer_phone');
            $table->string('invoice_customer_address');
            $table->string('invoice_customer_city');
            $table->string('invoice_customer_country');
            $table->string('invoice_customer_postal_code');
            $table->json('invoice_items');
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
        Schema::dropIfExists('transactions');
    }
}
