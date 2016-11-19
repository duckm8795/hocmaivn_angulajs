<?php

use Illuminate\Database\Seeder;

class CauHoiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cauhoi')->insert(
        	[
        		  	'questions' => str_random(50),
		        	'choices' => '[
									{ "id" : 0, "text" : "Fourth"},
									{ "id" : 1, "text" : "Sixth"},
									{ "id" : 2, "text" : "Second"},
									{ "id" : 3, "text" : "Eighth"}
								 ]',
		        	'correct' => rand(1,4),
		        	'created_at'  => new DateTime()      	
		    ]        	
        );
    }
}
