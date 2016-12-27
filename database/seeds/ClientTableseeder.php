<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$client =
    	[
    	[
            'name'=>'Samina Tuladhar',
            'email'=>'samina.tuladhar100@gmail.com',
            'password'=>bcrypt('samina100'),
            'phone'=>'9808939399',
            'address' =>'samakhusi',
            'gender' => 'female'
        ],
        [
            'name'=>'Manisha',
            'email'=>'manisha@ekbana.com',
            'password'=>bcrypt('samina100'),
             'phone'=>'9808939395',
              'address' =>'banepa',
            'gender' => 'female'
        ],
        [
            'name'=>'Bikash',
            'email'=>'bikash@ekbana.com',
            'password'=>bcrypt('samina100'),
             'phone'=>'9808939099',
              'address' =>'lalitpur',
            'gender' => 'male'
        ],
        [
            'name'=>'Sameer',
            'email'=>'sameer@ekbana.com',
            'password'=>bcrypt('samina100'),
             'phone'=>'9808939899',
              'address' =>'bhaktapur',
            'gender' => 'male'
        ]
    	];
    		
         \App\Client::insert($client);
    }
}
