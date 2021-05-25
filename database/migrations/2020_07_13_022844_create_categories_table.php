<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('name');
            $table->string('slug')->unique();
            $table->enum('type', [1, 2, 3])->default(1);
            $table->enum('state', [0, 1])->default(1);
            $table->timestamps();
            $table->softDeletes();

            // Index
            $table->unique(['name', 'type'], 'name_type_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
