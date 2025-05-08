<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Voeg een nieuwe film toe</h1>

        <form action="{{ route('films.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titel:</label>
                <input type="text" name="title" id="title" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="beschrijving" class="block text-gray-700 text-sm font-bold mb-2">Beschrijving:</label>
                <textarea name="beschrijving" id="beschrijving" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            </div>

            <div class="mb-4">
                <label for="duur" class="block text-gray-700 text-sm font-bold mb-2">Duur: (in minuten)</label>
                <input type="number" name="duur" id="duur" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="release_datum" class="block text-gray-700 text-sm font-bold mb-2">Release datum:</label>
                <input type="date" name="release_datum" id="release_datum" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="leeftijdskeuring" class="block text-gray-700 text-sm font-bold mb-2">Vereiste leeftijd:</label>
                <input type="text" name="leeftijdskeuring" id="leeftijdskeuring" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="beschikbaarheid" class="block text-gray-700 text-sm font-bold mb-2">Beschikbaarheid:</label>
                <input type="text" name="beschikbaarheid" id="beschikbaarheid" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Film aanmaken
            </button>
        </form>
    </div>
</x-base-layout>