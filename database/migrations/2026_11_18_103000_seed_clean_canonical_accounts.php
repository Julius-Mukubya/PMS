<?php

use Database\Seeders\CanonicalDemoSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        (new CanonicalDemoSeeder())->run();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No rollback needed for seed updates.
    }
};
