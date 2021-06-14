<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'heading' => 'Services',
            'subHeading' => 'What we do',
            'title1' => 'Branding',
            'description1' => 'We create the trusted and joyful brands. We believe in creating magical together with effective positive growth for your products and business.',
            'title2' => 'Digital Marketing',
            'description2' => 'We are a digital marketing agency with sets of experts who are making brand get great impacts through our pre-eminent AI optimization, effective strategies and digital researches.',
            'title3' => 'AI Tools',
            'description3' => 'We help businesses grow building specific AI Tools for their particular requirements. Want to experiment the ease of artificial intelligence our experts are available for that have any requirements.'
        ]);
    }
}
