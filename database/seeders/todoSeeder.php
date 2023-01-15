<?php

namespace Database\Seeders;

use App\Models\Todo;
use FactoryCall;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo::factory()->count(10); 
        // FactoryCall(App\Todo::class, 10)->create();
    }
}
