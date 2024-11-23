<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('User') }}
        </h2>
        <h2>This should hold user page </h2>
    </x-slot>

    <div>profile things should be here</div>
    To edit your profile, click <a href="{{ route('user.settings.edit') }}" class="text-blue-500 hover:underline">here</a>.
</x-app-layout>
