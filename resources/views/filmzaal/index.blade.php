<x-base-layout>
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Alle koppelingen tussen films en zalen</h1>

        <div class="flex justify-center">
            <table class="min-w-fit bg-white shadow-md rounded mb-6">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-center">Film</th>
                        <th class="py-2 px-4 border-b text-center">Zaal</th>
                        <th class="py-2 px-4 border-b text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($filmzalen as $filmzaal)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $filmzaal->film?->title ?? 'Onbekend' }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $filmzaal->zaal?->zaal_nummer ?? 'Onbekend' }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('filmzaal.show', $filmzaal->id) }}"
                                   class="inline-block bg-blue-500 hover:bg-blue-700 text-black font-semibold py-1 px-4 rounded shadow transition duration-200">
                                    Bekijk
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <div class="text-center mt-10">
        <a href="{{ route('filmzaal.create') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-300 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
            ➕ Film - Zaal kopeling toevoegen
        </a>
    </div>
</x-base-layout>
