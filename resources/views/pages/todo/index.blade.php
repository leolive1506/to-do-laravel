<x-app-layout>
    <x-slot:header>
        <h1>Lista de tarefas</h1>
    </x-slot>

    <x-container class="mt-4">

        <x-input name="search" placeholder="Digite para buscar..." />

        @forelse ($todos as $item)
            {{ $item->name }}
        @empty
            <p>Nenhum item cadastrado</p>
        @endforelse
    </x-container>
</x-app-layout>


