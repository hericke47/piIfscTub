<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Illuminate\Support\Facades\DB::table('events')->insert([[
            'title' => 'Reunião',
            'start' => '2020-04-09',
            'end' => '2020-04-10',
            'color' => '#c40233',
            'description' => 'Reunião da Massa',
        ],
        [
            'title' => 'Reunião da Massa',
            'start' => '2020-04-12',
            'end' => '2020-04-13',
            'color' => '#29fdf2',
            'description' => 'Reunião da Massa2',
        ]
        ]);


    }
}
