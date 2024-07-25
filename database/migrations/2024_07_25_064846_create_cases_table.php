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
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('case_number')->unique();
            $table->string('title');
            $table->string('surgeon_id')->constrained();
            $table->foreignId('surgery_location')->constrained(
                table: 'locations', indexName: 'surgery_location_id'
            );
            $table->foreignId('clinic_location')->constrained(
                table: 'locations', indexName: 'clinic_location_id'
            );        
            $table->foreignId('patient_id')->constrained()->onDelete('cascade');
            $table->enum('priority', ['High', 'Medium', 'Low'])->default('Low');          
            $table->date('surgery_date')->nullable();
            $table->string('scheduling_status')->nullable();
            $table->boolean('is_standby')->default(0)->comment('0->No , 1->Yes');
            $table->string('clearance')->nullable();
            $table->text('surgery_notes')->nullable();
            $table->text('case_instruction')->nullable();
            $table->string('surgery_duration')->nullable();
            $table->integer('blood_unit')->nullable();
            $table->string('facilty_equipment')->nullable();
            $table->enum('admission_plan', ['outpatient','extended_recovery','same_day_admit']);
            $table->string('anesthesia')->nullable();
            $table->string('antibiotics')->nullable();
            $table->string('pain_medication')->nullable();
            $table->boolean('neuromuscular_monitoring')->default(0);
            $table->enum('save_as', ['quick_pick', 'draft', 'case'])->default('case');   
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cases');
    }
};
