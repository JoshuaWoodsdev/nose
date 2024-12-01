
<x-app-layout>
    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
        <h2 class="text-3xl font-semibold mb-6">Edit Profile</h2>

        <!-- Display success message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 mb-4 rounded-lg border border-green-200">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('user.settings.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- This ensures the form sends a PUT request -->

            <!-- Name Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Email Input -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>

            <!-- Bio Textarea -->
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                <textarea name="bio" id="bio" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">{{ old('bio', $user->bio) }}</textarea>
            </div>

            <!-- Links Input -->
            <div class="mb-4">
                <label for="links" class="block text-sm font-medium text-gray-700">Links</label>
                <input type="url" name="links" id="links" value="{{ old('links', $user->links) }}" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Profile Picture Input -->
            <div class="mb-4">
                <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
                <input type="file" name="profile_picture" id="profile_picture" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    Update Profile
                </button>
            </div>
        </form>
    </div></div></div>
</x-app-layout>
