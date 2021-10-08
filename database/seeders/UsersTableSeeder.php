<?php

namespace Database\Seeders;

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
        //cliente
        $cliente=User::create([
            'name'=>'cliente',
            'email'=>'cliente@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $cliente->assignRole('cliente');


        //administrador
        $administrador=User::create([
            'name'=>'administrador',
            'email'=>'administrador@gmail.com',
            'password'=>bcrypt('12345678')
        ]); 

        $cliente->assignRole('administrador');

        //administrador
        $medio=User::create([
            'name'=>'medio',
            'email'=>'meido@gmail.com',
            'password'=>bcrypt('12345678')
        ]); 

        $cliente->assignRole('medio');
    }
}
