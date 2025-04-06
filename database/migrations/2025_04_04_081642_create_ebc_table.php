<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebc', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submitted_by');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('email');
            $table->string('baseline_kwh');
            $table->string('program_option');
            $table->string('scl_meter');
            $table->longText('purchase_invoices')->nullable();
            $table->timestamps();

            $table->foreign('submitted_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ebc');
    }
}
