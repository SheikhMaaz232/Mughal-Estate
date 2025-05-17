<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->integer('group_id');
            $table->integer('company_id');
            $table->string('name_en');
            $table->char('name_ur', 255);
            $table->string('project_code');
            $table->string('debit_code');
            $table->text('description_en');
            $table->char('description_ur', 255);
            $table->string('phase_en');
            $table->char('phase_ur', 255);
            $table->text('address_en');
            $table->char('address_ur', 255);
            $table->string('phase_map');
            $table->timestamps();
            $table->index('group_id');
            $table->index('company_id');
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
