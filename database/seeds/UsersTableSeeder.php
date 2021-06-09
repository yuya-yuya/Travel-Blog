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
        $dataSet = [
            [
                'name' => 'トム',
                'email' => 'tom@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'ジェリー',
                'email' => 'jerry@example.com',
                'password' => bcrypt('password'),
            ],
        ];
    
        foreach ($dataSet as $data) {
            User::create($data);
        }
    }
}
