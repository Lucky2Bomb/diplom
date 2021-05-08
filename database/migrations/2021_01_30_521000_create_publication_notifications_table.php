<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_notifications', function (Blueprint $table) {
            $table->id();

            $table->boolean('is_checked')->default(false);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('publication_id');
            $table->foreign('publication_id')->references('id')->on('publications');

            $table->unsignedBigInteger('comment_id');
            $table->foreign('comment_id')->references('id')->on('publication_comments');

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
        Schema::dropIfExists('publication_notifications');
    }
}
