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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', [1, 2])->comment('1. Administrator, 2. Member');
            $table->string('nip')->nullable();
            $table->string('position');
            $table->string('institution');
            $table->string('nsm')->nullable();
            $table->string('npsn')->nullable();
            $table->string('institution_address')->nullable();
            $table->string('foundation')->nullable();
            $table->string('year')->nullable();
            $table->string('logo')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
