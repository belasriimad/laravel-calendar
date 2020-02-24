<?php

use Illuminate\Database\Seeder;
USE App\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	['title'=>'Demo Event-1', 'start_date'=>'2020-01-11', 'end_date'=>'2020-01-12'],
        	['title'=>'Demo Event-2', 'start_date'=>'2020-02-11', 'end_date'=>'2020-02-13'],
        	['title'=>'Demo Event-3', 'start_date'=>'2020-01-14', 'end_date'=>'2020-01-14'],
        	['title'=>'Demo Event-3', 'start_date'=>'2020-02-17', 'end_date'=>'2020-02-17'],
        ];
        foreach ($data as $key => $value) {
        	Event::create($value);
        }
    }
}
