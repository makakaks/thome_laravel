<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageVariable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        PageVariable::create([
            'page' => 'home',
            'var' => json_encode([
                'dev' => '',
                'project' => '',
                'house' => '',
                'satisfaction' => ''
            ])
        ]);
    }
}
