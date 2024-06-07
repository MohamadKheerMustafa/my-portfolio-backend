<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'type' => 'Main',
                'url' => 'http://seek-higher-things.com/'
            ],
            [
                'type' => 'Github',
                'url' => 'https://github.com/MohamadKheerMustafa'
            ],
            [
                'type' => 'LinkedIn',
                'url' => 'https://www.linkedin.com/in/mohamad-kheer-mustafa-070027240/'
            ],
            [
                'type' => 'Instagram',
                'url' => 'https://www.instagram.com/mohamad_kheer_mustafa/'
            ],
        ];

        foreach ($links as $link) {
            Link::create($link);
        }
    }
}
