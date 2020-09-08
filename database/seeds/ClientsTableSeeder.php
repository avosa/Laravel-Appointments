<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = [
            [
                'name' => 'Jane Doe',
                'email' => 'jane@doe.com',
                'phone' => '254712345678'
            ]
        ];

        Client::insert($client);
    }
}
