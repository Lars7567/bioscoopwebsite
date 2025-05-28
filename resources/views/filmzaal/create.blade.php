<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Maak een nieuwe reservering</h1>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <form action="{{ route('filmzaal.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <div class="mb-4">
                <label for="film_id" class="block text-gray-700 text-sm font-bold mb-2">Film</label>
                <select name="film_id" id="film_id" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected>Kies een film</option>
                    @foreach ($films as $film)
                        <option value="{{ $film->id }}">
                            {{ $film->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="zaal_id" class="block text-gray-700 text-sm font-bold mb-2">Zaal</label>
                <select name="zaal_id" id="zaal_id" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected>Kies een zaal</option>
                    @foreach ($zalen as $zaal)
                        <option value="{{ $zaal->id }}">
                            {{ $zaal->zaal_nummer }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Reservering maken
            </button>
        </form>
    </div>
</x-base-layout>