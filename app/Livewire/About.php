<?php

namespace App\Livewire;

use App\Models\About as AboutModels;
use Livewire\Component;

class About extends Component
{
   

    public function render()
    {
        $abouts = AboutModels::orderBy('title','ASC')->get();
        return view('livewire.about',[
            'abouts' => $abouts
        ]);
    }
}
