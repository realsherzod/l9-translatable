<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('region_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');

            $table->unique(['region_id', 'locale']);
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_translations');
    }
};
