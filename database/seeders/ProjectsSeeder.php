<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name' => 'Airline Reservation System',
                'description' => 'The Airline Reservation System is a comprehensive software solution designed to facilitate the booking and management of airline tickets for customers. This system is developed to enhance the efficiency of airline operations, improve the customer experience, and streamline the reservation process. It integrates various functionalities, including flight scheduling, seat management, passenger information tracking, and payment processing, to provide a seamless booking experience from start to finish.',
                'img_url' => 'projects/airline-reservation-system.webp',
                'github_link' => 'https://github.com/MohamadKheerMustafa/airline-reservation-system',
                'type' => 'BACK'
            ],
            [
                'name' => 'Hope Road Ticket Booking',
                'description' => 'Hope Road Ticket Booking is an innovative software platform developed by Seek Higher Things to revolutionize the way customers book tickets for various events and transportation services. This system aims to provide a seamless and user-friendly experience for booking tickets, whether for concerts, sports events, theater performances, or transportation services such as buses and trains. By integrating a wide range of functionalities, the Hope Road Ticket Booking system simplifies the ticket purchasing process, ensures secure transactions, and enhances overall customer satisfaction.',
                'img_url' => 'projects/Hope-road-ticket-booking.png',
                'github_link' => 'https://github.com/MohamadKheerMustafa/hope-road',
                'type' => 'BACK',
            ],
            [
                'name' => 'CRWN Ecommerce Web App',
                'description' => 'The CRWN Ecommerce Web App is a state-of-the-art online shopping platform developed by Seek Higher Things, designed to provide customers with a seamless and enjoyable online shopping experience. This web application combines a user-friendly interface with advanced functionalities to facilitate efficient product browsing, selection, and purchase. The platform is built to handle high volumes of traffic and transactions, ensuring reliability and scalability for a growing customer base.',
                'img_url' => 'projects/Crwn.webp',
                'github_link' => 'https://github.com/MohamadKheerMustafa/crwn-ecommerce',
                'type' => 'FRONT',
            ],
            [
                'name' => 'Media Nas',
                'description' => 'An social network app that lets you to connect with people around the world ,contains many features like create post, story, page and add friends.',
                'img_url' => 'projects/Crwn.webp',
                'github_link' => 'https://github.com/MohamadKheerMustafa/crwn-ecommerce',
                'type' => 'BACK'
            ],
            [
                'name' => 'Yatafaqhoo Religon Website',
                'description' => 'Yatafaqhoo is a dedicated online platform aimed at teaching the basics of the Islamic faith. The website provides comprehensive resources, educational materials, and interactive tools to help users understand the core tenets, practices, and history of Islam. Designed for both beginners and those looking to deepen their knowledge, Yatafaqhoo offers a user-friendly and engaging experience that caters to a global audience.',
                'img_url' => 'projects/Yatafaqhoo.webp',
                'github_link' => '',
                'type' => 'BACK'
            ],
            [
                'name' => 'Central Station',
                'description' => "CENTRAL STATION is a cutting-edge cloud kitchen dedicated to creating and delivering high-quality, delicious meals directly to customers' doorsteps. Operating without a traditional dine-in facility, CENTRAL STATION leverages advanced kitchen technology and efficient delivery logistics to provide a wide range of culinary delights. This innovative approach to food preparation and delivery caters to the modern consumer's demand for convenience, variety, and exceptional taste.",
                'img_url' => 'projects/Central-Station.jpeg',
                'github_link' => 'https://github.com/MohamadKheerMustafa/CentralStation',
                'type' => 'FULLSTACK'
            ],
        ];
        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
