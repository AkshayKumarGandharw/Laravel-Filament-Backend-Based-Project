<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    { 
        $teams = Team::orderBy('name','ASC')->get();
       
        return view('livewire.show-team',[
            'teams' => $teams
        ]);
    }
}
