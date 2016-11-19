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
                'name_dethi' => 'Đề thi : '[rand(1,100)],
                'monthi_id' => 1,
                'created_at'  => new DateTime()
            ],                     
            [
                'name_dethi' => 'Đề thi : '[rand(1,100)],
                'monthi_id' => 2,
                'created_at'  => new DateTime()
            ],                     
                      
            [
                'name_dethi' => 'Đề thi : '[rand(1,100)],
                'monthi_id' => 3,
                'created_at'  => new DateTime()
            ],           
            [
                'name_dethi' => 'Đề thi : '[rand(1,100)],
                'monthi_id' => 4,
                'created_at'  => new DateTime()
            ],                    
          
            
            [
                'name_dethi' => 'Đề thi : '[rand(1,100)],
                'monthi_id' => 5,
                'created_at'  => new DateTime()
            ]
           

        );
    }
}
