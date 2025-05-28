<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Booking Overview</h1>

        <!-- Display Existing Bookings -->
        @if ($booking->isEmpty())
            <p class="text-gray-700">No bookings available.</p>
        @else
            <table class="table-auto w-full bg-white shadow-md rounded mb-6">
                <tbody>
                    @foreach ($booking->where('name', auth()->user()->name) as $booking)
                        <div class="p-6">
                            <p class="text-gray-800 mb-2"><strong>Naam:</strong> {{ $booking->name ?? 'Onbekend' }}</p>
                            <p class="text-gray-600 mb-1"><strong>Email:</strong> {{ $booking->email ?? 'Onbekend' }} Minuten</p>
                            <p class="text-gray-600 mb-1"><strong>Telefoon:</strong> {{ $booking->phone ?? 'Onbekend' }}</p>
                            <p class="text-gray-600 mb-1"><strong>Resevering tijd:</strong> {{ $booking->time ?? 'Onbekend' }}</p>
                            <br>
                            <p class="text-gray-800 mb-2"><strong>Stoel numer - rij:</strong> {{ $booking->seat->seat_number ?? 'Onbekend' }}</p>
                            <p class="text-gray-800 mb-2"><strong>Film:</strong> {{ $booking->film->title ?? 'Onbekend' }}</p>
                            <br>
                            <p class="text-gray-800 mb-2"><strong>Zaal:</strong> {{ $booking->filmzaal?->zaal?->zaal_nummer ?? 'Onbekend' }}</p>
                            <p class="text-gray-800 mb-2"><strong>Geluidsysteem:</strong> {{ $booking->filmzaal?->zaal?->geluidsysteem ?? 'Onbekend' }}</p>
                            <p class="text-gray-800 mb-2"><strong>Scherm Type:</strong> {{ $booking->filmzaal?->zaal?->scherm_type ?? 'Onbekend' }}</p>
                            <br>
                            @if($booking->film)
                                <p class="text-gray-600 mb-1"><strong>Film speeltijd:</strong> {{ $booking->film->duration }} minutes</p>
                                <p class="text-gray-600 mb-1"><strong>Start tijd:</strong> {{ $booking->film->startTime }} minutes</p>
                                <br>
                                <p class="text-gray-600 mb-4"><strong>Release datum:</strong> {{ $booking->film->release_date }}</p>
                            @endif
                        </div>
                        {{-- Geen foreach meer, direct de zaal tonen --}}
                        <hr class="my-4 border-gray-300">
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-base-layout>