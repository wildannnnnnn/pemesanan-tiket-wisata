<?php

namespace Database\Seeders;

use App\models\User;
use Illuminate\Database\seeder;
use Illuminate\support\facades\hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'agung wahyudi';
        $user->email = 'admin@gmail.com';
        $user->password = hash::make('12345678');
        $user->save();
    }
}
