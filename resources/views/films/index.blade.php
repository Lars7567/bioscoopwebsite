<x-base-layout>
    <div class="max-w-7xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-800 mb-10 text-center">Current Film Offerings</h1>

        <div class="flex justify-center">
            <table class="min-w-fit bg-white shadow-md rounded mb-6">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-center">Titel</th>
                        <th class="py-2 px-4 border-b text-center">Duur</th>
                        <th class="py-2 px-4 border-b text-center">Release datum</th>
                        <th class="py-2 px-4 border-b text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($films as $film)
                        <tr>
                            <td class="py-2 px-4 border-b text-center">{{ $film->title }}</td>
                            <td class="py-2 px-4 border-b text-center">{{ $film->duration }} minuten</td>
                            <td class="py-2 px-4 border-b text-center">{{ $film->release_date }}</td>
                            <td class="py-2 px-4 border-b text-center">
                                <a href="{{ route('films.show', $film->id) }}"
                                   class="inline-block bg-blue-500 hover:bg-blue-700 text-black font-semibold py-1 px-4 rounded shadow transition duration-200 mr-2">
                                    Bekijk
                                </a>
                                <a href="{{ route('films.delete', $film->id) }}"
                                   class="inline-block bg-red-500 hover:bg-red-700 text-black font-semibold py-1 px-4 rounded shadow transition duration-200">
                                    Verwijderen
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="text-center mt-10">
            <a href="{{ route('films.create') }}"
                class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
                ➕ Add Film
            </a>
        </div>
    </div>
</x-base-layout>
