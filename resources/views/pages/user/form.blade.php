<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <h1>{{ empty($user->id) ? 'Novo usuário' : 'Editar usuário' }}</h1>
            @if (session('status'))
                <div class="text-green-500">{{ session('status') }}</div>
            @endif
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
                    <div class="flex justify-center items-center">
                        <img src="{{ empty($user->photo) ? asset('imgs/avatar.png') : asset($user->photo) }}" alt="" class="h-32 w-32 rounded-full object-cover" id="user-photo">
                    </div>
                    <div class="mb-3 w-96">
                        <x-input-file name="photo" label="Foto" />

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
                <x-container-radio>
                    <x-input-radio name="gender" value="M" id="M" checked="{{ $user->gender === 'M' }}" label="Masculino" />
                    <x-input-radio name="gender" value="F" id="F" checked="{{ $user->gender === 'F' }}" label="Feminino" />
                </x-container-radio>
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

    <script>
        const inputPhoto = document.querySelector("input#photo")
        inputPhoto.onchange = event => {
            const [file] = inputPhoto.files
            if (file) {
                const output = document.getElementById('user-photo');
                output.src = URL.createObjectURL(file)
            }
        }

    </script>
</x-app-layout>
