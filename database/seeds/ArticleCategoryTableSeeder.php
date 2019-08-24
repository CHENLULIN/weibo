<?php

use Illuminate\Database\Seeder;

class ArticleCategoryTableSeeder extends Seeder
{
	protected $categories = [
		[
			'name' => '首页',
			'admin_user_id' => '0',
			'parent_id' => '0',
			'path' => '0,',
		],
		[
			'name' => '政策法规',
			'admin_user_id' => '0',
			'parent_id' => '0',
			'path' => '0,',
		],
		[
			'name' => '最新资讯',
			'admin_user_id' => '0',
			'parent_id' => '0',
			'path' => '0,',
		],
		[
			'name' => '往年活动',
			'admin_user_id' => '0',
			'parent_id' => '0',
			'path' => '0,',
		],
		[
			'name' => '病友故事',
			'admin_user_id' => '0',
			'parent_id' => '0',
			'path' => '0,',
		],
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
	    if ( ! DB::table('article_categories')->first()) {
		    DB::table('article_categories')->insert($this->categories);
	    }
    }
}
