<x-base-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-700 leading-tight">
            Welkom bij MovieTime Bioscoop
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <div class="relative bg-gray-900">
        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=1500&q=80"
             alt="Bioscoopzaal" 
             class="w-full h-96 object-cover opacity-60 rounded-b-2xl shadow-lg">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <h1 class="text-5xl font-extrabold text-white drop-shadow-lg mb-4">Een beleving om nooit te vergeten</h1>
            <p class="text-xl text-white mb-8 drop-shadow">Geniet van de nieuwste films in luxe zalen met het beste geluid en beeld.</p>
            <br>
            <a href="/films" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg shadow-lg transition duration-300 text-lg">
                Bekijk ons filmaanbod
            </a>
        </div>
    </div>

    <!-- USP's -->
    <div class="bg-white py-16">    
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            <div>
                <img src="https://img.icons8.com/ios-filled/100/000000/movie-projector.png" alt="Projector" class="mx-auto mb-4 h-16">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Nieuwste Films</h3>
                <p class="text-gray-600">Altijd het nieuwste aanbod, van blockbusters tot arthouse.</p>
            </div>
            <div>
                <img src="https://img.icons8.com/ios-filled/100/000000/armchair.png" alt="Comfort" class="mx-auto mb-4 h-16">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Comfortabele Stoelen</h3>
                <p class="text-gray-600">Ruime, luxe stoelen voor het ultieme kijkcomfort.</p>
            </div>
            <div>
                <img src="https://img.icons8.com/ios-filled/100/000000/speaker.png" alt="Geluid" class="mx-auto mb-4 h-16">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Topkwaliteit Geluid</h3>
                <p class="text-gray-600">Ervaar films met het beste beeld en geluid.</p>
            </div>
        </div>
    </div>

    <!-- Openingstijden & Locatie -->
    <div class="bg-gray-100 py-16">
        <div class="max-w-4xl mx-auto px-4 grid md:grid-cols-2 gap-10 text-center">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Openingstijden</h2>
                <p class="text-gray-600 mb-2">Maandag t/m Vrijdag: 12:00 - 23:00</p>
                <p class="text-gray-600 mb-2">Zaterdag & Zondag: 10:00 - 00:00</p>
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Locatie</h2>
                <p class="text-gray-600 mb-2">📍 Gevestigd in het hart van de stad</p>
                <p class="text-gray-500">Gemakkelijk bereikbaar met auto en openbaar vervoer – met ruime parkeergelegenheid.</p>
                <img src="https://images.unsplash.com/photo-1509228468518-180dd4864904?auto=format&fit=crop&w=600&q=80" alt="Locatie" class="mx-auto mt-4 rounded-lg shadow-md h-32 object-cover">
            </div>
        </div>
    </div>

    <!-- Footer Banner -->
    <div class="bg-blue-600 py-8">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <h3 class="text-2xl font-semibold text-white mb-2">Reserveer nu je tickets en beleef een magische filmavond!</h3>
            <a href="/films" class="inline-block mt-4 bg-white text-blue-700 font-semibold py-2 px-6 rounded-full shadow hover:bg-gray-100 transition">Bekijk films</a>
        </div>
    </div>
</x-base-layout>
