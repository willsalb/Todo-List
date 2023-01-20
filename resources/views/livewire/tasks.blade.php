<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="px-6 py-12">
        <!--Dual bind com o template, o que é digitado no input vai fazer um dualBind com a propriedade model que está na classe "Task" em php-->
        <!--Fazendo uma requisição AJAX-->
        <input type="text" wire:model="task" class="w-full form-input" placeholder="New Task">
        {{ $task }}
    </div>
</div>
