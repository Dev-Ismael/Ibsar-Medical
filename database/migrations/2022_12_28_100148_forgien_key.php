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
        ################ Article ###################
        Schema::table('articles', function (Blueprint $table) {
            $table->foreign("category_id")
            ->references('id')
            ->on("categories")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
        ################ Appointment ###################
        Schema::table('appointments', function (Blueprint $table) {
            $table->foreign("member_id")
            ->references('id')
            ->on("members")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
        ################ Order ###################
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign("offer_id")
            ->references('id')
            ->on("offers")
            ->onDelete("cascade")
            ->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
