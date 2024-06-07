<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Introduction: ',
                'description' => 'Greetings! My name is Mohamad Kheer Mustafa, hailing from the vibrant city of Damascus, Syria. I am deeply passionate about the intersection of technology and innovation, particularly in the realm of Information Engineering, with a specialization in Software Engineering.',
            ],
            [
                'title' => 'Backend Development Expertise: ',
                'description' => 'With three years of experience as a Backend Developer, I have honed my skills in crafting robust and efficient solutions to complex technical challenges. My journey in the realm of software development has been both exhilarating and enlightening, allowing me to delve into the intricacies of code architecture, database management, and system optimization.',
            ],
            [
                'title' => 'Frontend Development Expertise: ',
                'description' => 'Beyond my backend expertise, I am fervently dedicated to expanding my horizons in the tech landscape. Recently, I have embarked on a journey to delve into frontend development, immersing myself in technologies like React JS. This endeavor not only broadens my skill set but also enables me to create more cohesive and interactive user experiences, bridging the gap between functionality and aesthetics.',
            ],
            [
                'title' => 'Interest in DevOps Engineering: ',
                'description' => 'Moreover, I harbor a keen interest in DevOps engineering, recognizing its pivotal role in streamlining the development process and ensuring the seamless deployment of software solutions. Through continuous learning and hands-on experience, I aspire to master the principles and practices of DevOps, fostering a culture of collaboration and efficiency within development teams.',
            ],
            [
                'title' => 'Future Aspirations: ',
                'description' => 'Looking towards the future, my aspirations extend beyond individual contributions. I envision myself as an entrepreneur, driven by the desire to establish and lead a company that fosters creativity, collaboration, and technological advancement. My goal is to create a platform where innovative ideas thrive, empowering individuals to turn their visions into reality.',
            ],
            [
                'title' => 'Commitment to Growth: ',
                'description' => 'I am committed to lifelong learning and growth, continuously seeking out new opportunities to expand my knowledge and skill set. With determination, dedication, and a fervent belief in the transformative power of technology, I am excited to embark on this journey towards building a brighter future, both for myself and for those around me.',
            ],
        ];

        foreach ($data as $about) {
            About::create($about);
        }
    }
}
