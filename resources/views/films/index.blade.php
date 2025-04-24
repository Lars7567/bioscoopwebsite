<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        @foreach ($films as $film)
            <div class="film-item bg-white shadow-md rounded-lg p-6 mb-6">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $film->title }}</h1>
                <p class="text-gray-600"><strong>Beschrijving: </strong>{{ $film->beschrijving }}</p>
                <p class="text-gray-600"><strong>Duur: </strong>{{ $film->duur }}</p>
                <p class="text-gray-600"><strong>Release datum: </strong>{{ $film->release_datum }}</p>
                <p class="text-gray-600"><strong>Vereiste leeftijd: </strong>{{ $film->leeftijdskeuring }}</p>
                <p class="text-gray-600"><strong>Beschikbaarheid: </strong>{{ $film->beschikbaarheid }}</p>
                <br>
                <a href="films/edit/{{ $film->id }}" class="btn btn-success btn-sm" style="width: 100px">Bewerken</a>
            </div>
        @endforeach
    </div>
</x-base-layout>