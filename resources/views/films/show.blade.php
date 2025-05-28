<x-base-layout>
    <div class="max-w-2xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Film Details</h1>

        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <p class="text-gray-800 mb-2"><strong>Titel:</strong> {{ $film->title }}</p>
                <p class="text-gray-600 mb-1"><strong>Beschrijving:</strong> {{ $film->description }}</p>
                <p class="text-gray-600 mb-1"><strong>Duur:</strong> {{ $film->duration }} minuten</p>
                <p class="text-gray-600 mb-1"><strong>Release datum:</strong> {{ $film->release_date }}</p>
                <p class="text-gray-600 mb-1"><strong>Start tijd:</strong> {{ $film->startTime }}</p>
                <p class="text-gray-600 mb-1"><strong>Vereiste leeftijd:</strong> {{ $film->age_rating }}</p>
                <p class="text-gray-600 mb-1"><strong>Beschikbaarheid:</strong> {{ $film->availability ? 'Ja' : 'Nee' }}</p>
                <br>
                <div class="flex gap-4">
                    <a href="{{ route('films.edit', $film->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Bewerken</a>
                    <a href="{{ route('films.index') }}" class="inline-block bg-gray-300 hover:bg-gray-400 text-black font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Terug</a>
                </div>
            </div>
        </div>
    </div>
    
</x-base-layout>