<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(200)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());
        $user = User::find(1);
        $user->name = "Lin yu dong";
        $user->email = "306073100@qq.com";
        $user->is_admin = true;
        $user->password = bcrypt('123456');
        $user->save();
    }
}
