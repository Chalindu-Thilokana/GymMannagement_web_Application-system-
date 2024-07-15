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
        Schema::create('shedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('description-activity');
            $table->date('valid_time');
            $table->double('bmi');
            $table->string('helth_condition');
            $table->double('trainer_id');
            $table->double('member_id');
            $table->string('shedule');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shedules');
    }
};