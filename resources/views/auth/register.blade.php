<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Имя')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4" style="margin-bottom: 12px">
            <x-input-label for="password_confirmation" :value="__('Подтверждение пароля')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Type -->
        <label for="type">Тип учетной записи</label>
        <select name="type" class="block mt-1 w-full" style="border: 1px solid #e5e7eb; border-radius: .375rem">
            <option value="1" @selected(old('type') == '')>
                Педагог
            </option>
            <option value="2" @selected(old('type') == '')>
                Родитель
            </option>
        </select>

        <!-- Description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Информация о себе')" />
            <textarea id="description" type="textarea" name="description" class="block mt-1 w-full" style="border: 1px solid #e5e7eb; border-radius: .375rem"></textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Вход') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
