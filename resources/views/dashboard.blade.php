<x-app-layout>


    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-900 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2>a test to see what is posts</h2>
    </x-slot>

    <div class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
                    <p class="text-lg">
                        {{ __("You're logged in!") }}
                    </p>
                    <!-- Add any additional content here like links, data, or images -->
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
                    <p class="text-lg">
                        {{ __('Things to do') }}
                    </p>
                    <!-- Add any additional content here like links, data, or images -->
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl rounded-xl p-8">
                <div class="text-gray-700">
                    <p class="text-lg">
                        {{ __('Your contacts') }}
                    </p>
                    <!-- Add any additional content here like links, data, or images -->
                </div>
            </div>
        </div>





    </div>
</x-app-layout>
