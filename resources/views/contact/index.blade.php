<x-base-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Contact
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto px-6 py-12 bg-white rounded-lg shadow-md mt-6 space-y-8">
        <!-- Contactgegevens -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Onze gegevens</h3>
            <p class="text-gray-700">CinemaLuxe</p>
            <p class="text-gray-700">Filmstraat 123</p>
            <p class="text-gray-700">1234 AB Amsterdam</p>
            <p class="text-gray-700">Telefoon: <a href="tel:+31201234567" class="text-blue-600 hover:underline">020 - 123 4567</a></p>
            <p class="text-gray-700">E-mail: <a href="mailto:info@cinemaluxe.nl" class="text-blue-600 hover:underline">info@cinemaluxe.nl</a></p>
        </div>

        <!-- Contactformulier -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Stuur ons een bericht</h3>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="naam" class="block text-sm font-medium text-gray-700">Naam</label>
                    <input type="text" id="naam" name="naam" required
                        class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">E-mailadres</label>
                    <input type="email" id="email" name="email" required
                        class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                    <label for="bericht" class="block text-sm font-medium text-gray-700">Bericht</label>
                    <textarea id="bericht" name="bericht" rows="4" required
                        class="mt-1 w-full rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow-md transition duration-300">
                    Verstuur
                </button>
            </form>
        </div>

        <!-- Locatiekaart -->
        <div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Onze locatie</h3>
            <div class="w-full h-64 rounded-md overflow-hidden shadow-sm">
                <iframe
                    src="https://maps.google.com/maps?q=Amsterdam&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</x-base-layout>
