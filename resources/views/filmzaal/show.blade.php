<x-base-layout>
    <div class="max-w-2xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Film-Zaal Koppeling</h1>

        <div class="bg-white shadow-lg rounded-xl overflow-hidden">
            <div class="p-6">
                <p class="text-gray-800 mb-2"><strong>Film:</strong> {{ $filmzaal->film?->title ?? 'Onbekend' }}</p>
                <p class="text-gray-600 mb-1"><strong>Beschrijving:</strong> {{ $filmzaal->film?->description ?? 'Onbekend' }}</p>
                <p class="text-gray-600 mb-1"><strong>Duur:</strong> {{ $filmzaal->film?->duration ?? 'Onbekend' }} Minuten</p>
                <p class="text-gray-600 mb-1"><strong>Vereiste leeftijd:</strong> {{ $filmzaal->film?->age_rating ?? 'Onbekend' }}</p>
                <p class="text-gray-600 mb-1"><strong>Beschikbaarheid:</strong> {{ $filmzaal->film?->availability ?? 'Onbekend' }}</p>
                <br>
                <p class="text-gray-800 mb-2"><strong>Zaal:</strong> {{ $filmzaal->zaal?->zaal_nummer ?? 'Onbekend' }}</p>
                <p class="text-gray-800 mb-2"><strong>Geluidsysteem:</strong> {{ $filmzaal->zaal?->geluidsysteem ?? 'Onbekend' }}</p>
                <p class="text-gray-800 mb-2"><strong>Scherm Type:</strong> {{ $filmzaal->zaal?->scherm_type ?? 'Onbekend' }}</p>
                <br>
                @if($filmzaal->film)
                    <p class="text-gray-600 mb-1"><strong>Duration:</strong> {{ $filmzaal->film->duration }} minutes</p>
                    <p class="text-gray-600 mb-4"><strong>Start tijd:</strong> {{ $filmzaal->film->startTime }}</p>
                    <p class="text-gray-600 mb-4"><strong>Release Date:</strong> {{ $filmzaal->film->release_date }}</p>
                @endif
                <br>
                <a href="{{ route('resevering.create', $filmzaal->id) }}" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-600 font-semibold py-2 px-4 rounded-lg shadow transition duration-200">Reseveren</a>

            </div>
        </div>
        <br>
        <div class="text-center mt-10">
            <a href="{{ route('filmzaal.index') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                ← Terug naar overzicht
            </a>
        </div>
    </div>
</x-base-layout>
