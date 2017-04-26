<?php

use Illuminate\Database\Seeder;
use App\Usher;

class UshersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dave',
            'last_name' => 'Prezuhy',
            'team' => 'Team 1',
            'capitan' => 1,
            'email' => 'davidp@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'John',
            'last_name' => 'Long',
            'team' => 'Team 1',
            'capitan' => 0,
            'email' => 'johnl@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Lee',
            'last_name' => 'Champlin',
            'team' => 'Team 1',
            'capitan' => 0,
            'email' => 'leec@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Pete',
            'last_name' => 'Beaumont',
            'team' => 'Team 1',
            'capitan' => 0,
            'email' => 'peteb@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Bruce',
            'last_name' => 'Givnish',
            'team' => 'Team 2',
            'capitan' => 0,
            'email' => 'bruceg@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dennis',
            'last_name' => 'Byrnes',
            'team' => 'Team 2',
            'capitan' => 1,
            'email' => 'dennisb@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Eileen',
            'last_name' => 'Patram',
            'team' => 'Team 2',
            'capitan' => 0,
            'email' => 'eileenp@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Lee',
            'last_name' => 'Mangan',
            'team' => 'Team 2',
            'capitan' => 0,
            'email' => 'leem@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Richard',
            'last_name' => 'Dunlap',
            'team' => 'Team 2',
            'capitan' => 0,
            'email' => 'richardd@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Andy',
            'last_name' => 'Rusnak',
            'team' => 'Team 3',
            'capitan' => 0,
            'email' => 'andyr@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'David',
            'last_name' => 'Bonner',
            'team' => 'Team 3',
            'capitan' => 0,
            'email' => 'davidb@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Doug',
            'last_name' => 'Richards',
            'team' => 'Team 3',
            'capitan' => 0,
            'email' => 'dougr@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Mike',
            'last_name' => 'Mulroy',
            'team' => 'Team 3',
            'capitan' => 1,
            'email' => 'mikem@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Deb',
            'last_name' => 'Casey',
            'team' => 'Team 4',
            'capitan' => 0,
            'email' => 'debc@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'John',
            'last_name' => 'Sangston',
            'team' => 'Team 4',
            'capitan' => 0,
            'email' => 'johns@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Mercer',
            'last_name' => 'Sisson',
            'team' => 'Team 4',
            'capitan' => 1,
            'email' => 'mercers@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Micheal',
            'last_name' => 'Stinson',
            'team' => 'Team 4',
            'capitan' => 0,
            'email' => 'michaels@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Sam',
            'last_name' => 'Miller',
            'team' => 'Team 4',
            'capitan' => 0,
            'email' => 'sames@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Dave',
            'last_name' => 'Kriebel',
            'team' => 'Team 5',
            'capitan' => 0,
            'email' => 'davek@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Ed',
            'last_name' => 'Steinbauer',
            'team' => 'Team 5',
            'capitan' => 0,
            'email' => 'eds@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Eric',
            'last_name' => 'Wertz',
            'team' => 'Team 5',
            'capitan' => 0,
            'email' => 'ericw@foo.com',
        ]);
        Usher::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'first_name' => 'Walter',
            'last_name' => 'Unangst',
            'team' => 'Team 5',
            'capitan' => 1,
            'email' => 'walteru@foo.com',
        ]);
    }
}
