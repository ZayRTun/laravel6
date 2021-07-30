<?php

use Illuminate\Database\Seeder;

class ConversationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Conversation::class, 3)
            ->create()
            ->each(function ($conversation) {
                $conversation->replies()->createMany(
                    factory(App\Reply::class, 3)->make()->toArray()
                );
            });
    }
}
