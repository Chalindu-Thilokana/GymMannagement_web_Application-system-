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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('full_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->integer('age');
            $table->string('gender');
            $table->string('address');
            $table->double('weight');
            $table->double('height');
            $table->double('BMI');
            
            $table->string('perpose');
            $table->integer('mobile_phone_number');
            $table->integer('land_phone_number');
            $table->integer('user_id');
            $table->integer('trainer_id');
            $table->integer('membership_type_id');

          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};