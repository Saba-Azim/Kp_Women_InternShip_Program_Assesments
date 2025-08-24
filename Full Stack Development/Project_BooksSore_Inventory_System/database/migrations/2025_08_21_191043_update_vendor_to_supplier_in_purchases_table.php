<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateVendorToSupplierInPurchasesTable extends Migration
{
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            // Drop old foreign key
            $table->dropForeign(['vendor_id']);

            // Rename column
            $table->renameColumn('vendor_id', 'supplier_id');
        });

        Schema::table('purchases', function (Blueprint $table) {
            // Add new foreign key constraint
            $table->foreign('supplier_id')
                  ->references('id')->on('suppliers')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            // Drop supplier foreign key
            $table->dropForeign(['supplier_id']);

            // Rename back to vendor_id
            $table->renameColumn('supplier_id', 'vendor_id');
        });

        Schema::table('purchases', function (Blueprint $table) {
            // Restore vendor foreign key
            $table->foreign('vendor_id')
                  ->references('id')->on('vendors')
                  ->onDelete('cascade');
        });
    }
}
