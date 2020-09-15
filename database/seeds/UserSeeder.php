<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Mohammed Abdalla',
                'email' => 'moh97abd97@gmail.com',
                'is_admin' => 1,
                'password' => bcrypt('1234qwer'),
            ],
            [
                'name' => 'ahmed Abdalla',
                'email' => 'ahmed@gmail.com',
                'is_admin' => 0,
                'password' => bcrypt('1234qwer'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
