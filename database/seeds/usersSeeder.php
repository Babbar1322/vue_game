<?php

use Illuminate\Database\Seeder;
use App\User;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'phone'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin'),
            ],
           
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
