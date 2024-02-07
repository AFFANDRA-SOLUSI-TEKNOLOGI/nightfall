<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('User') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-6">
        <form id="theForm" action="{{ route('user.update', ['user' => $data['id']]) }}" method="post">
            @method('put')
            @csrf
            <div>
                <x-label for="name" class="after:content-['_*'] after:text-red-500" value="{{ __('Username') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" placeholder="Type here..." :value="old('name')" value="{{ $data->name }}" required />
                <x-error-text name="name" />
            </div>
            <div class="mt-2">
                <x-label for="email" class="after:content-['_*'] after:text-red-500" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Type here..." :value="old('email')" value="{{ $data->email }}" required />
                <x-error-text name="email" />
            </div>
            <div class="mt-2">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="just leave empty if you dont want to update the pass" />
                <x-error-text name="password" />
            </div>
            <x-button class="mt-2 w-full justify-center">Submit</x-button>
        </form>
    </div>
</x-app-layout>
