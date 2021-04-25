<?php


use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run()
    {
        //
        User::create([
            'username'  => 'admin',
            'rule' => 0,
            'email' => 'admin@gmail.com',
            'password'  => bcrypt('admin1234')
    ]);
    }
}
