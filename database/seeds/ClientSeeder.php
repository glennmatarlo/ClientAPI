<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Glenn Matarlo',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'phone' => '09123688941',
                'capitalization' => 20000.00,
                'loan' => 1200.00
            ],
            [
                'name' => 'Mary Cath',
                'address' => 'Guiwanon, Tubigon, Bohol',
                'phone' => '09632145789',
                'capitalization' => 5000.00,
                'loan' => 300.00
            ],
            [
                'name' => 'Anna Belle',
                'address' => 'Macaas, Tubigon, Bohol',
                'phone' => '09553214568',
                'capitalization' => 10000.00,
                'loan' => 600.00
            ],
        ];

        foreach($data as $client){
            \App\Client::create($client);
        }
    }
}