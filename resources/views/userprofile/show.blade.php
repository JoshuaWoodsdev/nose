<!-- resources/views/userprofile/show.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Profile of ' . $user->name) }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
                    <!-- Profile content -->
                    <div class="profile-container">
                        <h1 class="text-3xl font-semibold">{{ $user->name }}'s Profile</h1>

                        <!-- Display profile picture if exists -->
                        @if ($user->profile_picture)
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="{{ $user->name }}'s Profile Picture" class="profile-picture w-32 h-32 rounded-full border-2 border-gray-300">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" alt="Default Profile Picture" class="profile-picture w-32 h-32 rounded-full border-2 border-gray-300">
                        @endif

                        <!-- Display bio if exists -->
                        <p class="mt-4 text-lg">{{ $user->bio ?? 'This user has no bio yet.' }}</p>

                        <!-- Optionally, you can add additional content or buttons here, like editing the profile -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
