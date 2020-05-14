<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('events')->insert([
            [
                'title' => 'Reuniao',
                'start' => '2020-05-05 21:30:00',
                'end' => '2020-05-06 21:30:00',
                'color' => '#c40233',
                'description' => 'Reuniao com cliente'
            ],
            [
                'title' => 'Ligar para Cliente',
                'start' => '2020-05-02 ',
                'end' => '2020-05-03',
                'color' => '#29fdf2',
                'description' => 'Falar Com cliente'
            ]
        ]);
    }
}
