<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Comic;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();


            $table->string('title', 150);
            $table->text('description');
            $table->text('thumb');
            $table->string('price', 12);
            $table->string('series', 50);
            $table->date('sale_date');
            $table->string('type', 50);
            // $table->array('artists');
            // $table->array('writers');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
