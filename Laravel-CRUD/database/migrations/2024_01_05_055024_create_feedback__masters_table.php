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
        Schema::create('feedback__masters', function (Blueprint $table) {
            $table->id('Feedback_Id');
            $table->bigInteger('User_ref_Id')->unsigned();
            $table->bigInteger('Resource_ref_Id')->unsigned();
            $table->text("Feedback");
            $table->timestamps();

            $table->foreign('User_ref_Id')->references('User_Id')->on('user__masters')->onDelete('cascade');
            $table->foreign('Resource_ref_Id')->references('Resource_Id')->on('resource__masters')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback__masters');
    }
};
