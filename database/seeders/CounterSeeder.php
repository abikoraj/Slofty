<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Counter::create([
            'background' => 'assets/agency-studio/img/stats_section.jpg',
            'title1' => 'Completed Projects',
            'icon1' => 'fa-check',
            'count1' => '40',

            'title2' => 'Total Countries',
            'icon2' => 'fa-flag',
            'count2' => '6',

            'title3' => 'Clients',
            'icon3' => 'fa-users',
            'count3' => '25',

            'title4' => 'Social Influence',
            'icon4' => 'fa-globe',
            'count4' => '100',
        ]);
    }
}
