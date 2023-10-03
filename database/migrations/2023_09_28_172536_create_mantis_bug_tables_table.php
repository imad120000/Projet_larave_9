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
        Schema::create('mantis_bug_tables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('reporter_id');
            $table->unsignedBigInteger('handler_id');
            $table->unsignedBigInteger('duplicate_id');
            $table->smallInteger('priority')->default(30);
            $table->smallInteger('severity')->default(50);
            $table->smallInteger('reproducibility')->default(10);
            $table->smallInteger('status')->default(10);
            $table->smallInteger('resolution')->default(10);
            $table->smallInteger('projection')->default(10);
            $table->smallInteger('eta')->default(10);
            $table->unsignedBigInteger('bug_text_id');
            $table->string('os', 32)->default('');
            $table->string('os_build', 32)->default('');
            $table->string('platform', 32)->default('');
            $table->string('version', 64)->default('');
            $table->string('fixed_in_version', 64)->default('');
            $table->string('build', 32)->default('');
            $table->unsignedBigInteger('profile_id');
            $table->smallInteger('view_state')->default(10);
            $table->string('summary', 128)->default('');
            $table->integer('sponsorship_total')->default(0);
            $table->tinyInteger('sticky')->default(0);
            $table->string('target_version', 64)->default('');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('date_submitted');
            $table->unsignedBigInteger('due_date');
            $table->unsignedBigInteger('last_updated');
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
        Schema::dropIfExists('mantis_bug_tables');
    }
};
