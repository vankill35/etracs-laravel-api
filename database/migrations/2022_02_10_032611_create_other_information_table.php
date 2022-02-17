<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Individual;

class CreateOtherInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_information', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Individual::class)->constrained()->onDelete('cascade');
            $table->string('profession')->nullable();
            $table->string('id_presented');
            $table->string('tin')->nullable();
            $table->string('sss')->nullable();
            $table->integer('height');
            $table->integer('weight');
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
        Schema::dropIfExists('other_information');
    }
}
