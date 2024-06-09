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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('med_school')->default('UofA')->nullable();
            $table->string('year_of_study')->nullable();
            $table->string('class_of')->nullable();
            $table->string('previous_degree')->nullable();
            $table->string('mmis_attended')->nullable();
            $table->string('mmis_interviewed')->nullable();
            $table->string('mentorship_experience')->nullable();
            $table->string('applicants_helped')->nullable();
            $table->string('about')->nullable();
            $table->string('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
