<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
use App\Models\PhoneNumber;
use App\Models\Email;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Contact::factory(10)
            ->has(Email::factory()->count(3))
            ->has(PhoneNumber::factory()->count(2))
            ->create();
    }
}
