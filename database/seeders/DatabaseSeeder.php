<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PageVariable;
use App\Models\MajorDepartment;
use App\Models\User;
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
        MajorDepartment::create([
            // 'icon' => 'fa-search',
            "theme" => 'blue-theme',
            'locale' => [
                'en' => 'T. Home Inspector',
                'th' => 'ตรวจบ้าน'
            ]
        ]);
        MajorDepartment::create([
            // 'icon' => 'fa-hammer',
            "theme" => 'orange-theme',
            'locale' => [
                'en' => 'T. Home Construction',
                'th' => 'ต่อเติม'
            ]
        ]);
        MajorDepartment::create([
            // 'icon' => 'fa-paint-brush',
            "theme" => 'gray-theme',
            'locale' => [
                'en' => 'T. Home Interior',
                'th' => 'ตกแต่ง'
            ]
        ]);

        PageVariable::create([
            'page' => 'home',
            'var' => [
                'dev' => '',
                'project' => '',
                'house' => '',
                'satisfaction' => ''
            ]
        ]);

        User::create([
            'name' => "superadmin",
            'username' => "superadmin",
            'password' => Hash::make("superadmin"),
        ]);
    }
}
