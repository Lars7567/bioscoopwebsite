<x-base-layout>
    <div class="container mx-auto px-4 py-8">
            <div class="film-item bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">- {{ $film->title }} -</h1>
                <p class="text-gray-600"><strong>Beschrijving: </strong></p>
                <div class="mb-3 p-2 border border-gray-300 rounded shadow-sm">
                    <p class="text-gray-800 leading-relaxed">
                        {{ $film->description }}
                    </p>
                </div>
                <p class="text-gray-600"><strong>Duur: </strong></p>
                <div class="mb-3 p-2 border border-gray-300 rounded shadow-sm">
                    <p class="text-gray-800 leading-relaxed">
                        {{ $film->duration }}   Minuten
                    </p>
                </div>
                <p class="text-gray-600"><strong>Release datum: </strong></p>
                <div class="mb-3 p-2 border border-gray-300 rounded shadow-sm">
                    <p class="text-gray-800 leading-relaxed">
                        {{ $film->release_date }}
                    </p>
                </div>
                <p class="text-gray-600"><strong>Vereiste leeftijd: </strong></p>
                <div class="mb-3 p-2 border border-gray-300 rounded shadow-sm">
                    <p class="text-gray-800 leading-relaxed">
                        {{ $film->age_rating }}
                    </p>
                </div>
                <p class="text-gray-600"><strong>Beschikbaarheid: </strong></p>
                <div class="mb-3 p-2 border border-gray-300 rounded shadow-sm">
                    <p class="text-gray-800 leading-relaxed">
                        {{ $film->availability ? 'Ja' : 'Nee' }}
                    </p>
                </div>
                <br>
                <a href="{{ route('resevering.create', $film->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-600 font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Reseveren</a>
                <a href="{{ route('films.edit', $film->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-600 font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Bewerken</a>
                <a href="{{ route('films.index') }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-600 font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Terug</a>
            </div>
    </div>
    
</x-base-layout>