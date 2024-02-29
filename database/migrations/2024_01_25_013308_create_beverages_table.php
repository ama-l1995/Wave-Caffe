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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            // $table->date('Beverage_Date')->nullable();
            $table->string('Title' , 100);
            $table->longText('Content');
            $table->double('Price');
            $table->boolean('Published');
            $table->boolean('Special');
            $table->string('image', 100);
            $table->foreignId('category_id')->constrained('categories');
            // $table->string('category_name')->constrained('categories');
            $table->softDeletes();
            // $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverages');
    }
};
