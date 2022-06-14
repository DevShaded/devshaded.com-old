<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->integer('github_id')->unique();
            $table->string('name');
            $table->string('url');
            $table->longText('description')->nullable();
            $table->string('language')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('repositories');
    }
};
