<?php

namespace Database\Seeders;

use App\Models\Role;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['admin', true],
            ['customer', false],
            ['editor', true],
        ];
        foreach ($roles as $value) {
            try {
                Role::insert([
                    'role' => $value[0],
                    'label' => \Illuminate\Support\Str::ucfirst($value[0]),
                    'is_admin' => $value[1]
                ]);
                
                \App\Models\User::factory(1)->state([
                    'role' => $value[0]
                ])->create();

            } catch (\Exception $e) {
                throw new Exception($e->getMessage());
            }
        }
        
        \App\Models\BookCategory::factory(10)->create();
        \App\Models\Book::factory(20)->create();
    }
}
