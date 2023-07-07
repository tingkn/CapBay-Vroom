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
        Schema::table('registrations', function (Blueprint $table) {
            $table->decimal('down_payment', 10, 2)->nullable();
            $table->boolean('eligibility')->default(false);
            $table->string('purchase_status')->nullable();
            $table->decimal('loan_amount', 10, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('down_payment');
            $table->dropColumn('eligibility');
            $table->dropColumn('purchase_status');
            $table->dropColumn('loan_amount');
        });
    }
};
