<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TalkTableSeeder extends Seeder {

    public function run()
    {
        DB::table('talks')->delete();

        App\Talk::create([
            'name' => 'Demo Talk Name',
            'author_id' => '1',
            'description' => 'Talk Description',
            'joindin' => 'http://www.joind.in',
            'month' => '5',
            'year' => '2015'
        ]);
    }

}