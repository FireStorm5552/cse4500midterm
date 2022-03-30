<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->string('name');
			$table->string('processor');
			$table->string('ram');
			$table->string('type');
			$table->foreignId('manufacturer_id')->constrained("manufacturers");
			$table->foreignId('purchase_id')->constrained("purchases");
			$table->foreignId('uzer_id')->constrained("uzers");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};
