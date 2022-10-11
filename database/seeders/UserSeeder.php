<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          User::create([
            'first_name' => 'sabin',
            'first_name' => 'maharjan',
            'status' => '1',
            'phone_number' => '985848',
            'details' => 'hello',
        ]);
    }
}
