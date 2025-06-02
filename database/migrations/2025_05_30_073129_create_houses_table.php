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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('bedrooms');
            $table->integer('bathrooms');
            $table->integer('area');
            $table->integer('car_park'); // ใช้ _ แทน - เพื่อหลีกเลี่ยง error
            $table->string('location');
            $table->string('type')->nullable(); // บ้านเดี่ยว, ทาวน์เฮ้าส์ ฯลฯ
            $table->integer('floors')->nullable();
            $table->integer('year_built')->nullable();
            $table->text('nearby_places')->nullable(); // เช่น: โรงเรียน, BTS, โรงพยาบาล
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('houses');
    }
};
