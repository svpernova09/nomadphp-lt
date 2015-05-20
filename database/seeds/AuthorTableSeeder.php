<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AuthorTableSeeder extends Seeder {

    public function run()
    {
        DB::table('authors')->delete();

        App\Author::create([
            'first_name' => 'Joe',
            'last_name' => 'Ferguson',
            'pronoun' => 'he',
            'twitter' => 'joepferguson',
        ]);
    }

}