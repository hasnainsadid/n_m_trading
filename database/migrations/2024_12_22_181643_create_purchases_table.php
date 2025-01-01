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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->string('date');
            $table->string('obi_unit')->nullable();
            $table->string('obi_price')->nullable();
            $table->string('pm_bill_of_entry')->nullable();
            $table->string('pm_bill_of_entry_date')->nullable();
            $table->string('pm_unit')->nullable();
            $table->string('pm_price_without_vat')->nullable();
            $table->string('pm_supplementary_duty')->nullable();
            $table->string('pm_vat')->nullable();
            $table->string('cbi_unit')->nullable();
            $table->string('cbi_price')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
