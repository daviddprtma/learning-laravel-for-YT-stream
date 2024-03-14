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
        //
        Schema::table('obats',function(Blueprint $table){
            $table->unsignedBigInteger('kategoriobat_id');

            $table->foreign('kategoriobat_id')->references('id')->on('kategoriobats');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('obats',function(Blueprint $table){
            $table->dropForeign(['kategoriobat_id']);
            $table->dropColumn('kategoriobat_id');
        });
    }
};
