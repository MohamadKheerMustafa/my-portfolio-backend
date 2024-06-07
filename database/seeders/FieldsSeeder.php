<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fields = [
            [
                'title' => 'Backend Developer',
                'years' => '3'
            ],
            [
                'title' => 'Frontend Developer',
                'years' => '0'
            ],
            [
                'title' => 'Mobile Develober',
                'years' => '0'
            ],
            [
                'title' => 'Fullstack Developer',
                'years' => '0'
            ],
            [
                'title' => 'DevOps Developer',
                'years' => '0'
            ],
        ];
    }
}
