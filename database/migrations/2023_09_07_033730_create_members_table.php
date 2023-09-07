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
            $table->strings('members_id');
            $table->strings('Fullname');
            $table->strings('Address');
            $table->strings('Cellphone_num');
            $table->strings('Gender');
            $table->strings('Geograph_group');
            $table->strings('Date_of_birth');
            $table->strings('Age');
            $table->strings('Civil_status');
            $table->strings('Bussi_Emp_name');
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
