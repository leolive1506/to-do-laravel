<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <h1>{{ empty($todo->id) ? 'Nova tarefas' : 'Editar tarefa' }}</h1>
            <x-button-link href="{{ route('tarefas.index') }}">Voltar</x-button-link>
        </div>
    </x-slot>

    <x-container class="mt-4">
        <form action="{{ empty($todo->id) ? route('tarefas.store') : route('tarefas.update', $todo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($todo->id))
                @method('PUT')
            @endif

            <div class="mt-4">
                <x-label for="name" :value="__('Nome')" />
                <x-input name="name" value="{{ old('name', $todo->name ?? null) }}" />
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="description" :value="__('Descrição')" />
                <x-textarea name="description" value="{{ old('description', $todo->description ?? null) }}" />
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <div class="mb-3 w-96">
                    <x-label for="file" :value="__('Arquivo')" />
                    <input
                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        type="file" name="file" id="file">
                    @error('file')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-4">
                <x-button>Salvar</x-button>
            </div>
        </form>
    </x-container>
</x-app-layout>
