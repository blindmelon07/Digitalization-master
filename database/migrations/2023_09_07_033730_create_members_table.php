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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('members_id');
            $table->string('full_name');
            $table->string('Address');
            $table->string('Cellphone_num');
            $table->string('Gender');
            $table->string('Geograph_group');
            $table->string('Date_of_birth');
            $table->string('Age');
            $table->string('civil_status');
            $table->string('bussi_emp_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
