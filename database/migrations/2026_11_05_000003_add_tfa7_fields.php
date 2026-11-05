<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->after('full_name');
            $table->string('avatar')->nullable()->after('email');
        });
        Schema::table('customers', function (Blueprint $table) {
            $table->string('address')->nullable()->after('phone');
        });
    }
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) { $table->dropColumn(['email', 'avatar']); });
        Schema::table('customers', function (Blueprint $table) { $table->dropColumn('address'); });
    }
};
