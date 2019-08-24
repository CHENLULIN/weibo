<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->comment('文章标题');
            $table->string('desc')->comment('简介');
            $table->text('content')->comment('内容');
            $table->bigInteger('article_category_id')->comment('分类id');
            $table->bigInteger('admin_user_id')->comment('最后操作id');
            $table->timestamps();
        });
	    DB::statement("ALTER TABLE `articles` comment'文章表' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
