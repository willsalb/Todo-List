<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public $task = 'Hello';

    //Regras para fazer a "task" obrigatoria
    protected $rules = [
        'task' => 'require',
    ];

    public function render()
    {
        return view('livewire.tasks');
    }
}
