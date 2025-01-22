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
        Schema::create('tb_gap', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_swot')->constrained('tb_swot');
            $table->decimal('current_state', 10, 2);
            $table->decimal('gap', 10, 2);
            $table->text('planing')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_gap');
    }
};
