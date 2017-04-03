<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->toArray());

        $user = User::find(1);
        $user->name = 'leo';
        $user->email = 'shenzhi@live.com';
        $user->password = bcrypt('123456');
        $user->is_admin = true;
        $user->save();
    }
}
