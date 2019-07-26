<?php

use App\Event;
use App\Budget;
use App\Participant;
use App\EventBudget;
use App\EventParticipant;
use Illuminate\Database\Seeder;
use App\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventTypeSeeder::class);
        
        factory(Event::class,10)->create();

        factory(Participant::class,10)->create();
        for ($i=0; $i < Event::count(); $i++) {
         factory(EventParticipant::class)->create(['participant_id'=> random_int(1, Participant::count()), 'event_id'=> random_int(1, Event::count())]);
        }
        
        factory(Budget::class,10)->create();
        for ($i=0; $i < Event::count(); $i++) { 
        	factory(EventBudget::class)->create(['budget_id'=> random_int(1, Budget::count()), 'event_id'=> random_int(1, Event::count())]);
        }

        factory(User::class)->create([
            'email' => 'admin@example.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
