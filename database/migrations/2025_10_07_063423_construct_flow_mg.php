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
        Schema::create('construct_flow_data', function (Blueprint $table) {
            $table->id();
            $table->string('project_code')->unique();
            $table->string('name');
            $table->enum('status', ['planned', 'active', 'on_hold', 'completed', 'cancelled']);
            $table->date('start_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('construct_flow_data');
    }
};
