<?php

namespace Database\Seeders;

use App\Models\Field;
use App\Models\Fields;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $backend = Field::where('title', 'Backend Developer')->first();
        $frontend = Field::where('title', 'Frontend Developer')->first();
        $mobile = Field::where('title', 'Mobile Developer')->first();
        $fullstack = Field::where('title', 'Fullstack Developer')->first();
        $devOps = Field::where('title', 'DevOps Developer')->first();
        $experiences = [
            [
                'field_id' => $backend->id,
                'description' => 'Worked with many frameworks like: Laravel , ExpressJS , NestJS , but my main focus was on Laravel Framework',
                'years' => '3',
                'content' => [
                    'title' => 'PHP',
                    'title' => 'JavaScript',
                    'title' => 'TypeScript',
                    'title' => 'Laravel',
                    'title' => 'RESTfull API',
                    'title' => 'GraphQL',
                    'title' => 'Cron Jobs',
                    'title' => 'Notifications (Firebase , Socket.IO)',
                    'title' => 'Commands',
                    'title' => 'Node JS',
                    'title' => 'Express JS',
                    'title' => 'Socket.IO',
                    'title' => 'mySQL',
                    'title' => 'Firestorage (Firebase)',
                    'title' => 'Redis (Pub/Sub)',
                    'title' => 'SOLID principles like: (Repository Design Pattern , Observers)',
                    'title' => 'MVC Architecture',
                    'title' => 'JWT Authentication System',
                    'title' => 'Passport , Sanctum Authentication System',
                ]
            ],
            [
                'field_id' => $frontend->id,
                'description' => 'Worked with basics frontend tools like: HTML , Css , then I started to work with React JS as frontend library',
                'years' => '0',
                'content' => [
                    'title' => 'JavaScript',
                    'title' => 'HTML',
                    'title' => 'CSS',
                    'title' => 'SCSS',
                    'title' => 'Tailwind',
                    'title' => 'Ajax',
                    'title' => 'jQuery',
                    'title' => 'React JS',
                    'title' => 'State Management like (Context , Redux)',
                    'title' => 'React Router',
                    'title' => 'React Hooks',
                    'title' => 'React Components',
                    'title' => 'FrameMotion (Animations)',
                    'title' => 'Firebase',
                    'title' => 'Axios',
                ]
            ],
            [
                'field_id' => $mobile->id,
                'description' => 'Worked with React Native as mobile frontend tool for IOS and Android',
                'years' => '0',
                'content' => [
                    'title' => 'JavaScript',
                    'title' => 'React Native',
                    'title' => 'NativeWind',
                    'title' => 'State Management like (Context , Redux)',
                    'title' => 'React Navigation',
                    'title' => 'React Hooks',
                    'title' => 'React Components',
                    'title' => 'React Native Reanimated (Animations)',
                    'title' => 'Firebase',
                    'title' => 'Expo',
                    'title' => 'Axios',
                ]
            ],
            [
                'field_id' => $fullstack->id,
                'description' => 'Worked with React and Laravel',
                'years' => '0',
                'content' => [
                    'title' => 'PHP',
                    'title' => 'JavaScript',
                    'title' => 'Laravel',
                    'title' => 'RESTfull API',
                    'title' => 'mySQL',
                    'title' => 'SOLID principles like: (Repository Design Pattern , Observers)',
                    'title' => 'MVC Architecture',
                    'title' => 'JavaScript',
                    'title' => 'HTML',
                    'title' => 'CSS',
                    'title' => 'React JS',
                    'title' => 'State Management (Context)',
                    'title' => 'React Hooks',
                    'title' => 'React Components',
                    'title' => 'FrameMotion (Animations)',
                    'title' => 'Axios',
                ]
            ],
            [
                'field_id' => $devOps->id,
                'description' => 'Basics knowlage in management of VPS Servers',
                'years' => '0',
                'content' => [
                    'title' => 'Version Control System Like: Git',
                    'title' => 'Github , Gitlab , Bitbucket',
                    'title' => 'Linux Ubuntu',
                    'title' => 'Setting domains and virtual hosts',
                    'title' => 'Setting SSL on VPS',
                    'title' => 'Nginx',
                    'title' => 'Apache',
                    'title' => 'Setting mySQL (Marie DB)',
                    'title' => 'Setting mail server',
                    'title' => 'Handle Production projects (JavaScript , PHP)',
                    'title' => 'Handle Git Repo in Server',
                ]
            ],
        ];
    }
}
