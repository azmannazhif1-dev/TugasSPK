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
        Schema::create('tes_fisik', function (Blueprint $table) {
            $table->id();

            $table->foreignId('atlet_id')
                ->constrained('atlet')
                ->onDelete('cascade');

            $table->date('tanggal_tes');

            $table->double('beep_test');
            $table->double('sprint_20m');
            $table->double('illinois_agility');
            $table->double('vertical_jump');
            $table->integer('push_up');
            $table->double('fatigue_index');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tes_fisik');
    }
};
