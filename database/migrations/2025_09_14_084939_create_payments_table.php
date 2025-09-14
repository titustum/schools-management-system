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
        // 💰 Payments (actual transactions)
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->foreignId('student_id')->constrained()->onDelete('cascade');
            $table->foreignId('classroom_id')->constrained()->onDelete('cascade'); // usually current class
            $table->decimal('amount', 10, 2);
            $table->string('method')->nullable(); // Cash, M-Pesa, etc.
            $table->string('transaction_code')->nullable();
            $table->string('term')->default('Term 1');
            $table->string('year')->default(date('Y'));
            $table->date('date');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
