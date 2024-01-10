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
        Schema::create('resource__department__priority__transiction__table', function (Blueprint $table) {
            $table->id('Index');
            $table->bigInteger('Resource_ref_Id')->unsigned();
            $table->bigInteger('Program_ref_Id')->unsigned();
            $table->timestamps();

            // Specify custom names for foreign key constraints
            $table->foreign('Resource_Ref_Id')->references('Resource_Id')->on('resource__masters')->onDelete('cascade')->name('resource_ref_fk');
            $table->foreign('Program_Ref_Id')->references('Program_Id')->on('program__masters')->onDelete('cascade')->name('program_ref_fk');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resource__department__priority__transiction__table');
    }
};
?>