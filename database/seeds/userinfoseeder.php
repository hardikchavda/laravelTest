<?php

use Illuminate\Database\Seeder;

class userinfoseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\userInfo::class, 10)->create();
    }
}
