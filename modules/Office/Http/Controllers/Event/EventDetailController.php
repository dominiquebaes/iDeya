<?php

namespace Modules\Office\Http\Controllers\Event;

use Illuminate\Routing\Controller;

use App\Event;
use App\Budget;
use App\Participant;
use App\EventBudget;
use App\EventParticipant;

class EventDetailController extends Controller
{
    public function __invoke(Event $event)
    {
        $budgets = Budget::whereIn(
            "id",
            EventBudget::where(["event_id" => $event->id])->pluck('budget_id')
        )->get();

        $participants = Participant::whereIn(
            "id",
            EventParticipant::where(["event_id" => $event->id])->pluck('participant_id')
        )->get();

        return view('office::adminevent.detail', compact('event', 'participants', 'budgets'));
    }
}
