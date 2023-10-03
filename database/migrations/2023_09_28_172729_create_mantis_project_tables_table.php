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
        Schema::create('mantis_project_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name', 128)->default('');
            $table->smallInteger('status')->default(10);
            $table->tinyInteger('enabled')->default(1);
            $table->smallInteger('view_state')->default(10);
            $table->smallInteger('access_min')->default(10);
            $table->string('file_path', 250)->default('');
            $table->longText('description');
            $table->unsignedBigInteger('category_id')->default(1);
            $table->tinyInteger('inherit_global')->default(0);
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
        Schema::dropIfExists('mantis_project_tables');
    }
};
