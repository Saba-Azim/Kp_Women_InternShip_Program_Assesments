<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Step 1: Drop foreign key
            $table->dropForeign(['vendor_id']);

            // Step 2: Rename column
            $table->renameColumn('vendor_id', 'supplier_id');
        });

        Schema::table('books', function (Blueprint $table) {
            // Step 3: Re-add foreign key with new column
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Drop new foreign key
            $table->dropForeign(['supplier_id']);

            // Rename back
            $table->renameColumn('supplier_id', 'vendor_id');
        });

        Schema::table('books', function (Blueprint $table) {
            // Re-add old foreign key
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
        });
    }
};
