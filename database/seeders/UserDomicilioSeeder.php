<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Seeder;

class UserDomicilioSeeder extends Seeder
{


    

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user)
        {
            UserDomicilio::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
