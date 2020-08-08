<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatterPostTestTable extends Migration
{
    public function up()
    {
        Schema::create('chatter_post', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('chatter_discussion_id');
            $table->unsignedBigInteger('user_id');
            $table->longText('body');
            $table->boolean('markdown')->default(0);
            $table->boolean('locked')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('chatter_discussion_id')
                ->references('id')
                ->on('chatter_discussion')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('chatter_post');
    }
}
