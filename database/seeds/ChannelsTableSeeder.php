<?php

use App\Channel;
use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Channel::create(['title' => 'Laravel']);
        Channel::create(['title' => 'Vue.js']);
        Channel::create(['title' => 'CSS3']);
        Channel::create(['title' => 'Javascript']);
        Channel::create(['title' => 'PHP Training']);
        Channel::create(['title' => 'Spark']);
        Channel::create(['title' => 'Lumen']);
        Channel::create(['title' => 'Forge']);
    }
}
