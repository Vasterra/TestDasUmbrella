<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->truncate();

        $companies =[
            ['name' => 'Vasterra', 'address' => '87b Newington Causeway, London SE1 6GA, UK', 'postal_code' => '0000000', 'phone_number' => '+1 823 000 000', 'fax_number' => '555-123-4567', 'website_url' => 'https://vasterra.com', 'user_id' => 1],
            ['name' => 'Test Company', 'address' => '190 Hattersley Rd W, Hyde SK14 3LJ', 'postal_code' => '123456', 'phone_number' => '+1 823 000 000', 'fax_number' => '555-123-4567', 'website_url' => 'https://testcompany.com', 'user_id' => 2],
            ['name' => 'Test Company2', 'address' => '190 Hattersley Rd W, Hyde SK14 3LJ', 'postal_code' => '654321', 'phone_number' => '+1 823 000 000', 'fax_number' => '4567-555-123', 'website_url' => 'https://testcompany2.com', 'user_id' => 3],
        ];

        DB::table('companies')->insert($companies);
    }
}
