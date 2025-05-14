<x-base-layout>
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Current Film Offerings</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($films as $film)
                <div class="bg-white shadow-lg rounded-xl overflow-hidden transition transform hover:scale-105 duration-300">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">
                            <a href="{{ route('films.show', $film->id) }}" class="hover:underline">
                                {{ $film->title }}
                            </a>
                        </h2>
                        <p class="text-gray-600 mb-1"><strong>Duration:</strong> {{ $film->duration }} minutes</p>
                        <p class="text-gray-600 mb-4"><strong>Release Date:</strong> {{ $film->release_date }}</p>

                        <div class="flex justify-between items-center mt-4">
                            <a href="{{ route('films.show', $film->id) }}" class="text-blue-600 hover:underline text-sm font-medium">
                                Bekijk
                            </a>
                            <a href="{{ route('films.delete', $film->id) }}" class="text-red-600 hover:underline text-sm font-medium">
                                    Verwijderen
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('films.create') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-300 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                ➕ Film toevoegen
            </a>
        </div>
    </div>
</x-base-layout>
