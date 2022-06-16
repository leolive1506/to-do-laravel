<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <h1>Lista de tarefas</h1>
            <x-button-link href="{{ route('tarefas.create') }}">Nova</x-button-link>
        </div>
    </x-slot>

    <x-container class="mt-4">
        <form action="{{ route('tarefas.index') }}" class="flex items-center">
            <x-input name="search" placeholder="Digite para buscar..." />
            <x-button class="h-10">Buscar</x-button>
        </form>

        <div class="mt-4">
            @if (session('status'))
                <div class="text-green-500">{{ session('status') }}</div>
            @endif
            @forelse ($todos as $item)
                <div class="flex justify-between items-center">
                    <form action="{{ route('tarefas.checkbox', $item->id) }}" id="form_completed_{{ $item->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="block mt-4">
                            <label for="completed_{{ $item->id }}" class="inline-flex items-center" onclick="document.querySelector('#form_completed_{{ $item->id }}').submit()">
                                <input id="completed_{{ $item->id }}" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="completed"
                                    {{  ($item->completed === 1 ? ' checked' : '') }}
                                >
                                <span class="ml-2 text-sm text-gray-600">{{ $item->name }}</span>
                            </label>
                        </div>
                    </form>
                    <div class="flex gap-2">
                        <a href="{{ route('tarefas.destroy', $item->id) }}">Editar</a>
                        <form method="POST" action="{{ route('tarefas.destroy', $item->id) }}" id="tarefa-delete-{{ $item->id }}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <button
                            onclick="event.preventDefault(); document.querySelector('#tarefa-delete-{{ $item->id }}').submit()"
                        >
                            Excluir
                        </button>
                    </div>
                </div>
            @empty
                <p>Nenhum item cadastrado</p>
            @endforelse
        </div>
    </x-container>
</x-app-layout>
