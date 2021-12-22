<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\seeder;
use Illuminate\support\facades\hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run(){

            $admin = Role::create([
                'name' => 'admin',
                'display_name' => 'izin admin'
            ]);

            $pengguna = Role::create([
                'name' => 'pengguna',
                'display_name' => 'izin pengguna'
            ]);

            $kasir = Role::create([
                'name' => 'kasir',
                'display_name' => 'izin kasir'
            ])
            $User = new User();
            $User->name = 'agung wahyudi';
            $User->email = 'admin@gmail.com';
            $User->password = hash::make('12345678');
            $User->save();
            $User->attachRole($admin);

            $user = new User();
            $user->name = 'didin samsudin';
            $user->email = 'admin@gmail.com';
            $user->password = hash::make('12345678');
            $user->save();
            $user->attachRole($pengguna);
        }

}
