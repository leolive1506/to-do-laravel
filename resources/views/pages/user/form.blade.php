<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <h1>{{ empty($user->id) ? 'Novo usuário' : 'Editar usuário' }}</h1>
            {{-- <x-button-link href="{{ route('profiles.index') }}">Voltar</x-button-link> --}}
        </div>
    </x-slot>

    <x-container class="mt-4">
        <form action="{{ empty($user->id) ? route('users.store') : route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (!empty($user->id))
                @method('PUT')
            @endif

            <div class="flex flex-col sm:justify-start items-center pt-6 sm:pt-0 bg-gray-100">
                <div>
                    <div class="flex justify-center {{ empty($user->photo) ? 'items-center' : 'items-start'}} ">
                        @if (!empty($user->photo))
                            <img src="{{ asset($user->photo) }}" alt="" class="h-32 w-32 rounded-full object-cover">
                        @endif
                    </div>
                    <div class="mb-3 w-96">
                        <x-label for="photo" :value="__('Foto')" />
                        <input
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            type="file" name="photo" id="photo">
                        @error('photo')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-label for="name" :value="__('Nome')" />
                <x-input name="name" value="{{ old('name', $user->name ?? null) }}" />
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mt-4">
                <x-label for="email" :value="__('E-mail')" />
                <x-input name="email" value="{{ old('email', $user->email ?? null) }}" />
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="birthday" :value="__('Data de nascimento')" />
                <x-input name="birthday" value="{{ old('birthday', $user->birthday ?? null) }}" type="date" />
                @error('birthday')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="gender" :value="__('Sexo')" />
                <div class="flex justify-start gap-2">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="M" value="M" {{  ($user->gender === 'M' ? ' checked' : '') }}>
                      <label class="form-check-label inline-block text-gray-800" for="M">Masculino</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="gender" id="F" value="F" {{  ($user->gender === 'F' ? ' checked' : '') }}>
                      <label class="form-check-label inline-block text-gray-800" for="F">Feminino</label>
                    </div>
                  </div>
                @error('gender')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <x-label for="password" :value="__('Senha')" />
                <x-input class="block mt-1 w-full" type="password" name="password" />
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirme a senha')" />
                <x-input class="block mt-1 w-full" type="password" name="password_confirmation" />
                @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <x-button>Salvar</x-button>
            </div>
        </form>
    </x-container>
</x-app-layout>
