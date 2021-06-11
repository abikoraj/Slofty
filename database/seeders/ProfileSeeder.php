<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'name' => 'Slofty Technologies',
            'logo' => 'assets/agency-studio/img/logo-dark.png',
            'address' => 'Salugara, SILIGURI',
            'email' => 'contact@slofty.tech',
            'phone' => '',
            'website' => '',
            'support' => '',
            'map' => '<iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14249.499255975717!2d88.4458226!3d26.7643198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6a687d8f5de6b8e!2sSlofty%20Technologies%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1621785259789!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'facebook' => '',
            'twitter' => '',
            'instagram' => '',
            'linkedin' => '',
            'pinterest' => '',
            'youtube' => ''
        ]);
    }
}
