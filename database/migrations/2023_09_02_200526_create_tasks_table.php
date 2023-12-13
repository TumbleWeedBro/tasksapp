<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use app\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_title');
            $table->longText('task_content');
            $table->string('slug')->unique()->default('default-slug');
            $table->date('due_date');
            $table->string('urgency');
            $table->string('completed')->nullable();
            // $table->integer('user_id')->unsigned()->index('user_id')->comment('author of the task');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
