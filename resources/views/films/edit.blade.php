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
                <input type="text" name="title" id="title" value="{{ $film->title }}" placeholder="Titel" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <textarea name="description" id="description" placeholder="Beschrijving" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $film->description }}</textarea>
            </div>

            <div class="mb-4">
                <input type="number" name="duration" id="duration" value="{{ $film->duration }}" placeholder="Duur (in minuten)" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <input type="date" name="release_date" id="release_date" value="{{ $film->release_date }}" placeholder="Release datum" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <input type="datetime-local" name="start_time" id="start_time" value="{{ $film->startTime }}" placeholder="Start tijd" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <select name="age_rating" id="age_rating" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Vereiste leeftijd</option>
                    @for ($i = 1; $i <= 18; $i++)
                        <option value="{{ $i }}" {{ $film->age_rating == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-4">
                <select name="availability" id="availability" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option disabled selected>Beschikbaarheid</option>
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