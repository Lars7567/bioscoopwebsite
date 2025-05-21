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
        <form action="{{ route('resevering.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf

            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">

            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2"></label>
                <input type="text" name="name" id="name" placeholder="Naam" value="{{$user->name}}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2"></label>
                <input type="email" name="email" id="email" placeholder="E-mail" value="{{$user->email}}" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="phone" class="block text-gray-700 text-sm font-bold mb-2"></label>
                <input type="text" name="phone" id="phone" placeholder="Telefoonnummer" required  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="time" class="block text-gray-700 text-sm font-bold mb-2">Tijd</label>
                <input type="date" name="time" id="time" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="seat_id" class="block text-gray-700 text-sm font-bold mb-2">Stoel</label>
                <select name="seat_id" id="seat_id" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected>Kies een stoel</option>
                    @foreach ($seats as $seat)
                        <option value="{{ $seat->id }}">
                            Rij {{ $seat->row_number }} - Stoel {{ $seat->seat_number }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="film_id" class="block text-gray-700 text-sm font-bold mb-2">Film:</label>
                <input type="text" name="film_title" id="film_title" value="{{ $film->title }}" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <input type="hidden" name="film_id" id="film_id" value="{{ $film->id }}"> 
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-600 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Reservering maken
            </button>
        </form>
    </div>
</x-base-layout>