<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Using ORM Eloquent
        $user=new User;
        $user->document= 1054326865;
        $user->fullname= 'Jhon Wick';
        $user->gender= 'Male';
        $user->birthdate= '1988-10-07';
        $user->phone= '310432678';
        $user->email= 'jhonwick@gmail.com';
        $user->password= bcrypt('admin');
        $user->role= 'Administrator';
        $user->save();

        $user=new User;
        $user->document= 789231567;
        $user->fullname= 'Oscar Aristizabal';
        $user->gender= 'Male';
        $user->birthdate= '1981-10-17';
        $user->phone= '310432678';
        $user->email= 'edugarciaescobar@gmail.com';
        $user->password= bcrypt('admin');
        $user->role= 'Administrator';
        $user->save();

        //using DB Array
        DB:: table('users')->insert ([
            'document'=> 1098432567,
            'fullname'=> 'Alanis Morrisete',
            'gender'=> 'Female',
            'birthdate'=> '1970-05-10',
            'phone'=> '310987693',
            'email'=> 'alanismo@gmail.com',
            'password'=> bcrypt('admin'),
            'role'=> 'Customer',
            'created_at'=> now(),
            'updated_at'=> now()     
        ]);

    }
}
