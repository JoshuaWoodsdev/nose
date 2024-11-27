<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('User') }}
        </h2>
        <h2>This should hold user page</h2>
    </x-slot>

    <div class="py-6">
        <!-- Profile content section -->
        <p>Your profile information will be shown here.</p>
        <!-- Link to edit the user profile -->
        To edit your profile, click <a href="{{ route('user.settings.edit') }}" class="text-blue-500 hover:underline">here</a>.

        <!-- Link to the user-facing profile -->
        Your user-facing profile is <a href="{{ route('userprofile.show', ['id' => Auth::user()->id]) }}" class="text-blue-500 hover:underline">here</a>.
    </div>

</x-app-layout>
