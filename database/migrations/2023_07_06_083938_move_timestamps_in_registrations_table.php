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
            $table->timestamp('created_at')->nullable()->change();
            $table->timestamp('updated_at')->nullable()->change();
        });

        DB::statement('ALTER TABLE registrations MODIFY COLUMN created_at TIMESTAMP NULL DEFAULT NULL AFTER loan_amount');
        DB::statement('ALTER TABLE registrations MODIFY COLUMN updated_at TIMESTAMP NULL DEFAULT NULL AFTER created_at');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE registrations MODIFY COLUMN updated_at TIMESTAMP NULL DEFAULT NULL AFTER down_payment');
        DB::statement('ALTER TABLE registrations MODIFY COLUMN created_at TIMESTAMP NULL DEFAULT NULL AFTER purchase_status');

        Schema::table('registrations', function (Blueprint $table) {
            $table->timestamp('created_at')->nullable(false)->change();
            $table->timestamp('updated_at')->nullable(false)->change();
        });
    }
};
