<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('email',50)->nullable();
            $table->string('second_email',50)->nullable();
            $table->string('phone_number')->nullable();
            $table->string('second_phone_number')->nullable();
            $table->string('watsapp')->nullable();
            $table->string('address',500)->nullable();
            $table->timestamps();
        });

        $add = DB::table('contact')->insert([
            "email" => "iletisim@gmail.com",
            "second_email" => "",
            "phone_number" => "",
            "second_phone_number" => "",
            "watsapp" => "",
            "address" => "",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contact');
    }
}
