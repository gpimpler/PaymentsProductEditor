<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('styles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id', 11)->unique()->comment('Unique identifier for the style ids');
            $table->mediumInteger('product');
            $table->string('style')->comment('The style id to be used');
            $table->longText('data')->nullable()->comment('The json data associated with this style id.');
            $table->smallInteger('version');
            $table->timestamp('date')->useCurrent();
            $table->tinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('styles');
    }
}
