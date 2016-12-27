<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'=>'Bikash',
            'email'=>'bikash@ekbana.com',
            'password'=>bcrypt('admin123')
        ]);
    }
}
