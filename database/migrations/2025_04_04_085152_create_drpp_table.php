<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drpp', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submitted_by');
            $table->string('program_type');
            $table->string('contact_first_name');
            $table->string('contact_last_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('scl_account');
            $table->string('contact_email');
            $table->string('baseline_kwh');
            $table->string('contractor_company');
            $table->string('contractor_name');
            $table->string('contractor_email');
            $table->string('sdci_permit');
            $table->string('equipment_pictures')->nullable();
            $table->string('purchase_invoices')->nullable();


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
        Schema::dropIfExists('drpp');
    }
}
