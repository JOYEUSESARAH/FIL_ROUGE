<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'MBANZA LINA',
            'username' => 'mbanzalina',
            'email' =>'mbanzalina15@gmail.com',
            'username' => 'mbanzalina',

            'roles_id' => 1,
            'password' => Hash::make('lina@'),
            ]);


            DB::table('users')->insert([
                'name' => 'CONGO AWA',
                'username' => 'congoawa',
                'email' =>'congoawa2023@gmail.com',
                'username' => 'congoawa',

                'roles_id' => 2,
                'password' => Hash::make('congo03@'),
                ]);

                DB::table('users')->insert([
                    'name' => 'JOYEUSE SARAH',
                    'username' => 'joys',
                    'email' =>'joysarah15@gmail.com',
                    'username' => 'joys',

                    'roles_id' => 3,
                    'password' => Hash::make('joys07@'),
                    ]);
    }
}
