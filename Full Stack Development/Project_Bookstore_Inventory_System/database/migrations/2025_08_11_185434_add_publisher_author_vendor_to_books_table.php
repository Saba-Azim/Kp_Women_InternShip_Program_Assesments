<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('publisher_id')->nullable()->after('id');
            $table->unsignedBigInteger('author_id')->nullable()->after('publisher_id');
            $table->unsignedBigInteger('vendor_id')->nullable()->after('author_id');

            $table->foreign('publisher_id')->references('id')->on('publishers')->onDelete('set null');
            $table->foreign('author_id')->references('id')->on('authors')->onDelete('set null');
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['publisher_id']);
            $table->dropForeign(['author_id']);
            $table->dropForeign(['vendor_id']);

            $table->dropColumn(['publisher_id', 'author_id', 'vendor_id']);
        });
    }
};
