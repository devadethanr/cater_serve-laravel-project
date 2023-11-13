<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('eventcountry');
            $table->string('eventcity');
            $table->string('eventpalace');
            $table->string('eventsize');
            $table->string('noofpalace');
            $table->string('isveg');
            $table->string('eventcontact');
            $table->string('eventdate');
            $table->string('eventemail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_bookings');
    }
};
