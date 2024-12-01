<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('User') }}
        </h2>
        <h2>This should hold user page</h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
                    <!-- Profile content section -->
                    <p>Your profile information will be shown here.</p>
                    <!-- Link to edit the user profile -->
                    To edit your profile, click <a href="{{ route('user.settings.edit') }}"
                        class="text-blue-500 hover:underline">here</a>.

                    <!-- Link to the user-facing profile -->
                    Your user-facing profile is <a href="{{ route('userprofile.show', ['id' => Auth::user()->id]) }}"
                        class="text-blue-500 hover:underline">here</a>.
                </div>

                <div class="bg-gray-500">
                @include('partials.slide')
            </div>
            </div>
        </div>
</x-app-layout>
