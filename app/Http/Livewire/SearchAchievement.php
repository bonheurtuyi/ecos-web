<?php

namespace App\Http\Livewire;

use App\Models\Achievement;
use Livewire\Component;

class SearchAchievement extends Component
{
    public $search = '';
    public function render()
    {
        $items = Achievement::where('project_name', $this->search)->get();

        return view('livewire.search-achievement', ['items'=>$items]);
    }
}
