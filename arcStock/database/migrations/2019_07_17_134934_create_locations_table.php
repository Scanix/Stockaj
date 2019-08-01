<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('tool_id');
            $table->unsignedBigInteger('person_id');
            $table->boolean('isOver')
                ->default(false);

            // Foreign key
            $table->foreign('tool_id')
                ->references('id')
                ->on('tools');

            $table->foreign('person_id')
                ->references('id')
                ->on('persons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sectors', function (Blueprint $table) {
            $table->dropForeign('tool_id');
            $table->dropForeign('person_id');
        });
        Schema::dropIfExists('locations');
    }
}
