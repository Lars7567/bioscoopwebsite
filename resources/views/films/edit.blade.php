<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Aanpassen van film</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('films.update', $film->id) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Titel:</label>
                <input type="text" name="title" id="title" value="{{ $film->title }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Beschrijving:</label>
                <textarea name="description" id="description" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $film->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="duration" class="block text-gray-700 text-sm font-bold mb-2">Duur: (in minuten)</label>
                <input type="number" name="duration" id="duration" value="{{ $film->duration }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="release_date" class="block text-gray-700 text-sm font-bold mb-2">Release datum:</label>
                <input type="date" name="release_date" id="release_date" value="{{ $film->release_date }}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="age_rating" class="block text-gray-700 text-sm font-bold mb-2">Vereiste leeftijd:</label>
                <select name="age_rating" id="age_rating" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @for ($i = 1; $i <= 18; $i++)
                        <option value="{{ $i }}" {{ $film->age_rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-4">
                <label for="availability" class="block text-gray-700 text-sm font-bold mb-2">Beschikbaarheid:</label>
                <select name="availability" id="availability" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="1" {{ $film->availability == 1 ? 'selected' : '' }}>Ja</option>
                    <option value="0" {{ $film->availability == 0 ? 'selected' : '' }}>Nee</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Film wijzigen
            </button>
        </form>
    </div>
</x-base-layout>