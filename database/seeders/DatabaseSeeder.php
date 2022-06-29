<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        for($i = 1; $i < 12; $i++){
            $company = Company::create([
                'name' => 'Company ' . $i,
                'email' => 'test@test.com', 
                'website' => 'https://test.com'
            ]);

            Employee::factory(5)->create([
                'company_id' => $company->id
            ]);
        }
    }
}
