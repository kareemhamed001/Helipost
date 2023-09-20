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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('phone1')->unique();
            $table->string('phone2')->nullable()->unique();
            $table->string('password');
            $table->foreignIdFor(\App\Models\City::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(\App\Models\Province::class)->nullable()->constrained()->nullOnDelete();
            $table->text('address')->nullable();
            $table->text('notes')->nullable();
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
