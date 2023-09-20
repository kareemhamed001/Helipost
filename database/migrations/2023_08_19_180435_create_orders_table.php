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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->nullOnDelete();

            $table->decimal('shipping_cost');
            $table->decimal('total_cost');
            $table->string('status')->comment('0:pending,1:successful,2:with driver,3:client not responding,4:has issue,5:returned to shipper,6:postponed,7:to resend');
            $table->text('driver_notes')->nullable();
            $table->text('company_notes')->nullable();
            $table->string('receiver_phone1')->nullable();
            $table->string('receiver_phone2')->nullable();
            $table->foreignIdFor(\App\Models\City::class, 'receiver_city')->nullable()->constrained('cities')->nullOnDelete();
            $table->foreignIdFor(\App\Models\Province::class, 'receiver_province')->nullable()->constrained('provinces')->nullOnDelete();
            $table->string('receiver_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
