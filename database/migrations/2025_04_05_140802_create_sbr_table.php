<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSbrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sbr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submitted_by');
            $table->string('facility_name');
            $table->string('installation_street');
            $table->string('installation_city');
            $table->string('installation_state');
            $table->string('installation_zip_code');
            $table->string('building_type');
            $table->string('is_new_building');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('customer_email');
            $table->string('phone_number');
            $table->string('account_number');
            $table->string('picture_of_the_building');
            $table->string('purchase_invoices');
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
        Schema::dropIfExists('sbr');
    }
}
