<?php

namespace App\Http\Livewire;

use App\Models\ConfigurarIE;
use Livewire\Component;

class Info extends Component
{

    public $configuracion;

    public function mount()
    {
        $this->configuracion = ConfigurarIE::first();
    }
    public function render()
    {
        return view('livewire.info');
    }
}
