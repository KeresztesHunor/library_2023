<?php

use App\Models\Book;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id');
            $table->string('author', 32);
            $table->string('title', 128);
            $table->integer('pieces')->default(64);
            $table->timestamps();
        });

        Book::create([
            'book_id' => 1,
            'author' => 'Agyalá Gyula',
            'title' => 'C for dummies',
        ]);

        Book::create([
            'book_id' => 2,
            'author' => 'Lapos Elemér',
            'title' => 'Kamasutra',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
