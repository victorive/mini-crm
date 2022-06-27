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

        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => Hash::make('password')
        // ]);

        // $company = Company::factory()->create([
        //     'name' => 'Test Test',
        //     'email' => 'test@test.com', 
        //     'website' => 'https://test.com'
        // ]);

        // $company2 = Company::factory()->create([
        //     'name' => 'Company 2',
        //     'email' => 'test@test.com', 
        //     'website' => 'https://test.com'
        // ]);

        // $company3 = Company::factory()->create([
        //     'name' => 'Company 3',
        //     'email' => 'test@test.com', 
        //     'website' => 'https://test.com'
        // ]);

        // Employee::factory(10)->create([
        //     'company_id' => $company->id
        // ]);

        // Employee::factory(10)->create([
        //     'company_id' => $company2->id
        // ]);
        
        // Employee::factory(10)->create([
        //     'company_id' => $company3->id
        // ]);
    }
}
