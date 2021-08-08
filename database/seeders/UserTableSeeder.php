<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\support\Facades\Hash;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useDate = [
            [
                'name' => 'admin',
                'email' => 'admin@fpt.edu.vn',
                'password' => Hash::make('123456')

            ],

            [
                'name' => 'hungtm',
                'email' => 'hungtm@fpt.edu.vn',
                'password' => Hash::make('123456')
            ],
        ];
        foreach ($useDate as $u){
            $model = new User();
            $model->fill($u);
            $model->save();
        }
    }
}
