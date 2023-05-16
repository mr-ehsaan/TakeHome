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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->longtext('title')->nullable(true);
            $table->longtext('description')->nullable(true);
            $table->fullText('description')->nullable(true);
            $table->longtext('url')->nullable(true);
            $table->fullText('url')->nullable(true);
            $table->bigInteger('source_id')->nullable(true);
            $table->bigInteger('category_id')->nullable(true);
            $table->bigInteger('author_id')->nullable(true);
            $table->timestamp('published_at')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
