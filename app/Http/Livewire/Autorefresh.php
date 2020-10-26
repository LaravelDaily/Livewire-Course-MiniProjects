<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Autorefresh extends Component
{
    public function render()
    {
        $cat = file_get_contents('https://aws.random.cat/meow');
        $image = json_decode($cat, true)['file'];

        return view('livewire.autorefresh', compact('image'));
    }
}
