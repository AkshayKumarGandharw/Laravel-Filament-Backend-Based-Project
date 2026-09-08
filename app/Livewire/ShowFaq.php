<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Faq;

class ShowFaq extends Component
{
    public function render()
    {
        $faqs = Faq::where('status',1)->orderBy('questions','ASC')->get();
        return view('livewire.show-faq',[
            'faqs' => $faqs
        ]);
    }
}
