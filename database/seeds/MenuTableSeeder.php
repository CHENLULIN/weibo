<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	if ( ! DB::table('admin_menu')->where('title', 'NMO-MS')->first()) {
		    $menu = [
			    ['title' => 'NMO-MS', 'parent_id' => 0, 'icon' => 'fa-envelope', 'uri' => Null, 'permission' => 'nmo-ms'],
			    ['title' => '文章管理', 'parent_id' => 0, 'icon' => 'fa-bars', 'uri' => Null, 'permission' => 'nmo-ms'],
			    ['title' => '文章分类', 'parent_id' => 0, 'icon' => 'fa-bars', 'uri' => 'nmo-ms/article/article-categories', 'permission' => 'nmo-ms'],
			    ['title' => '文章', 'parent_id' => 0, 'icon' => 'fa-bars', 'uri' => 'nmo-ms/article/article-categories', 'permission' => 'nmo-ms'],
		    ];
		    DB::table('admin_menu')->insert($menu);
	    }
	    
	    if (DB::table('admin_permissions')->where('slug', 'nmo-ms')->first()) {
		    $permission = [
			    'name' => 'nmo-ms网站',
			    'slug' => 'nmo-ms',
			    'http_method' => 'GET,POST,DELETE,PATCH',
			    'http_path' => '/nmo-ms/*'
		    ];
		
		    DB::table('admin_permissions')->insert($permission);
	    }

    }
}
