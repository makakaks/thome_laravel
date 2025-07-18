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
        Schema::create('pastworks', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('coverPageImg');
            $table->jsonb('title')->nullable();
            $table->jsonb('detail')->nullable();
            $table->jsonb('images')->nullable();
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
        Schema::dropIfExists('pastworks');
    }
};
