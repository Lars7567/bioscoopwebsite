<x-base-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-700 leading-tight">
            Welkom bij MovieTime Bioscoop
        </h2>
    </x-slot>

    <div class="bg-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <!-- Welkom -->
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Een beleving om nooit te vergeten</h1>
            <p class="text-lg text-gray-600 mb-8">
                MovieTime biedt jou de nieuwste films in comfortabele zalen met het beste geluid en beeld. Kom langs en geniet van een avondje uit zoals het hoort.
            </p>

            <!-- CTA knop -->
            <br>
            <a href="/films" class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-300 font-semibold py-3 px-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                Bekijk ons filmaanbod
            </a>
            
        </div>
    </div>

    <!-- Extra info -->
    <div class="bg-gray-100 py-12 mt-12">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Openingstijden</h2>
            <p class="text-gray-600 mb-2">Maandag t/m Vrijdag: 12:00 - 23:00</p>
            <p class="text-gray-600 mb-2">Zaterdag & Zondag: 10:00 - 00:00</p>
        </div>
    </div>

    <!-- Locatie of slogan -->
    <div class="py-12">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-xl font-semibold text-gray-700 mb-2">📍 Gevestigd in het hart van de stad</h3>
            <p class="text-gray-500">Gemakkelijk bereikbaar met auto en openbaar vervoer – met ruime parkeergelegenheid.</p>
        </div>
    </div>
</x-base-layout>
