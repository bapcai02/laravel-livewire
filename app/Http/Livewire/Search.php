<?php

namespace App\Http\Livewire;
use App\User;

use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.search', [
            'users' => User::where('name', 'like','%'.$this->search.'%')->get(),
        ]);
    }
}
