<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 100)->after('id')->nullable();
            $table->string('email', 100)->after('name');
            $table->string('password', 100)->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name', 100);
            $table->dropColumn('email', 100);
            $table->dropColumn('password', 100);
        });
    }
};
