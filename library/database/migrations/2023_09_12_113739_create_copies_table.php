<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id('copy_id');
            $table->boolean('hardcovered')->default(0);
            $table->integer('status');
            $table->year('publication');
            $table->foreignId('book_id')->references('book_id')->on('books');
            $table->timestamps();
        });

        Copy::create([
            'status' => 0,
            'publication' => 1969,
            'book_id' => 1,
        ]);

        Copy::create([
            'status' => 1,
            'publication' => 1999,
            'book_id' => 2,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
