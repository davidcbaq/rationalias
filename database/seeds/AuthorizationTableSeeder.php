<?php

use App\Http\Middleware\Authenticate;
use App\Models\Authorization;
use Illuminate\Database\Seeder;

class AuthorizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Authorization::class)->create();
    }
}
