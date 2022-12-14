<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'ImePrezime' => 'Milos Milosevic',
            'JMBG' => '1234567890123',
            'tipkorisnika_id' => '1',
            'name' => 'Milos',
            'email' => 'milos.milosevic030303@gmail.com',
            'password' => Hash::make('bildstudio')]);

            DB::table('users')->insert([
                'ImePrezime' => 'Janko Jankovic',
                'JMBG' => '0987654321093',
                'tipkorisnika_id' => '2',
                'name' => 'Janko',
                'email' => 'jankojankovic@gmail.com',
                'password' => Hash::make('sifra123')]);
    }

    
}

