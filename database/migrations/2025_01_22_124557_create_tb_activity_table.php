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
        Schema::create('tb_activity', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('id_company_profile')->constrained('tb_company_profile');
            $table->string('activity_name', 100);
            $table->text('supervisor_name');
            $table->string('devisi');
            $table->string('pic');
            $table->integer('target');
            $table->integer('realization');
            $table->decimal('achievement', 5, 2);
            $table->date('deadline');
            $table->integer('count_down');
            $table->enum('status_activity', ['completed', 'on-progress', 'not-completed']);
            $table->date('completion_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_activity');
    }
};
