<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user__masters', function (Blueprint $table) {
            $table->id('User_Id'); // This will create a primary key 'id' column
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->enum('Type', ['Admin', 'User']);
            $table->string('Email');
            $table->string('Password');
            $table->enum('Gender', ['Male', 'Female']);
            $table->string('Designation');
            $table->bigInteger('Program_Ref_Id')->unsigned();
            $table->integer('Created_By')->nullable();
            $table->timestamp('Created_At');
            $table->timestamp('Deleted_At')->nullable();
            $table->timestamps(); // This will add 'created_at' and 'updated_at' columns automatically

            $table->foreign('Program_Ref_Id')->references('Program_Id')->on('program__masters')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user__masters');
    }
};

?>