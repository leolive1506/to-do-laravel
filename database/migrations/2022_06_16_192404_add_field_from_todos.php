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
        Schema::table('todos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('file_extension', 20)->nullable();
            $table->date('remember_at')->nullable();
            $table->bigInteger('cost')->nullable(); // centavos
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('file_extension');
            $table->dropColumn('remember_at');
            $table->dropColumn('cost');
        });
    }
};
