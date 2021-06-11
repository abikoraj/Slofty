<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::create([
            'heading' => 'Skills',
            'subHeading' => 'Professional Expertise',
            'description' => 'OUR TEAMS IS TASK ORIENTED. WITH DEMANDING SKILLS AND HAND FULL EXPERIENCE WE ARE CAPBLE OF DELIVERING WORLD CLASS SERVICE. OUR SKILL ARE LISTED AS',
            'sideImage' => 'assets/agency-studio/img/half_section_left_bg.jpg',
            'skill1' => 'BRANDING',
            'progress1' => '98',
            'skill2' => 'DIGITAL MARKETING',
            'progress2' => '96',
            'skill3' => 'DEVELOPMENT',
            'progress3' => '92',
            'skill4' => 'ARTIFICIAL INTELLIGENCE',
            'progress4' => '95',
            'skill5' => '',
            'progress5' => ''
        ]);
    }
}
