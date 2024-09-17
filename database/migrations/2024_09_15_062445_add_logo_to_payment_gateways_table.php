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
        Schema::table('payment_gateways', function (Blueprint $table) {
            $table->string('logo')->nullable(); // Adding a new field for logo
            $table->dropColumn('rate');         // Dropping the rate field
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payment_gateways', function (Blueprint $table) {
            $table->decimal('rate', 10, 2)->nullable(); // Add the rate field back
            $table->dropColumn('logo');                 // Remove the logo field
        });
    }
};
