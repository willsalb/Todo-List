<div>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="px-6 py-12">

        <form>

            <!--Dual bind com o template, o que é digitado no input vai fazer um dualBind com a propriedade model que está na classe "Task" em php-->
            <!--Fazendo uma requisição AJAX-->
            <input type="text" wire:model="task" type="file" class="w-full mt-4 form-input" placeholder="New Task">

            @error('name_task')
                <p class="text-sm font-bold text-red-400">{{ $message }}</p>
            @enderror

            <!--wire:click invoca o metodo save do controller-->
            <div class="flex justify-end">
                <button class="px-4 py-4 mt-5 text-white bg-blue-400 rounded-lg" wire:click="save">Add a task</button>
            </div>

        </form>


        <div class="mt-6 overflow-hidden divide-y rounded-lg shadow">
            @foreach ($this->tasks as $task)
                <div class="flex items-start justify-between px-4 py-2 bg-white">

                    <div>{{ $task->name_task }}</div>

                    <!--Passando parametros pelo componente-->
                    <button wire:click='remove({{ $task->id }})' class="text-sm text-red-400">Remove</button>

                </div>
            @endforeach
        </div>
    </div>
</div>
