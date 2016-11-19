<?php

use Illuminate\Database\Seeder;

class DeThiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dethi')->insert(
            [
                [
                    'name_dethi' => 'Đề thi : 1',
                    'monthi_id' => 1,
                    'created_at'  => new DateTime()
                ],
                [
                    'name_dethi' => 'Đề thi : 2',
                    'monthi_id' => 2,
                    'created_at'  => new DateTime()
                ],

                [
                    'name_dethi' => 'Đề thi : 3',
                    'monthi_id' => 3,
                    'created_at'  => new DateTime()
                ],
                [
                    'name_dethi' => 'Đề thi : 4',
                    'monthi_id' => 4,
                    'created_at'  => new DateTime()
                ],


                [
                    'name_dethi' => 'Đề thi : 5',
                    'monthi_id' => 5,
                    'created_at'  => new DateTime()
                ]
            ]           
           

        );
    }
}
