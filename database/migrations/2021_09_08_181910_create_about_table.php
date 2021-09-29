<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->longText('history')->nullable();
            $table->longText('mission')->nullable();
            $table->longText('vision')->nullable();
            $table->timestamps();
        });

        $add = DB::table('about')->insert([
            "history" => "test içerik",
            "mission" => "test içerik",
            "vision" => "test içerik",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
}
