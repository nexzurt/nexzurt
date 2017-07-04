<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModAdminsTableAddCols extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->string('profile_pic')->nullable()->after('email');
            $table->tinyInteger('super_admin')->default(0)->after('remember_token');
            $table->tinyInteger('active')->default(1)->after('super_admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('profile_pic');
            $table->dropColumn('active');
            $table->dropColumn('super_admin');
        });
    }
}
