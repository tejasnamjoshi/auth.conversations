<?php

use Illuminate\Database\Seeder;

class ConversationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 5)->create();
        factory(App\Conversation::class, 10)->create();
        factory(App\Reply::class, 30)->create();
    }
}
