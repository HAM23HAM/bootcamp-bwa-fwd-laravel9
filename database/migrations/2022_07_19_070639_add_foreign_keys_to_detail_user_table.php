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
        Schema::table('detail_user', function (Blueprint $table) {
            $table->foreignId('user_id', 'fk_detail_user_to_user')->constrained()->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreignId('type_user_id', 'fk_detail_user_to_type_user')->constrained("type_user")->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_user', function (Blueprint $table) {
            // $table->dropForeign(['user_id']);
            // $table->dropForeign(['type_user_id']);
        });
    }
};
