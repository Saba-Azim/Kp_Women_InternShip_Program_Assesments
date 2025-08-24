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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->integer('total_purchased')->default(0);
            $table->integer('total_sold')->default(0);
            $table->integer('current_stock')->default(0);
            $table->decimal('total_purchase_cost', 12, 2)->default(0);
            $table->decimal('total_sales_revenue', 12, 2)->default(0);
            $table->decimal('profit', 12, 2)->default(0);
            $table->date('report_date')->nullable();
            $table->timestamps();
            $table->foreign('book_id')->references('id')->on('books')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
