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
        Schema::create('createdocuments', function (Blueprint $table) {
            $table->id();
            $table->string('documentid')->nullable();
            $table->longText('documentname')->nullable();
            $table->longText('documentdesc')->nullable();
            $table->string('status')->default(1);
            $table->string('useremail')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('createdocuments');
    }
};
