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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone_no')->nullable();
            $table->text('description')->nullable();
            $table->string('education')->nullable();
            $table->string('specialization_ids')->nullable();
            $table->string('address')->nullable();
            $table->string('landmark')->nullable();
            $table->string('city')->nullable();
            $table->longText('location_direction')->nullable();
            $table->longText('video_link')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('is_homevisit')->default(0);
            $table->decimal('homevisit_ammount', 9, 2)->default(00.00);
            $table->boolean('is_clinicvisit')->default(0);
            $table->decimal('clinicvisit_ammount', 9, 2)->default(00.00);
            $table->boolean('is_videoconsultation')->default(0);
            $table->decimal('videoconsultation_ammount', 9, 2)->default(00.00);
            $table->unsignedInteger('review_count')->default(0);
            $table->unsignedInteger('rate_count')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('doctors');
    }
};
