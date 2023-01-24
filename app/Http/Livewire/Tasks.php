<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use database\factories\TaskFactory;
use Illuminate\Http\Request;

class Tasks extends Component
{
    public $task = 'Hello';

    //Regras para fazer a "task" obrigatoria
    protected $rules = [
        'task' => 'required|unique:tasks,name_task',
    ];

    public function render()
    {
        return view('livewire.tasks');
    }

    //Propriedade dinamica para pegar dados
    public function getTasksProperty()
    {
        return Task::all();
    }

    public function save(Request $request)
    {
        $attributes = $this->validate();
        Task::create($attributes);
        // Task::create(['name_task' => $this->task]);
        // dd($this->task);
    }

    public function remove($taksId)
    {
        Task::findOrFail($taksId)->delete();
    }
}
