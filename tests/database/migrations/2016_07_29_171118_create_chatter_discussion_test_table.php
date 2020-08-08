<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatterDiscussionTestTable extends Migration
{
    public function up()
    {
        Schema::create('chatter_discussion', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('chatter_category_id')->default('1');
            $table->string('title');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->boolean('sticky')->default(false);
            $table->integer('views')->unsigned()->default('0');
            $table->boolean('answered')->default(0);
            $table->string('slug')->nullable();
            $table->string('color', 20)->nullable()->default('#232629');
            $table->timestamp('last_reply_at')->useCurrent();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('chatter_category_id')
                ->references('id')
                ->on('chatter_categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::drop('chatter_discussion');
    }
}
