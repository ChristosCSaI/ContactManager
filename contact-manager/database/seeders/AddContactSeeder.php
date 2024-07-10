<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['first_name' => 'Christos', 'last_name' => 'Christodoulou', 'phone' => '1234567890', 'description' => 'Junior Developer', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Andreas', 'last_name' => 'Andreou', 'phone' => '9876543210', 'description' => 'Senio Developer', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Nikoletta', 'last_name' => 'Panagiwtou', 'phone' => '5551234567', 'description' => 'DevOps', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Bob', 'last_name' => 'Williams', 'phone' => '5557654321', 'description' => 'HR', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Charlie', 'last_name' => 'Brown', 'phone' => '5551112222', 'description' => 'HR', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Maria', 'last_name' => 'Tiki', 'phone' => '5553334444', 'description' => 'Consultant', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Eva', 'last_name' => 'Thewdorou', 'phone' => '5555556666', 'description' => 'Mid Office', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Stelios', 'last_name' => 'Apostolou', 'phone' => '5557778888', 'description' => 'Developer', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Marios', 'last_name' => 'Georgiou', 'phone' => '5559990000', 'description' => 'Software Engineer', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Apostolis', 'last_name' => 'Papadopoulos', 'phone' => '5551212121', 'description' => 'Manager', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Ivy', 'last_name' => 'Martinez', 'phone' => '5553434343', 'description' => 'Assistant Manager', 'created_at' => now(), 'updated_at' => now()],
            ['first_name' => 'Jake', 'last_name' => 'Lopez', 'phone' => '5555656565', 'description' => 'Director', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
