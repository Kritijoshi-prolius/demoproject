<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
{
    Schema::create('text_files', function (Blueprint $table) {
        $table->id();
        $table->string('filepath')->unique();
        $table->text('content');
      
    });
}



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('text_files');
    }
}
