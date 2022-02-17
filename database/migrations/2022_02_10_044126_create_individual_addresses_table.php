<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Individual;

class CreateIndividualAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individual_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Individual::class)->constrained()->onDelete('cascade');
            $table->string('house_number')->nullable();
            $table->string('street');
            $table->string('barangay');
            $table->string('city_municipality');
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
        Schema::dropIfExists('individual_addresses');
    }
}
