<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\TransactionsTableSeeder; // Correct namespace

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TransactionsTableSeeder::class,
        ]);
    }
}
