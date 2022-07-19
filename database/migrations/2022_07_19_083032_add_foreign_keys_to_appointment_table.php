<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->foreignId('user_id', 'fk_appointment_to_user')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('doctor_id', 'fk_appointment_to_doctor')->references('id')->on('doctor')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('consultation_id', 'fk_appointment_to_consultation')->references('id')->on('consultation')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('appointment', function (Blueprint $table) {
            $table->dropForeign(['doctor_id']);
            $table->dropForeign(['consultation_id']);
        });
    }
};
