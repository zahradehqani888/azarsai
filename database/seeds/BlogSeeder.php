<?php

use Illuminate\Database\Seeder;
 use Faker\Generator ;
 use Illuminate\Support\Facades\DB;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator  $faker)
    {
       DB::table('Blog')->insert([
        'title'=>$faker->sentence(),
        'body'=>$faker->text(),
        'category'=>$faker->word()    
       ]);
}
    
}
