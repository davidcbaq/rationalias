<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $rols = [
            'administrator',
            'supervisor'
            
        ];
        foreach($rols as $key => $value){
            DB::table('role')->insert([
                'name' => $value
            ]);
        }
        
    }
}
