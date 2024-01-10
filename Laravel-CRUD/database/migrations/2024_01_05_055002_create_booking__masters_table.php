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
        Schema::create('booking__masters', function (Blueprint $table) {
            $table->id('Booking_Id');
            $table->bigInteger('User_ref_Id')->unsigned();
            $table->bigInteger('Resource_ref_Id')->unsigned();
            $table->string('Faculty_Name');
            $table->timestamp('Starting_Time')->useCurrent();
            $table->timestamp('Ending_Time')->useCurrent();
            $table->timestamp('Created_At')->useCurrent();
            $table->enum('Program_type',['Internal','External']);
            $table->text('Description');
            $table->enum('Status_type',['Pending','Rejected','Accepted']);
            $table->bigInteger('ApprovedBy_Ref_User_Id')->unsigned();
            $table->timestamp('Approved_At')->nullable();
            $table->text('On_Reject_Reason')->nullable();
            // $table->timestamps();

            $table->foreign('User_ref_Id')->references('User_Id')->on('user__masters')->onDelete('cascade');
            $table->foreign('Resource_ref_Id')->references('Resource_Id')->on('resource__masters')->onDelete('cascade');
            $table->foreign('ApprovedBy_Ref_User_Id')->references('User_Id')->on('user__masters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking__masters');
    }
};
