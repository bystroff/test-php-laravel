<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use IntlChar;

class NotebookUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $item = new NotebookUser();
        // $item->firstname = 'firstname';
        // $item->lastname ='lastname';
        // $item->middlename ='middlename';
        // $item->alphabet_id ='alphabet_id';
        // $item->companies_id ='companies_id';
        // $item->phone ='phone';
        // $item->email ='email';
        // $item->birthday ='birthday';
        // $item->photo ='photo';
        // $item->save();

        DB::table('notebook_users')->insert([
            'firstname' => Str::random(10),
            'lastname' => Str::random(10),
            'middlename' => Str::random(10),
            'alphabet_id' => Str::random(10),
            'companies_id' => Str::random(10),
            'phone' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'photo' => Str::random(10),
        ]);
    }
}
