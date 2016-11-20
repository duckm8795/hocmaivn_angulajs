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
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 4,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 4,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 5,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 5,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 1,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 4,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 3,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				],
				[
					'questions' => str_random(50),
					'choices' => '[
									{ "id" : 0, "text" : "str_random(10)"},
									{ "id" : 1, "text" : "str_random(10)"},
									{ "id" : 2, "text" : "str_random(10)"},
									{ "id" : 3, "text" : "str_random(10)"}
								 ]',
					'correct' => rand(1,4),
					'dethi_id'=> 2,
					'monthi_id'=>rand(1,5),
					'created_at'  => new DateTime()
				]
			]

        );
    }
}
