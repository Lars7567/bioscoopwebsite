<x-base-layout>

    <div class="container mx-auto px-4 py-8">
        @foreach ($films as $film)
            <div class="film-item bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4"><a href="films/{{ $film->id }}">{{ $film->title }}</a></h1>
                <p class="text-gray-600"><strong>Duur: </strong>{{ $film->duur }}   Minuten</p>
                <p class="text-gray-600"><strong>Release datum: </strong>{{ $film->release_datum }}</p>
            </div>
        @endforeach
        <a href="{{ route('films.create') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-600 font-semibold py-2 px-4 rounded-lg shadow transition duration-200">
            Film toevoegen
        </a>
    </div>
</x-base-layout>