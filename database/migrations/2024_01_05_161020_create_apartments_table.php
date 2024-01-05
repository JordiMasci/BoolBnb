<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->smallInteger('rooms')->nullable()->unsigned();
            $table->smallInteger('beds')->nullable()->unsigned();
            $table->smallInteger('bathrooms')->nullable()->unsigned();
            $table->smallInteger('square_meters')->nullable()->unsigned();
            $table->char('address', 50)->nullable();
            $table->decimal('longitude', 11, 8)->nullable();
            $table->decimal('latitude', 10, 8)->nullable();
            $table->decimal('price', 12, 2)->nullable()->unsigned();
            $table->boolean('visible')->nullable()->default(false);
            $table->text('cover_img')->nullable();
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
        Schema::dropIfExists('apartments');
    }
};
